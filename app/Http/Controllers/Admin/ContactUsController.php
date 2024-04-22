<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
// use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ContactUsController extends Controller
{
    public function index(Request $request): View
    {
        $title = 'Delete Record!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        // $contacts = QueryBuilder::for(Contact::class)
        //     ->allowedFilters(['name','phone','email'])
        //     ->paginate(5);
        $query = Contact::query();
        if (!is_null($request->search)) {
            $contacts = $query->where('name', 'like', "%$request->search%")
                        ->orWhere('phone','like',"%$request->search%")
                        ->orWhere('email','like',"%$request->search%")
                        ->paginate(5);
        }else {
            $contacts = $query->paginate(5);
        }
        return view('screens.admin.contact-us.index',compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        if (isset($contact)) {
            $contact->delete();
            Alert::success(ucwords('record deleted successfully!'));
        } else {
            Alert::error(ucwords('Record not found!'));
        }
        return back();
    }
}
