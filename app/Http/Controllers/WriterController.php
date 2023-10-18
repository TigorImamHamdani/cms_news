<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $writers = Writer::get();
        return view('admin.writers.index', compact('writers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.writers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name_writer'   => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $writers['name_writer'] = $request->name_writer;

        Writer::create($writers);

        return redirect()->route('writer.index');
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
    public function edit(Request $request, string $id)
    {
        $writer = Writer::find($id);

        // dd($writer);
        return view('admin.writers.edit', compact('writer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name_writer'   => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $writers['name_writer'] = $request->name_writer;

        Writer::whereId($id)->update($writers);

        return redirect()->route('writer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $writer = Writer::find($id);

        if($writer) {
            $writer->delete();
        }

        return redirect()->route('writer.index');
    }
}
