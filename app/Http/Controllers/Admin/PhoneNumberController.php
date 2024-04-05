<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PhoneNumber\StoreRequest;
use App\Models\PhoneNumber;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PhoneNumberController extends Controller
{
    public function create():View
    {
        $phoneNumber = PhoneNumber::first();
        return view('screens.admin.phone-number.create',compact('phoneNumber'));
    }

    public function store(StoreRequest $request)
    {
        $phoneNumber = PhoneNumber::create([
            'phone_number' => $request->phone_number
        ]);
        if ($phoneNumber) {
            Alert::success('record added successfully...!');
            return back();
        }else {
            toast('phone number did not created...!','error');
            return back();
        }
    }
}
