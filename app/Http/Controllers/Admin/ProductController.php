<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\Laravel\Facades\Telegram;

class ProductController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {

        return view('admin.products.create');
    }
    public function edit($id)
    {

        $product = Product::find($id);

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::create($request->all());

        $this->uploadImage('uploads/products', $request->file('image'));
        $product->update(['image' => $request->image->hashName()]);


        if ($request->document) {

            foreach ($request->document as $file) {
                $product->images()->create([
                    'url' => $file
                ]);
            }
        }






        session()->flash('Add', 'تم اضافة سجل بنجاح ');
        return redirect(route('admin.products.index'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $product->update($request->except('image'));
        if ($request->file('image')) {
            Storage::disk('products')->delete($product->image);
            $this->uploadImage('uploads/products', $request->file('image'));
            $product->update(['image' => $request->image->hashName()]);
        }


        if ($request->document) {

            foreach ($request->document as $file) {
                $product->images()->create([
                    'url' => $file
                ]);
            }
        }
        session()->flash('edit', 'تم تعديل سجل بنجاح ');
        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!is_null($product->image)) {
            Storage::disk('products')->delete($product->image);
        }


        $product->delete();
        session()->flash('delete', 'تم حذف سجل بنجاح ');
        return redirect()->back();
    }

    public function uploadProductImage(Request $request)
    {
        $file = $request->file('dzfile');
        $filename = $this->uploadImage('uploads/products/', $file);

        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function deleteFile(Request $request)
    {
        $media = ProductImage::where('id', $request->id)->first();

        if ($media) {

            Storage::disk('products')->delete($media->url);
            $media->delete();
        } else {

            dd('dd');
            // \Storage::disk('s3')->delete($media->path);

        }

        return 'sucess';
    } /////////approve post//////////////////////////////////

}
