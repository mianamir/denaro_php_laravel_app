<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\GalleryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\Admin\Gallery;
use App\Repositories\Admin\GalleryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class GalleryController extends AppBaseController
{
    /** @var  GalleryRepository */
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
    }

    /**
     * Display a listing of the Gallery.
     *
     * @param GalleryDataTable $galleryDataTable
     * @return Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('order_image','ASC')->get();

        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new Gallery.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created Gallery in storage.
     *
     * @param CreateGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryRequest $request)
    {

        $input = $request->all();

        $gallery = $this->galleryRepository->create($input);

        if(!empty($request->get('order_image'))){
            $gallery->order_image =  $request->get('order_image');
            $gallery->save();
        }

        if ($request->file('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $gallery->image = $data['original_filedir'];
            $gallery->cat_id = $request->get('cat_id');
            $gallery->update();
        }

        Flash::success('Gallery saved successfully.');

        return redirect(route('admin.galleries.index'));
    }

    /**
     * Display the specified Gallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }

        return view('admin.galleries.show')->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified Gallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }

        return view('admin.galleries.edit')->with('gallery', $gallery);
    }

    /**
     * Update the specified Gallery in storage.
     *
     * @param  int $id
     * @param UpdateGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }

        $gallery = $this->galleryRepository->update($request->all(), $id);

        if(!empty($request->get('order_image'))){
            $gallery->order_image =  $request->get('order_image');
            $gallery->save();
        }

        if ($request->hasFile('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $gallery->image = $data['original_filedir'];
            if($request->get('cat_id') != -1){
                $gallery->cat_id = $request->get('cat_id');
            }else{
                $gallery->cat_id = $gallery->cat_id;
            }
            $gallery->update();

        }else{
            if($request->get('cat_id') != -1){
                $gallery->cat_id = $request->get('cat_id');
            }else{
                $gallery->cat_id = $gallery->cat_id;
            }
            $gallery->image = $gallery->image;
            $gallery->update();
        }


        Flash::success('Gallery updated successfully.');

        return redirect(route('admin.galleries.index'));
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }

        $this->galleryRepository->delete($id);

        Flash::success('Gallery deleted successfully.');

        return redirect(route('admin.galleries.index'));
    }
}
