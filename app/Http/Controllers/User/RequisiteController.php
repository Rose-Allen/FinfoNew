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
        alert()->success('Поздравляю!','Вы добавили реквизит');
        return redirect()->back();
    }

    public function edit(UserRequisite $requisite)
    {

    }

    public function update(UserRequisite $requisite, UserRequisiteUpdateRequest $request)
    {
        $data = $request->validated();
        $requisite->update($data);
        alert()->info('Поздравляю!', 'Вы изменили реквизит');
        return redirect()->back();
    }

    public function destroy(UserRequisite $requisite)
    {
        $requisite->delete();
        alert()->success('Поздравляю!','Вы удалили реквизит');
        return redirect()->back();
    }
}
