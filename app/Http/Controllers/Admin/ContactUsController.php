<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(): View
    {
        $contacts = Contact::get();
        return view('screens.admin.contact-us.index',compact('contacts'));
    }
}
