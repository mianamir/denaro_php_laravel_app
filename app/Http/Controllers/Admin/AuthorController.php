<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AuthorDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateAuthorRequest;
use App\Http\Requests\Admin\UpdateAuthorRequest;
use App\Models\Admin\Author;
use App\Repositories\Admin\AuthorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AuthorController extends AppBaseController
{
    /** @var  AuthorRepository */
    private $authorRepository;

    public function __construct(AuthorRepository $authorRepo)
    {
        $this->authorRepository = $authorRepo;
    }

    /**
     * Display a listing of the Author.
     *
     * @param AuthorDataTable $authorDataTable
     * @return Response
     */
    public function index()
    {
        $authors = Author::all();
        return view('admin.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new Author.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.authors.create');
    }

    /**
     * Store a newly created Author in storage.
     *
     * @param CreateAuthorRequest $request
     *
     * @return Response
     */
    public function store(CreateAuthorRequest $request)
    {
        $input = $request->all();

        $author = $this->authorRepository->create($input);

        Flash::success('Video gallery saved successfully.');

        return redirect(route('admin.authors.index'));
    }

    /**
     * Display the specified Author.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Video gallery not found');

            return redirect(route('admin.authors.index'));
        }

        return view('admin.authors.show')->with('author', $author);
    }

    /**
     * Show the form for editing the specified Author.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Video gallery not found');

            return redirect(route('admin.authors.index'));
        }

        return view('admin.authors.edit')->with('author', $author);
    }

    /**
     * Update the specified Author in storage.
     *
     * @param  int              $id
     * @param UpdateAuthorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAuthorRequest $request)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Video gallery not found');

            return redirect(route('admin.authors.index'));
        }

        $author = $this->authorRepository->update($request->all(), $id);

        Flash::success('Video gallery updated successfully.');

        return redirect(route('admin.authors.index'));
    }

    /**
     * Remove the specified Author from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $author = $this->authorRepository->findWithoutFail($id);

        if (empty($author)) {
            Flash::error('Video gallery not found');

            return redirect(route('admin.authors.index'));
        }

        $author->forceDelete();

        Flash::success('Video gallery deleted successfully.');

        return redirect(route('admin.authors.index'));
    }
}
