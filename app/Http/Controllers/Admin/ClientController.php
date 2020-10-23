<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateClientRequest;
use App\Http\Requests\Admin\UpdateClientRequest;
use App\Models\Admin\Client;
use App\Repositories\Admin\ClientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClientController extends AppBaseController
{
    /** @var  ClientRepository */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepo)
    {
        $this->clientRepository = $clientRepo;
    }

    /**
     * Display a listing of the Client.
     *
     * @param Request $request
     * @return Response
     */
    public function index()
    {
        $clients = Client::orderBy('id','desc')->get();

        return view('admin.clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new Client.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created Client in storage.
     *
     * @param CreateClientRequest $request
     *
     * @return Response
     */
    public function store(CreateClientRequest $request)
    {
        $input = $request->all();

        $client = $this->clientRepository->create($input);

        if ($request->file('image')) {
            $data = \Imageupload::upload($request->file('image'));
            $client->image = $data['original_filedir'];
            $client->save();
        }

        Flash::success('Client saved successfully.');

        return redirect(route('admin.clients.index'));
    }

    /**
     * Display the specified Client.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('admin.clients.index'));
        }

        return view('admin.clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified Client.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('admin.clients.index'));
        }

        return view('admin.clients.edit')->with('client', $client);
    }

    /**
     * Update the specified Client in storage.
     *
     * @param  int              $id
     * @param UpdateClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientRequest $request)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('admin.clients.index'));
        }

        $client = $this->clientRepository->update($request->all(), $id);

        if ($request->file('image')) {

            $data = \Imageupload::upload($request->file('image'));
            $client->image = $data['original_filedir'];
            $client->save();

        }else{
            $client->image = $client->image;
            $client->save();
        }

        Flash::success('Client updated successfully.');

        return redirect(route('admin.clients.index'));
    }

    /**
     * Remove the specified Client from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('admin.clients.index'));
        }

        $this->clientRepository->delete($id);

        Flash::success('Client deleted successfully.');

        return redirect(route('admin.clients.index'));
    }
}
