<?php

namespace App\Exports;

use App\Models\User;
use App\Models\UserRequest;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\FromCollection;

class EmailExport implements FromView
{


    public function view(): View
    {

       $items = UserRequest::get();


       return view('admin.contact_us.export', compact('items'));


    }
}
