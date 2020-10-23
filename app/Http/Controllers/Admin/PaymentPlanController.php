<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePaymentPlanRequest;
use App\Http\Requests\Admin\UpdatePaymentPlanRequest;
use App\Repositories\Admin\PaymentPlanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaymentPlanController extends AppBaseController
{
    /** @var  PaymentPlanRepository */
    private $paymentPlanRepository;

    public function __construct(PaymentPlanRepository $paymentPlanRepo)
    {
        $this->paymentPlanRepository = $paymentPlanRepo;
    }

    /**
     * Display a listing of the PaymentPlan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentPlanRepository->pushCriteria(new RequestCriteria($request));
        $paymentPlans = $this->paymentPlanRepository->all();

        return view('admin.payment_plans.index')
            ->with('paymentPlans', $paymentPlans);
    }

    /**
     * Show the form for creating a new PaymentPlan.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.payment_plans.create');
    }

    /**
     * Store a newly created PaymentPlan in storage.
     *
     * @param CreatePaymentPlanRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentPlanRequest $request)
    {
        $input = $request->all();

        $paymentPlan = $this->paymentPlanRepository->create($input);

        Flash::success('Payment Plan saved successfully.');

        return redirect(route('admin.paymentPlans.index'));
    }

    /**
     * Display the specified PaymentPlan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paymentPlan = $this->paymentPlanRepository->findWithoutFail($id);

        if (empty($paymentPlan)) {
            Flash::error('Payment Plan not found');

            return redirect(route('admin.paymentPlans.index'));
        }

        return view('admin.payment_plans.show')->with('paymentPlan', $paymentPlan);
    }

    /**
     * Show the form for editing the specified PaymentPlan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paymentPlan = $this->paymentPlanRepository->findWithoutFail($id);

        if (empty($paymentPlan)) {
            Flash::error('Payment Plan not found');

            return redirect(route('admin.paymentPlans.index'));
        }

        return view('admin.payment_plans.edit')->with('paymentPlan', $paymentPlan);
    }

    /**
     * Update the specified PaymentPlan in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentPlanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentPlanRequest $request)
    {
        $paymentPlan = $this->paymentPlanRepository->findWithoutFail($id);

        if (empty($paymentPlan)) {
            Flash::error('Payment Plan not found');

            return redirect(route('admin.paymentPlans.index'));
        }

        $paymentPlan = $this->paymentPlanRepository->update($request->all(), $id);

        Flash::success('Payment Plan updated successfully.');

        return redirect(route('admin.paymentPlans.index'));
    }

    /**
     * Remove the specified PaymentPlan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paymentPlan = $this->paymentPlanRepository->findWithoutFail($id);

        if (empty($paymentPlan)) {
            Flash::error('Payment Plan not found');

            return redirect(route('admin.paymentPlans.index'));
        }

        $this->paymentPlanRepository->delete($id);

        Flash::success('Payment Plan deleted successfully.');

        return redirect(route('admin.paymentPlans.index'));
    }
}
