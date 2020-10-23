<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateHeaderRequest;
use App\Http\Requests\Admin\UpdateHeaderRequest;
use App\Repositories\Admin\HeaderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Admin\Header;

class HeaderController extends AppBaseController
{
    /** @var  HeaderRepository */
    private $headerRepository;

    public function __construct(HeaderRepository $headerRepo)
    {
        $this->headerRepository = $headerRepo;
    }

    /**
     * Display a listing of the Header.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $header = Header::find(1);
//        dd($header);

        return view('admin.headers.index')
            ->with('header', $header);
    }
 public function indexDollar()
    {
        $header = Header::find(2);

        return view('admin.headers.index-dollar',compact('header'));

    }

    public function dollarRate($id)
    {
        $dollar = Header::find($id);
        return view('admin.headers.create-dollar', compact('dollar'));
    }
    public function postDollarRate($id, Request $request)
    {
        $dollar_price = $request->get('dollar');
        $dollar = Header::find($id);
        $dollar->url = $dollar_price;
        $dollar->update();

        Flash::success('Header saved successfully.');

        return redirect(route('admin.headers.index.rate'));
    }
    /**
     * Show the form for creating a new Header.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.headers.create');
    }

    /**
     * Store a newly created Header in storage.
     *
     * @param CreateHeaderRequest $request
     *
     * @return Response
     */
    public function store(CreateHeaderRequest $request)
    {
        $input = $request->all();

        $header = $this->headerRepository->create($input);

        if ($request->file('logo') && $request->file('image1') && $request->file('image2')) {

            $data = \Imageupload::upload($request->file('logo'));
            $header->logo = $data['original_filedir'];

            $data = \Imageupload::upload($request->file('image1'));
            $header->image1 = $data['original_filedir'];

            $data = \Imageupload::upload($request->file('image2'));
            $header->image2 = $data['original_filedir'];

            $header->save();

        }

        Flash::success('Header saved successfully.');

        return redirect(route('admin.headers.index'));
    }

    /**
     * Display the specified Header.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $header = $this->headerRepository->findWithoutFail($id);

        if (empty($header)) {
            Flash::error('Header not found');

            return redirect(route('admin.headers.index'));
        }

        return view('admin.headers.show')->with('header', $header);
    }

    /**
     * Show the form for editing the specified Header.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $header = $this->headerRepository->findWithoutFail($id);

        if (empty($header)) {
            Flash::error('Header not found');

            return redirect(route('admin.headers.index'));
        }

        return view('admin.headers.edit')->with('header', $header);
    }

    /**
     * Update the specified Header in storage.
     *
     * @param  int              $id
     * @param UpdateHeaderRequest $request
     *
     * @return Response
     */
    public function update($id,Request $request)
    {
        $header = Header::find($id);

        if (empty($header)) {
            Flash::error('Header not found');

            return redirect(route('admin.headers.index'));
        }

//        $phone = $request->get('phone');
//        $url = $request->get('url');
//        if (empty($phone)){
//            $request->session()->flash('phone', 'phone is required');
//            return redirect()->back()->withInput();
//
//        }
//        $header->phone = $phone;

//        $email = $request->get('email');
//        if (empty($email)){
//            $request->session()->flash('email', 'email is required');
//            return redirect()->back()->withInput();
//
//        }
//        $header->email = $email;
//        $header->url = $url;

//        $url = $request->get('url');
//        if (empty($url)){
//            $request->session()->flash('url', 'url is required');
//            return redirect()->back()->withInput();
//
//        }
//        $header->url = "www.google.com";

        if ($request->file('logo')) {

            $data = \Imageupload::upload($request->file('logo'));
            $header->logo = $data['original_filedir'];

//            $data = \Imageupload::upload($request->file('image1'));
//            $header->image1 = $data['original_filedir'];

//            $data = \Imageupload::upload($request->file('image2'));
//            $header->image2 = $data['original_filedir'];

            $header->update();

        }else{
            $header->logo = $header->logo;
//            $header->image1 = $header->logo;
//            $header->image2 = $header->logo;
            $header->update();
        }

        $header->update();


        Flash::success('Header updated successfully.');

        return redirect(route('admin.headers.index'));
    }

    /**
     * Remove the specified Header from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $header = $this->headerRepository->findWithoutFail($id);

        if (empty($header)) {
            Flash::error('Header not found');

            return redirect(route('admin.headers.index'));
        }

        $this->headerRepository->delete($id);

        Flash::success('Header deleted successfully.');

        return redirect(route('admin.headers.index'));
    }
}
