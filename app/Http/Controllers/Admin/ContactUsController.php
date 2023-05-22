<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EmailExport as ExportsEmailExport;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\UserRequest;
use EmailExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $contacts = ContactUs::orderby('id', 'desc')->get();
        return view('admin.contact_us.index', compact('contacts'));
    }

    public function userRequest()
    {
        $user_requests = UserRequest::orderby('id', 'desc')->get();
        return view('admin.contact_us.user_requests', compact('user_requests'));
    }
    public function destroy($id)
    {
        $request =  ContactUs::find($id);
        $request->delete();
        return redirect()->back();
    }

    public function userRequestDestroy($id)
    {
        $request =  UserRequest::find($id);
        $request->delete();
        return redirect()->back();
    }


    public function export()
    {
        return Excel::download(new ExportsEmailExport, 'email.xlsx');
    }
}



