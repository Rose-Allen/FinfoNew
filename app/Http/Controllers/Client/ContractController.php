<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientContract\ClientContractStoreRequest;
use App\Http\Requests\ClientContract\ClientContractUpdateRequest;
use App\Models\ClientContract;
use App\Models\Client;

class ContractController extends Controller
{
    public function index(Client $client)
    {
        $clientContracts = ClientContract::where('client_id', $client->id)->get();

        return view('personal.clientContract.index', compact('clientContracts', 'client'));
    }

    public function create(Client $client)
    {
        return view('personal.clientContract.create', compact('client'));
    }

    public function store(ClientContractStoreRequest $request, Client $client)
    {
        if ($request->hasFile('file')) {
            $data = $request->validated();
            ClientContract::create($data)->addMedia($request->file('file'))->toMediaCollection('contract');
        }
    }


    public function edit(ClientContract $contract)
    {
        return view('personal.clientContract.edit', compact('contract'));
    }

    public function update(ClientContractUpdateRequest $request, Client $client, ClientContract $contract)
    {
        $data = $request->validated();
        $contract->update($data);

        $contract->update($data);
        if ($request->hasFile('file')) {
            $contract->clearMediaCollection('contract');
            $contract->addMedia($request->file('file'))->toMediaCollection('contract');
        }
    }

    public function delete(ClientContract $contract)
    {
        $contract->delete();
        return redirect()->back();
    }
}
