<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateDownloadRequest;
use App\Http\Requests\Admin\UpdateDownloadRequest;
use App\Models\Admin\Download;
use App\Repositories\Admin\DownloadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DownloadController extends AppBaseController
{
    /** @var  DownloadRepository */
    private $downloadRepository;

    public function __construct(DownloadRepository $downloadRepo)
    {
        $this->downloadRepository = $downloadRepo;
    }

    /**
     * Display a listing of the Download.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->downloadRepository->pushCriteria(new RequestCriteria($request));
        $downloads = $this->downloadRepository->all();

        return view('admin.downloads.index')
            ->with('downloads', $downloads);
    }

    /**
     * Show the form for creating a new Download.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.downloads.create');
    }

    /**
     * Store a newly created Download in storage.
     *
     * @param CreateDownloadRequest $request
     *
     * @return Response
     */
    public function store(CreateDownloadRequest $request)
    {
        $input = $request->all();


        $download = $this->downloadRepository->create($input);

        if ($request->file('file')) {
            $file = $request->file;
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/downloads/', $fileName);
            $download->file = 'assets/downloads/'. $fileName;
            $download->save();
        }


        Flash::success('Download saved successfully.');

        return redirect(route('admin.downloads.index'));
    }

    /**
     * Display the specified Download.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $download = $this->downloadRepository->findWithoutFail($id);

        if (empty($download)) {
            Flash::error('Download not found');

            return redirect(route('admin.downloads.index'));
        }

        return view('admin.downloads.show')->with('download', $download);
    }

    /**
     * Show the form for editing the specified Download.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $download = $this->downloadRepository->findWithoutFail($id);

        if (empty($download)) {
            Flash::error('Download not found');

            return redirect(route('admin.downloads.index'));
        }

        return view('admin.downloads.edit')->with('download', $download);
    }

    /**
     * Update the specified Download in storage.
     *
     * @param  int              $id
     * @param UpdateDownloadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDownloadRequest $request)
    {
        $download = $this->downloadRepository->findWithoutFail($id);

        if (empty($download)) {
            Flash::error('Download not found');

            return redirect(route('admin.downloads.index'));
        }

        $download = $this->downloadRepository->update($request->all(), $id);

        if ($request->file('file')) {
            $file = $request->file;
            $fileName = str_random() . time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/downloads/', $fileName);
            $download->file = 'assets/downloads/'. $fileName;
            $download->update();
        }

        Flash::success('Download updated successfully.');

        return redirect(route('admin.downloads.index'));
    }

    /**
     * Remove the specified Download from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $download = $this->downloadRepository->findWithoutFail($id);

        if (empty($download)) {
            Flash::error('Download not found');

            return redirect(route('admin.downloads.index'));
        }

        $this->downloadRepository->delete($id);

        Flash::success('Download deleted successfully.');

        return redirect(route('admin.downloads.index'));
    }
}
