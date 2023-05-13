<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# Models
use App\Models\contact;

class ContactListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contactListHeader()
    {
        return view('contactList/contactListHeader');
    }

    public function contactList(Request $request) {

      $data = contact::where('responded', '=', $request->responded)
              ->orderBy('created_at', 'desc')
              ->Paginate(10);

      echo view('contactList.contactList', compact('data'))->render();
      exit;
    }
}