<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PageDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreatePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;
use App\Models\Admin\Page;
use App\Repositories\Admin\PageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PageController extends AppBaseController
{
    /** @var  PageRepository */
    private $pageRepository;

    public function __construct(PageRepository $pageRepo)
    {
        $this->pageRepository = $pageRepo;
    }

    /**
     * Display a listing of the Page.
     *
     * @param PageDataTable $pageDataTable
     * @return Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created Page in storage.
     *
     * @param CreatePageRequest $request
     *
     * @return Response
     */
    public function store(CreatePageRequest $request)
    {
        $input = $request->all();

        $page = $this->pageRepository->create($input);

        Flash::success('Page saved successfully.');

        return redirect(route('admin.pages.index'));
    }

    /**
     * Display the specified Page.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $page = Page::find($id);
//        dd($page);
        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('admin.pages.index'));
        }

        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified Page.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $page = $this->pageRepository->findWithoutFail($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('admin.pages.index'));
        }

        return view('admin.pages.edit')->with('page', $page);
    }

    /**
     * Update the specified Page in storage.
     *
     * @param  int $id
     * @param UpdatePageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePageRequest $request)
    {
        $page = $this->pageRepository->findWithoutFail($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('admin.pages.index'));
        }

        $page = $this->pageRepository->update($request->all(), $id);

        if ($request->file('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $page->image = $data['original_filedir'];
            $page->update();
        }

        Flash::success('Page updated successfully.');

        return redirect(route('admin.pages.index'));
    }

    /**
     * Remove the specified Page from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $page = $this->pageRepository->findWithoutFail($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('admin.pages.index'));
        }

        $this->pageRepository->delete($id);

        Flash::success('Page deleted successfully.');

        return redirect(route('admin.pages.index'));
    }
}
