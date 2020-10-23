<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateClientReviewRequest;
use App\Http\Requests\Admin\UpdateClientReviewRequest;
use App\Repositories\Admin\ClientReviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClientReviewController extends AppBaseController
{
    /** @var  ClientReviewRepository */
    private $clientReviewRepository;

    public function __construct(ClientReviewRepository $clientReviewRepo)
    {
        $this->clientReviewRepository = $clientReviewRepo;
    }

    /**
     * Display a listing of the ClientReview.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clientReviewRepository->pushCriteria(new RequestCriteria($request));
        $clientReviews = $this->clientReviewRepository->all();

        return view('admin.client_reviews.index')
            ->with('clientReviews', $clientReviews);
    }

    /**
     * Show the form for creating a new ClientReview.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.client_reviews.create');
    }

    /**
     * Store a newly created ClientReview in storage.
     *
     * @param CreateClientReviewRequest $request
     *
     * @return Response
     */
    public function store(CreateClientReviewRequest $request)
    {
        $input = $request->all();

        $clientReview = $this->clientReviewRepository->create($input);

        if ($request->file('image')) {

            $data = \Imageupload::upload($request->file('image'));
            $clientReview->image = $data['original_filedir'];
            $clientReview->save();

        }

        Flash::success('Client Review saved successfully.');

        return redirect(route('admin.clientReviews.index'));
    }

    /**
     * Display the specified ClientReview.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientReview = $this->clientReviewRepository->findWithoutFail($id);

        if (empty($clientReview)) {
            Flash::error('Client Review not found');

            return redirect(route('admin.clientReviews.index'));
        }

        return view('admin.client_reviews.show')->with('clientReview', $clientReview);
    }

    /**
     * Show the form for editing the specified ClientReview.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientReview = $this->clientReviewRepository->findWithoutFail($id);

        if (empty($clientReview)) {
            Flash::error('Client Review not found');

            return redirect(route('admin.clientReviews.index'));
        }

        return view('admin.client_reviews.edit')->with('clientReview', $clientReview);
    }

    /**
     * Update the specified ClientReview in storage.
     *
     * @param  int              $id
     * @param UpdateClientReviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientReviewRequest $request)
    {
        $clientReview = $this->clientReviewRepository->findWithoutFail($id);

        if (empty($clientReview)) {
            Flash::error('Client Review not found');

            return redirect(route('admin.clientReviews.index'));
        }

        $clientReview = $this->clientReviewRepository->update($request->all(), $id);

        if ($request->file('image')) {

            $data = \Imageupload::upload($request->file('image'));
            $clientReview->image = $data['original_filedir'];
            $clientReview->save();

        }else{
            $clientReview->image = $clientReview->image;
            $clientReview->save();
        }

        Flash::success('Client Review updated successfully.');

        return redirect(route('admin.clientReviews.index'));
    }

    /**
     * Remove the specified ClientReview from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientReview = $this->clientReviewRepository->findWithoutFail($id);

        if (empty($clientReview)) {
            Flash::error('Client Review not found');

            return redirect(route('admin.clientReviews.index'));
        }

        $this->clientReviewRepository->delete($id);

        Flash::success('Client Review deleted successfully.');

        return redirect(route('admin.clientReviews.index'));
    }
}
