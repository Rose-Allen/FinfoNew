<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Http\Requests\Address\UserAddressStoreRequest;
use App\Http\Requests\Address\UserAddressUpdateRequest;
use App\Http\Requests\UserRequisite\UserRequisiteStoreRequest;
use App\Models\Address;
use App\Models\AddressCity;
use App\Models\AddressCountry;
use App\Models\Client;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Client $client)
    {
        $addresses = UserAddress::all();
        return view('pages.user.address.index', compact('addresses'));
    }

    public function create()
    {
        $cities = AddressCity::all();
        $countries = AddressCountry::all();
        return view('pages.user.address.create', compact('cities', 'countries'));
    }

    public function store(UserAddressStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        UserAddress::query()->create($data);
        return redirect()->route('user.addresses.index');
    }

    public function show(Address $address, Client $client)
    {

    }

    public function edit(UserAddress $address)
    {

        $cities = AddressCity::all();
        $countries = AddressCountry::all();
        return view('pages.user.address.edit', compact('address', 'countries', 'cities'));
    }

    public function update(UserAddressUpdateRequest $request, UserAddress $address)
    {
        $data = $request->validated();
        $address->update($data);
        return redirect()->route('user.addresses.index');
    }

    public function destroy(UserAddress $address, Client $client)
    {
        $address->delete();
        return redirect()->back();
    }
}
