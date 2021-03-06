<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vestiti = Dress::all();
        $data = [
            'vestiti' => $vestiti
        ];
        return view('dresses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required|unique:dresses|max:255',
            'brand' => 'required|max:50',
            'designer' => 'required|max:50',
            'color' => 'required|max:50',
            'size' => 'required|max:5',
        ]);

        $new_dress = new Dress();
        $new_dress->name = $data['name'];
        $new_dress->brand = $data['brand'];
        $new_dress->designer = $data['designer'];
        $new_dress->color = $data['color'];
        $new_dress->size = $data['size'];
        $new_dress->price = $data['price'];
        $new_dress->save();
        return redirect()->route('dresses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vestiti = Dress::all();
        @dd($vestiti);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $vestiti)
    {
        return view('dresses.edit', compact('vestiti'));
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
        return "sono il metodo update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
