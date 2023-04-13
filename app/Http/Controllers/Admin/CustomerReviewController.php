<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerReviewCategory;
use App\Models\CustomerReview;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\Laravel\Facades\Telegram;

class CustomerReviewController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_reviews = CustomerReview::latest()->paginate(10);
        return view('admin.coustmer-reviews.index', compact('customer_reviews'));
    }

    public function create()
    {

        return view('admin.coustmer-reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $customer_review = CustomerReview::create($request->all());

        $this->uploadImage('uploads/customer_reviews', $request->file('image'));
        $customer_review->update(['image' => $request->image->hashName()]);


        session()->flash('Add', 'تم اضافة سجل بنجاح ');
        return redirect(route('admin.customer-reviews.index'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
     $review=CustomerReview::find($id);
     return view('admin.coustmer-reviews.edit', compact('review'));


 }

    public function update(Request $request, $id)
    {

        $CustomerReview = CustomerReview::findOrFail($id);
        $CustomerReview->update($request->except('image'));
        if ($request->file('image')) {
            Storage::disk('customer_reviews')->delete($CustomerReview->image);
            $this->uploadImage('uploads/customer_reviews', $request->file('image'));

          $CustomerReview->update(['image' => $request->image->hashName()]);
        }

        session()->flash('edit', 'تم اضافة سجل بنجاح ');

        return redirect(route('admin.customer-reviews.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer_review = CustomerReview::find($id);
        if (!is_null($customer_review->image)) {
            Storage::disk('customer_reviews')->delete($customer_review->image);
        }

        $customer_review->delete();
        session()->flash('delete', 'تم حذف سجل بنجاح ');
        return redirect()->back();
    }
}
