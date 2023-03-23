<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function index()
    {
        $details = auth()->user()->details;
        return view('user_detail.index', compact('details'));
    }

    public function create()
    {
    return view('user_detail.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'summary' => 'required',
        ]);

        $detail = new UserDetails();

        $detail->fullname = $request->fullname;
        $detail->user_id = auth()->id();
        $detail->email = $request->email;
        $detail->phone = $request->phone;
        $detail->address = $request->address;
        $detail->summary = $request->summary;
        $detail->save();
        return redirect()->route('education.create');
    }

    public function edit(UserDetails $userDetail)
    {
        return view('user_detail.edit', compact('userDetail'));
    }

    public function update(Request $request, UserDetails $userDetail)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'summary' => 'required',
        ]);

        $userDetail->update($request->all());

        return redirect()->route('user-detail.index');
    }

    public function destroy(UserDetails $userDetail)
    {
        $userDetail->delete();
        return back();
    }

}
