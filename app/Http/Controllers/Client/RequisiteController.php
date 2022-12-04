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
        $requisites = ClientRequisite::where('client_id', $client->id)->get();
        return view('pages.client.requisite.index', compact('requisites', 'client'));
    }

    public function create(Client $client)
    {
        return view('personal.clientRequisite.create', compact('client'));
    }

    public function store(ClientRequisiteStoreRequest $request)
    {
        $data = $request->all();
        ClientRequisite::create($data);
        alert()->success('Поздравляю!', 'Вы добавили реквизит');
        return redirect()->route('client.requisites.index', [$request->client_id]);
    }


    public function edit(ClientRequisite $requisite)
    {
        return view('personal.clientRequisite.edit', compact('requisite'));
    }

    public function update(ClientRequisite $requisite, ClientRequisiteUpdateRequest $request)
    {
        $data = $request->all();
        $requisite->update($data);
        alert()->info('Поздравляю!', 'Вы изменили реквизит');
        return redirect()->route('client.requisites.index', [$request->client_id]);
    }

    public function destroy(ClientRequisite $requisite)
    {
        $requisite->delete();
        alert()->success('Поздравляю!', 'Вы удалили реквизит');
        return redirect()->back();
    }
}
