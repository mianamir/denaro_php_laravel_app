<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Models\Admin\Banner;
use App\Repositories\Admin\BannerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BannerController extends AppBaseController
{
    /** @var  BannerRepository */
    private $bannerRepository;

    public function __construct(BannerRepository $bannerRepo)
    {
        $this->bannerRepository = $bannerRepo;
    }

    /**
     * Display a listing of the Banner.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $banners = Banner::orderBy('order_image','ASC')->get();
//        $banners = Banner::get();

        return view('admin.banners.index')
            ->with('banners', $banners);
    }

    /**
     * Show the form for creating a new Banner.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created Banner in storage.
     *
     * @param CreateBannerRequest $request
     *
     * @return Response
     */
    public function store(CreateBannerRequest $request)
    {
        $input = $request->all();

//        dd($request->get('details'));

        $banner = $this->bannerRepository->create($input);

//        if ($request->file('description')) {
//
//            $data = \Imageupload::upload($request->file('description'));
//            $banner->background_image = $data['original_filedir'];
//        }

        if ($request->file('background_image')) {

            $data = \Imageupload::upload($request->file('background_image'));
            $banner->background_image = $data['original_filedir'];
        }
        if ($request->file('image')) {

            $data1 = \Imageupload::upload($request->file('image'));
            $banner->image = $data1['original_filedir'];
            $banner->save();

        }

        Flash::success('Banner saved successfully.');

        return redirect(route('admin.banners.index'));
    }

    /**
     * Display the specified Banner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        return view('admin.banners.show')->with('banner', $banner);
    }

    /**
     * Show the form for editing the specified Banner.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        return view('admin.banners.edit')->with('banner', $banner);
    }

    /**
     * Update the specified Banner in storage.
     *
     * @param  int $id
     * @param UpdateBannerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBannerRequest $request)
    {

        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        $banner = $this->bannerRepository->update($request->all(), $id);

//        if(!empty($request->get('button_text'))){
//            $banner->order_image =  $request->get('button_text');
//            $banner->save();
//        }
//
//        if(!empty($request->get('button_url'))){
//            $banner->order_image =  $request->get('button_url');
//            $banner->save();
//        }

//        if(!empty($request->get('order_image'))){
//            $banner->order_image =  $request->get('order_image');
//            $banner->save();
//        }
        if ($request->file('background_image')) {

            $data = \Imageupload::upload($request->file('background_image'));
            $banner->background_image = $data['original_filedir'];
            $banner->save();

        }

        if ($request->file('image')) {
            
            $data1 = \Imageupload::upload($request->file('image'));
            $banner->image = $data1['original_filedir'];
            $banner->save();

        }

        Flash::success('Banner updated successfully.');

        return redirect(route('admin.banners.index'));
    }

    /**
     * Remove the specified Banner from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banner = $this->bannerRepository->findWithoutFail($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('admin.banners.index'));
        }

        $this->bannerRepository->delete($id);

        Flash::success('Banner deleted successfully.');

        return redirect(route('admin.banners.index'));
    }
}
