<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address\AddressStoreRequest;
use App\Http\Requests\Address\AddressUpdateRequest;
use App\Models\Address;
use App\Models\AddressCity;
use App\Models\AddressCountry;
use App\Models\Client;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Client $client)
    {
        $addresses = Address::where('client_id', $client->id)->get();
        return view('pages.address.index', compact('addresses', 'client'));
    }

    public function create(Client $client)
    {
        $cities = AddressCity::all();
        $countries = AddressCountry::all();
        return view('pages.address.create', compact('cities', 'countries', 'client'));
    }

    public function store(AddressStoreRequest $request)
    {
        Address::query()->create($request->all());

        return redirect()->route('address.index', [$request->client_id]);
    }

    public function show(Address $address, Client $client)
    {
        return view('personal.address.show', compact('address', 'client'));
    }

    public function edit(Address $address, Client $client)
    {
        $cities = AddressCity::all();
        $countries = AddressCountry::all();
        return view('personal.address.edit', compact('address', 'countries', 'cities', 'client'));
    }

    public function update(AddressUpdateRequest $request, Address $address)
    {
        $data = $request->validated();
        $address->update($data);
        return redirect()->route('personal.address.show', $address->id);
    }

    public function delete(Address $address, Client $client)
    {
        $address->delete();
        return redirect()->route('personal.address.index', $client->id);
    }
}
