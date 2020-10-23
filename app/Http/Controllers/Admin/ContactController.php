<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateContactRequest;
use App\Http\Requests\Admin\UpdateContactRequest;
use App\Models\Access\User\User;
use App\Models\Admin\Contact;
use App\Repositories\Admin\ContactRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ContactController extends AppBaseController
{
    /** @var  ContactRepository */
    private $contactRepository;

    public function __construct(ContactRepository $contactRepo)
    {
        $this->contactRepository = $contactRepo;
    }

    /**
     * Display a listing of the Contact.
     *
     * @param Request $request
     * @return Response
     */
    public function adminEmailSetting()
    {
        $contacts = User::where('id',1)->get();
        return view('admin.contacts.admin-email-setting')
            ->with('contacts', $contacts);
    }

    public function adminEmailSettingEdit($id)
    {
        $contact = User::find($id);

        if (empty($contact)) {
            Flash::error('Email not found');

            return redirect(route('admin.email.setting'));
        }

        return view('admin.contacts.admin-email-setting-edit')->with('contact', $contact);
    }

    public function adminEmailSettingUpdate($id, Request $request)
    {
        $contact = User::find($id);

        if (empty($contact)) {
            Flash::error('Admin email setting not found');

            return redirect(route('admin.email.setting'));
        }

        if ($request->get('email') != null || $request->get('password2') != null) {

            $contact->email = $request->get('email');
            $contact->password2 = $request->get('password2');
            $contact->password = bcrypt($request->get('password2'));
            $contact->save();

            \Auth::logout();
            \Session::flush();
            return redirect()->route('auth.login');


        }else{
            $contact->email = $contact->email;
            $contact->save();

        }

        Flash::success('Admin email setting updated successfully.');

        return redirect(route('admin.email.setting'));
    }


    public function index()
    {
        $contacts = Contact::orderBy('id','DESC')->get();
        return view('admin.contacts.index')
            ->with('contacts', $contacts);
    }

    public function single()
    {
        $contacts = Contact::where('id',7)->get();

        return view('admin.contacts.single')
            ->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new Contact.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created Contact in storage.
     *
     * @param CreateContactRequest $request
     *
     * @return Response
     */
    public function store(CreateContactRequest $request)
    {
        $input = $request->all();

        $contact = $this->contactRepository->create($input);

        if ($request->file('image')) {

            $data = \Imageupload::upload($request->file('image'));
            $contact->image = $data['original_filedir'];
            $contact->save();

        }

        Flash::success('Contact saved successfully.');

        return redirect(route('admin.contacts.index'));
    }

    /**
     * Display the specified Contact.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contact = $this->contactRepository->findWithoutFail($id);

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('admin.contacts.index'));
        }

        return view('admin.contacts.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified Contact.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contact = $this->contactRepository->findWithoutFail($id);

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('admin.contacts.index'));
        }

        return view('admin.contacts.edit')->with('contact', $contact);
    }

    /**
     * Update the specified Contact in storage.
     *
     * @param  int              $id
     * @param UpdateContactRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactRequest $request)
    {
        $contact = $this->contactRepository->findWithoutFail($id);

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('admin.contacts.index'));
        }

        $contact = $this->contactRepository->update($request->all(), $id);

        if ($request->file('image')) {

            $data = \Imageupload::upload($request->file('image'));
            $contact->image = $data['original_filedir'];
            $contact->save();

        }else{
            $contact->image = $contact->image;
            $contact->save();

        }

        Flash::success('Contact updated successfully.');

        return redirect(route('admin.contacts.index'));
    }

    /**
     * Remove the specified Contact from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contact = $this->contactRepository->findWithoutFail($id);

        if (empty($contact)) {
            Flash::error('Contact not found');

            return redirect(route('admin.contacts.index'));
        }

        $this->contactRepository->delete($id);

        Flash::success('Contact deleted successfully.');

        return redirect(route('admin.contacts.index'));
    }
}
