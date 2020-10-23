<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePaymentAccountRequest;
use App\Http\Requests\Admin\UpdatePaymentAccountRequest;
use App\Repositories\Admin\PaymentAccountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaymentAccountController extends AppBaseController
{
    /** @var  PaymentAccountRepository */
    private $paymentAccountRepository;

    public function __construct(PaymentAccountRepository $paymentAccountRepo)
    {
        $this->paymentAccountRepository = $paymentAccountRepo;
    }

    /**
     * Display a listing of the PaymentAccount.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentAccountRepository->pushCriteria(new RequestCriteria($request));
        $paymentAccounts = $this->paymentAccountRepository->all();

        return view('admin.payment_accounts.index')
            ->with('paymentAccounts', $paymentAccounts);
    }

    /**
     * Show the form for creating a new PaymentAccount.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.payment_accounts.create');
    }

    /**
     * Store a newly created PaymentAccount in storage.
     *
     * @param CreatePaymentAccountRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentAccountRequest $request)
    {
        $input = $request->all();

        $paymentAccount = $this->paymentAccountRepository->create($input);

        Flash::success('Payment Account saved successfully.');

        return redirect(route('admin.paymentAccounts.index'));
    }

    /**
     * Display the specified PaymentAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paymentAccount = $this->paymentAccountRepository->findWithoutFail($id);

        if (empty($paymentAccount)) {
            Flash::error('Payment Account not found');

            return redirect(route('admin.paymentAccounts.index'));
        }

        return view('admin.payment_accounts.show')->with('paymentAccount', $paymentAccount);
    }

    /**
     * Show the form for editing the specified PaymentAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paymentAccount = $this->paymentAccountRepository->findWithoutFail($id);

        if (empty($paymentAccount)) {
            Flash::error('Payment Account not found');

            return redirect(route('admin.paymentAccounts.index'));
        }

        return view('admin.payment_accounts.edit')->with('paymentAccount', $paymentAccount);
    }

    /**
     * Update the specified PaymentAccount in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentAccountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentAccountRequest $request)
    {
        $paymentAccount = $this->paymentAccountRepository->findWithoutFail($id);

        if (empty($paymentAccount)) {
            Flash::error('Payment Account not found');

            return redirect(route('admin.paymentAccounts.index'));
        }

        $paymentAccount = $this->paymentAccountRepository->update($request->all(), $id);

        Flash::success('Payment Account updated successfully.');

        return redirect(route('admin.paymentAccounts.index'));
    }

    /**
     * Remove the specified PaymentAccount from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paymentAccount = $this->paymentAccountRepository->findWithoutFail($id);

        if (empty($paymentAccount)) {
            Flash::error('Payment Account not found');

            return redirect(route('admin.paymentAccounts.index'));
        }

        $this->paymentAccountRepository->delete($id);

        Flash::success('Payment Account deleted successfully.');

        return redirect(route('admin.paymentAccounts.index'));
    }
}
