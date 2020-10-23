<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateSocialIconRequest;
use App\Http\Requests\Admin\UpdateSocialIconRequest;
use App\Repositories\Admin\SocialIconRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SocialIconController extends AppBaseController
{
    /** @var  SocialIconRepository */
    private $socialIconRepository;

    public function __construct(SocialIconRepository $socialIconRepo)
    {
        $this->socialIconRepository = $socialIconRepo;
    }

    /**
     * Display a listing of the SocialIcon.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->socialIconRepository->pushCriteria(new RequestCriteria($request));
        $socialIcons = $this->socialIconRepository->all();

        return view('admin.social_icons.index', compact('socialIcons'))
            ->with('socialIcons', $socialIcons);
    }

    /**
     * Show the form for creating a new SocialIcon.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.social_icons.create');
    }

    /**
     * Store a newly created SocialIcon in storage.
     *
     * @param CreateSocialIconRequest $request
     *
     * @return Response
     */
    public function store(CreateSocialIconRequest $request)
    {
        $input = $request->all();

        $socialIcon = $this->socialIconRepository->create($input);

        Flash::success('Social Icon saved successfully.');

        return redirect(route('admin.socialIcons.index'));
    }

    /**
     * Display the specified SocialIcon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $socialIcon = $this->socialIconRepository->findWithoutFail($id);

        if (empty($socialIcon)) {
            Flash::error('Social Icon not found');

            return redirect(route('admin.socialIcons.index'));
        }

        return view('admin.social_icons.show')->with('socialIcon', $socialIcon);
    }

    /**
     * Show the form for editing the specified SocialIcon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $socialIcon = $this->socialIconRepository->findWithoutFail($id);

        if (empty($socialIcon)) {
            Flash::error('Social Icon not found');

            return redirect(route('admin.socialIcons.index'));
        }

        return view('admin.social_icons.edit')->with('socialIcon', $socialIcon);
    }

    /**
     * Update the specified SocialIcon in storage.
     *
     * @param  int              $id
     * @param UpdateSocialIconRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSocialIconRequest $request)
    {
        $socialIcon = $this->socialIconRepository->findWithoutFail($id);

        if (empty($socialIcon)) {
            Flash::error('Social Icon not found');

            return redirect(route('admin.socialIcons.index'));
        }

        $socialIcon = $this->socialIconRepository->update($request->all(), $id);

        Flash::success('Social Icon updated successfully.');

        return redirect(route('admin.socialIcons.index'));
    }

    /**
     * Remove the specified SocialIcon from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $socialIcon = $this->socialIconRepository->findWithoutFail($id);

        if (empty($socialIcon)) {
            Flash::error('Social Icon not found');

            return redirect(route('admin.socialIcons.index'));
        }

        $this->socialIconRepository->delete($id);

        Flash::success('Social Icon deleted successfully.');

        return redirect(route('admin.socialIcons.index'));
    }
}
