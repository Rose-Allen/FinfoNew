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
        $userRequisites = UserRequisite::all();
        return view('personal.userRequisite.index', compact('userRequisites'));
    }

    public function create()
    {
        $user = auth()->user()->id;
        return view('personal.userRequisite.create', compact('user'));
    }

    public function store(UserRequisiteStoreRequest $request)
    {
        $data = $request->validated();
        UserRequisite::create($data);

        return redirect()->route('personal.user.requisite.index');
    }

    public function edit(UserRequisite $requisite)
    {
        return view('personal.userRequisite.edit', compact('requisite'));
    }

    public function update(UserRequisite $requisite, UserRequisiteUpdateRequest $request)
    {
        $data = $request->validated();
        $requisite->update($data);

        return redirect()->route('personal.user.requisite.index');
    }

    public function delete(UserRequisite $requisite)
    {
        $requisite->delete();

        return redirect()->back();
    }
}
