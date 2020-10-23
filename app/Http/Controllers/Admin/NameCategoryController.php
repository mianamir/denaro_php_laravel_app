<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateNameCategoryRequest;
use App\Http\Requests\Admin\UpdateNameCategoryRequest;
use App\Repositories\Admin\NameCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NameCategoryController extends AppBaseController
{
    /** @var  NameCategoryRepository */
    private $nameCategoryRepository;

    public function __construct(NameCategoryRepository $nameCategoryRepo)
    {
        $this->nameCategoryRepository = $nameCategoryRepo;
    }

    /**
     * Display a listing of the NameCategory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nameCategoryRepository->pushCriteria(new RequestCriteria($request));
        $nameCategories = $this->nameCategoryRepository->all();

        return view('admin.name_categories.index')
            ->with('nameCategories', $nameCategories);
    }

    /**
     * Show the form for creating a new NameCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.name_categories.create');
    }

    /**
     * Store a newly created NameCategory in storage.
     *
     * @param CreateNameCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateNameCategoryRequest $request)
    {
        $input = $request->all();

        $nameCategory = $this->nameCategoryRepository->create($input);

        Flash::success('Name Category saved successfully.');

        return redirect(route('admin.nameCategories.index'));
    }

    /**
     * Display the specified NameCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nameCategory = $this->nameCategoryRepository->findWithoutFail($id);

        if (empty($nameCategory)) {
            Flash::error('Name Category not found');

            return redirect(route('admin.nameCategories.index'));
        }

        return view('admin.name_categories.show')->with('nameCategory', $nameCategory);
    }

    /**
     * Show the form for editing the specified NameCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nameCategory = $this->nameCategoryRepository->findWithoutFail($id);

        if (empty($nameCategory)) {
            Flash::error('Name Category not found');

            return redirect(route('admin.nameCategories.index'));
        }

        return view('admin.name_categories.edit')->with('nameCategory', $nameCategory);
    }

    /**
     * Update the specified NameCategory in storage.
     *
     * @param  int              $id
     * @param UpdateNameCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNameCategoryRequest $request)
    {
        $nameCategory = $this->nameCategoryRepository->findWithoutFail($id);

        if (empty($nameCategory)) {
            Flash::error('Name Category not found');

            return redirect(route('admin.nameCategories.index'));
        }

        $nameCategory = $this->nameCategoryRepository->update($request->all(), $id);

        Flash::success('Name Category updated successfully.');

        return redirect(route('admin.nameCategories.index'));
    }

    /**
     * Remove the specified NameCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nameCategory = $this->nameCategoryRepository->findWithoutFail($id);

        if (empty($nameCategory)) {
            Flash::error('Name Category not found');

            return redirect(route('admin.nameCategories.index'));
        }

        $this->nameCategoryRepository->delete($id);

        Flash::success('Name Category deleted successfully.');

        return redirect(route('admin.nameCategories.index'));
    }
}
