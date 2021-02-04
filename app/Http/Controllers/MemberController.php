<?php

namespace App\Http\Controllers;

use App\Exports\MembersListExport;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use App\Models\Member;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    /**
     * createNewVolanteer
     * function called directly to create members
     */
    public function createNewVolanteer(Request $request)
    {
        $validated = $this->validateMemberForm($request);
        $form_data = $request->all();

        $member = Member::create($form_data);
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);

        return view('home', ['blogs' => $blogs]);
    }

    /**
     * validateMemberForm
     * validate members form before saving
     */
    private function validateMemberForm($request)
    {
        $request->validate([
            'email' => 'required|email|unique:members|max:30'
        ]);
    }

    /**
     * excel download
     * members list
     * function is called directly
     */
    public function membersListExcel(Request $request)
    {
        $admin_email = $request->user()->email;
        if ($admin_email == 'admin@rotiandolan.com') {
            $members_list = Member::all();
                $name = 'MembersList.xlsx';
                $content = Excel::raw(new MembersListExport($members_list), \Maatwebsite\Excel\Excel::XLSX);
                $response = [
                    'name' => $name,
                    'file' => "data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;base64," .base64_encode($content),
                ];
                return response()->json($response);
        }
        return response()->json([
            'status' => "error",
            'message' => "no such data found"
        ], 404);
    }
}
