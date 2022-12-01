<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequisite\UserRequisiteStoreRequest;
use App\Http\Requests\UserRequisite\UserRequisiteUpdateRequest;
use App\Models\UserRequisite;

class RequisiteController extends Controller
{
    public function index()
    {
        $requisites = UserRequisite::all();
        return view('pages.user.requisite.index', compact('requisites'));
    }

    public function create()
    {

    }

    public function store(UserRequisiteStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        UserRequisite::create($data);
        return redirect()->back();
    }

    public function edit(UserRequisite $requisite)
    {

    }

    public function update(UserRequisite $requisite, UserRequisiteUpdateRequest $request)
    {
        $data = $request->validated();
        $requisite->update($data);

        return redirect()->back();
    }

    public function destroy(UserRequisite $requisite)
    {
        $requisite->delete();
        return redirect()->back();
    }
}
