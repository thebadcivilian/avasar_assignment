<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('categories')->get();
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $objCategory = new Category();
            $objCategory->category_name = $request->category_name;

            $objCategory->save();
            DB::commit();
            return redirect('admin/category')->with('success', 'Category added successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('admin/category/create')->with('error', 'Category not added. Something went wrong' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id = Crypt::decrypt($request->id);
        $data = DB::table('categories')->where('id', $id)->first();
        return view('admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decrypt($request->id);
        // dd($request->all());
        DB::beginTransaction();
        try {

            $objCategory = Category::find($id);
            $objCategory->category_name = $request->category_name;


            $objCategory->update();
            DB::commit();
            return redirect('admin/category')->with('success', 'Category updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('admin/category/edit/' . $request->id)->with('error', 'Category not updated. Something went wrong' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = Crypt::decrypt($request->id);
        $obj = Category::find($id);
        $obj->delete();
        return redirect('admin/category')->with('success', 'Category deleted successfully');
    }
}
