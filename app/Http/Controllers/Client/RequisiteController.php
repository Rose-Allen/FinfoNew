<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequisite\ClientRequisiteStoreRequest;
use App\Http\Requests\ClientRequisite\ClientRequisiteUpdateRequest;
use App\Models\Client;
use App\Models\ClientRequisite;

class RequisiteController extends Controller
{
    public function index(Client $client)
    {
        $clientRequisites = ClientRequisite::where('client_id', $client->id)->get();
        return view('personal.clientRequisite.index', compact('clientRequisites', 'client'));
    }

    public function create(Client $client)
    {
        return view('personal.clientRequisite.create', compact('client'));
    }

    public function store(ClientRequisiteStoreRequest $request)
    {
        $data = $request->validated();
        ClientRequisite::create($data);

        return redirect()->back();
    }

    public function edit(ClientRequisite $requisite)
    {
        return view('personal.clientRequisite.edit', compact('requisite'));
    }

    public function update(ClientRequisite $requisite, ClientRequisiteUpdateRequest $request)
    {
        $data = $request->validated();
        $requisite->update($data);

        return redirect()->back();
    }

    public function delete(ClientRequisite $requisite)
    {
        $requisite->delete();

        return redirect()->back();
    }
}
