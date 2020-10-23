<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateHomeGalleryRequest;
use App\Http\Requests\Admin\UpdateHomeGalleryRequest;
use App\Models\Admin\Gallery;
use App\Models\Admin\HomeGallery;
use App\Repositories\Admin\HomeGalleryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class HomeGalleryController extends AppBaseController
{
    /** @var  HomeGalleryRepository */
    private $homeGalleryRepository;

    public function __construct(HomeGalleryRepository $homeGalleryRepo)
    {
        $this->homeGalleryRepository = $homeGalleryRepo;
    }

    /**
     * Display a listing of the HomeGallery.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {

        $homeGalleries = HomeGallery::orderBy('order_image','ASC')->get();

        return view('admin.home_galleries.index')
            ->with('homeGalleries', $homeGalleries);
    }

    /**
     * Show the form for creating a new HomeGallery.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.home_galleries.create');
    }

    /**
     * Store a newly created HomeGallery in storage.
     *
     * @param CreateHomeGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreateHomeGalleryRequest $request)
    {
        $input = $request->all();

        $homeGallery = $this->homeGalleryRepository->create($input);

        if(!empty($request->get('order_image'))){
            $homeGallery->order_image =  $request->get('order_image');
            $homeGallery->save();
        }

        if ($request->file('image')) {
            
            $data = \Imageupload::upload($request->file('image'));
            $homeGallery->image = $data['original_filedir'];
            $homeGallery->save();

        }


        Flash::success('Home Gallery saved successfully.');

        return redirect(route('admin.homeGalleries.index'));
    }

    /**
     * Display the specified HomeGallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $homeGallery = $this->homeGalleryRepository->findWithoutFail($id);

        if (empty($homeGallery)) {
            Flash::error('Home Gallery not found');

            return redirect(route('admin.homeGalleries.index'));
        }

        return view('admin.home_galleries.show')->with('homeGallery', $homeGallery);
    }

    /**
     * Show the form for editing the specified HomeGallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $homeGallery = $this->homeGalleryRepository->findWithoutFail($id);


        if (empty($homeGallery)) {
            Flash::error('Home Gallery not found');

            return redirect(route('admin.homeGalleries.index'));
        }

        return view('admin.home_galleries.edit')->with('homeGallery', $homeGallery);
    }

    /**
     * Update the specified HomeGallery in storage.
     *
     * @param  int              $id
     * @param UpdateHomeGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHomeGalleryRequest $request)
    {
        $homeGallery = $this->homeGalleryRepository->findWithoutFail($id);

        if (empty($homeGallery)) {
            Flash::error('Home Gallery not found');

            return redirect(route('admin.homeGalleries.index'));
        }

        $homeGallery = $this->homeGalleryRepository->update($request->all(), $id);
        if(!empty($request->get('order_image'))){
            $homeGallery->order_image =  $request->get('order_image');
            $homeGallery->save();
        }
        if ($request->file('image')) {
            
            $data = \Imageupload::upload($request->file('image'));
            $homeGallery->image = $data['original_filedir'];
            $homeGallery->save();

        }

        Flash::success('Home Gallery updated successfully.');

        return redirect(route('admin.homeGalleries.index'));
    }

    /**
     * Remove the specified HomeGallery from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        // dd($id);
        $homeGallery = HomeGallery::find($id);

        if (empty($homeGallery)) {
            Flash::error('Home Gallery not found');

            return redirect(route('homeGalleries.index'));
        }

        $galleries = Gallery::where('cat_id', $homeGallery->id)->get();
        //   dd($galleries);
        foreach ($galleries as $g){
            $g->forceDelete();
        }

        $homeGallery->forceDelete();


        Flash::success('Home Gallery deleted successfully.');

        return redirect(route('admin.homeGalleries.index'));
    }
}
