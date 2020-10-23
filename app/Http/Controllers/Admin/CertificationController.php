<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCertificationRequest;
use App\Http\Requests\Admin\UpdateCertificationRequest;
use App\Repositories\Admin\CertificationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CertificationController extends AppBaseController
{
    /** @var  CertificationRepository */
    private $certificationRepository;

    public function __construct(CertificationRepository $certificationRepo)
    {
        $this->certificationRepository = $certificationRepo;
    }

    /**
     * Display a listing of the Certification.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->certificationRepository->pushCriteria(new RequestCriteria($request));
        $certifications = $this->certificationRepository->all();

        return view('admin.certifications.index')
            ->with('certifications', $certifications);
    }

    /**
     * Show the form for creating a new Certification.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.certifications.create');
    }

    /**
     * Store a newly created Certification in storage.
     *
     * @param CreateCertificationRequest $request
     *
     * @return Response
     */
    public function store(CreateCertificationRequest $request)
    {
        $input = $request->all();

        $certification = $this->certificationRepository->create($input);

        Flash::success('Certification saved successfully.');

        return redirect(route('admin.certifications.index'));
    }

    /**
     * Display the specified Certification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $certification = $this->certificationRepository->findWithoutFail($id);

        if (empty($certification)) {
            Flash::error('Certification not found');

            return redirect(route('admin.certifications.index'));
        }

        return view('admin.certifications.show')->with('certification', $certification);
    }

    /**
     * Show the form for editing the specified Certification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $certification = $this->certificationRepository->findWithoutFail($id);

        if (empty($certification)) {
            Flash::error('Certification not found');

            return redirect(route('admin.certifications.index'));
        }

        return view('admin.certifications.edit')->with('certification', $certification);
    }

    /**
     * Update the specified Certification in storage.
     *
     * @param  int              $id
     * @param UpdateCertificationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCertificationRequest $request)
    {
        $certification = $this->certificationRepository->findWithoutFail($id);

        if (empty($certification)) {
            Flash::error('Certification not found');

            return redirect(route('admin.certifications.index'));
        }

        $certification = $this->certificationRepository->update($request->all(), $id);

        Flash::success('Certification updated successfully.');

        return redirect(route('admin.certifications.index'));
    }

    /**
     * Remove the specified Certification from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $certification = $this->certificationRepository->findWithoutFail($id);

        if (empty($certification)) {
            Flash::error('Certification not found');

            return redirect(route('admin.certifications.index'));
        }

        $this->certificationRepository->delete($id);

        Flash::success('Certification deleted successfully.');

        return redirect(route('admin.certifications.index'));
    }
}
