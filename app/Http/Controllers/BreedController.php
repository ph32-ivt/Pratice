<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Cat;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBreeds= Breed::all();

        // dd($listBreeds[0]->name);
        return view('breed.index', compact('listBreeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('breed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->only('name');
        // $data = $request->except('_token');
        dd($data);
        $breed = Breed::create($data);
        return redirect()->route('list-breed');


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
        //
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
        //
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

    public function listCatByBreedId($id)
    {
        //c1
        // $list1= Breed::find($id)->cats;
       // c2
        $list2= Cat::where('breed_id', $id)->get();
        // c3 
        $list3= Breed::with('cats')->where('id', $id)->first()->toArray();
        // $list4 = $list3[0]->cats;
        dd($list2, $list3);
        return view('breed.list-all-cat', compact('list3'));
    }



}
