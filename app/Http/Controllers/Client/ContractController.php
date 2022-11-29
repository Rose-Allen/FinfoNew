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
        $contracts = ClientContract::where('client_id', $client->id)->get();
        return view('pages.client.contract.index', compact('contracts', 'client'));
    }

    public function create(Client $client)
    {
        return view('personal.clientContract.create', compact('client'));
    }

    public function store(ClientContractStoreRequest $request, Client $client)
    {
        $data = $request->all();
        ClientContract::create($data)->addMedia($request->file('file'))->toMediaCollection('contract');
//        if ($request->hasFile('file')) {
//
//        }
        return redirect()->back();
    }


    public function edit(ClientContract $contract)
    {
        return view('personal.clientContract.edit', compact('contract'));
    }

    public function update(ClientContractUpdateRequest $request, Client $client, ClientContract $contract)
    {
        $data = $request->all();
        $contract->update($data);
//        $contract->update($data);
        if ($request->hasFile('file')) {
            $contract->clearMediaCollection('contract');
            $contract->addMedia($request->file('file'))->toMediaCollection('contract');
        }
        return redirect()->back();
    }

    public function destroy(ClientContract $contract)
    {
        $contract->delete();
        return redirect()->back();
    }
}
