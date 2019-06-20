<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Breed;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \DB::enableQueryLog();
        $cat= Cat::onlyTrashed()->where('id', 1)->first();
        // dd($cat);
        $cat->restore();
        // dd(\DB::getQueryLog());

        dd('done');
        // dd($cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token'); 
        $data = $request->only('name', 'age', 'breed_id');
        // $cat= Cat::create($data);
        $cat= Cat::create($data);
        dd('done');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Cat::find($id);
        $listBreedId= Breed::all();
        // dd($cat, $listBreedId);
        return view('cat.edit', compact('cat', 'listBreedId'));

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
        $cat= Cat::find($id);
        //cach 1
        $data = $request->all();
        $data['name']= strtoupper($data['name']);
        $cat->update($data);

        //cach 2
        $cat->name = $request->get('name');
        $cat->age = $request->get('age');
        $cat->breed_id = $request->get('breed_id');
        $cat->save();

        return redirect()->route('list-breed');

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //cach 1
        $cat= Cat::find($id);
        $cat->delete();
        //cach 2
        // Cat::destroy($id);
        dd('done');
    }
}
