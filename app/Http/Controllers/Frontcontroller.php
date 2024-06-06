<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UpdateUserRequest;

class Frontcontroller extends Controller
{
    public function profile() {
        return view('pages.profile');
    }

    public function update_profile(UpdateUserRequest $request) {

        $user = User::where('id', auth()->user()->id)->first();
            $user->update(['name' => $request->name]);

        return redirect()->route('pages.profile');
    }

    public function detail() {
        return view('pages.detail');
    }

    public function homepage() {
        return view('pages.homepage');
    }
}
