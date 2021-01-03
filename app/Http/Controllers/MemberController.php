<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function createNewVolanteer(Request $request)
    {
        $validated = $this->validateMemberForm($request);
        $form_data = $request->all();

        $member = Member::create($form_data);

        return redirect()->route('home');
    }

    private function validateMemberForm($request)
    {
        $request->validate([
            'email' => 'required|email|unique:members|max:30'
        ]);
    }
}
