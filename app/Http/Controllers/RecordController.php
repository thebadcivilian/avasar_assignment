<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('records')->get();
        return view('admin.record.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admin.record.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $objRecord = new Record();
            $objRecord->description = $request->description;
            $objRecord->amount = $request->amount;
            $objRecord->date = $request->date;
            $objRecord->type = $request->type;
            $objRecord->category_id = $request->category_id;

            $objRecord->save();
            DB::commit();
            return redirect('admin/record')->with('success', 'Record added successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('admin/record/create')->with('error', 'Record not added. Something went wrong' . $e->getMessage());
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
        $data = DB::table('records')->where('id', $id)->first();
        return view('admin.record.edit', compact('data'));
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

            $objRecord = Record::find($id);
            $objRecord->description = $request->description;
            $objRecord->amount = $request->amount;
            $objRecord->date = $request->date;
            $objRecord->type = $request->type;
            $objRecord->category_id = $request->category_id;

            $objRecord->update();
            DB::commit();
            return redirect('admin/record')->with('success', 'Record updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('admin/record/edit/' . $request->id)->with('error', 'Record not updated. Something went wrong' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = Crypt::decrypt($request->id);
        $obj = Record::find($id);
        $obj->delete();
        return redirect('admin/record')->with('success', 'Record deleted successfully');
    }
}
