<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Review\AddRequest;
use App\Http\Requests\Admin\Review\UpdateRequest;
use App\Models\Review;
use App\Traits\FormRequestHandlingTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPSTORM_META\type;

class ReviewController extends Controller
{
    use FormRequestHandlingTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $title = 'Delete Review!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        $query = Review::query();
        if (!is_null($request->search) && is_null($request->order) && is_null($request->sort)) {
            $reviews = $query->where('name', 'like', "%$request->search%")
                        ->orWhere('review','like',"%$request->search%")
                        ->paginate(5);
        }else {
            $reviews = $query->paginate(5);
        }
        return view('screens.admin.reviews.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('screens.admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddRequest $request)
    {
        $review = new Review();
        if ($this->handleFormRequest($request->sanitisedStore(),$review)) {
            Alert::success('record added successfully...!');
            return redirect(route('reviews.index'));
        }else {
            toast('record not added...!','error');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review): View
    {
        return view('screens.admin.reviews.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Review $review)
    {
        if ($this->updateRecord($request->sanitisedUpdate(),$review)) {
            Alert::success('record updated successfully...!');
            return redirect(route('reviews.index'));
        }else {
            toast('record not updated...!','error');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        if ($this->destroyRecord($review)) {
            Alert::success('record deleted successfully...!');
            return redirect(route('reviews.index'));
        }else {
            toast('record not deleted...!','error');
            return back();
        }
    }
}
