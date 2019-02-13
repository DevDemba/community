<?php

namespace App\Http\Controllers;

use App\Conferency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConferenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferencies = Conferency::latest()->paginate(5);

        return view('conferencies.index',compact('conferencies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('conferencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'place' => 'required',
            'date' => 'required',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName)
            ->with('success','You have successfully upload image.');


        Conferency::create($request->all());

        return redirect()->route('conferencies.index' )
            ->with('image', $imageName);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Conferency  $conferency
     * @return \Illuminate\Http\Response
     */
    public function show(Conferency $conferency)
    {
        return view('conferencies.show',compact('conferency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conferency  $conferency
     * @return \Illuminate\Http\Response
     */
    public function edit(Conferency $conferency)
    {
        return view('conferencies.edit',compact('conferency'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conferency  $conferency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conferency $conferency)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $conferency->update($request->all());

        return redirect()->route('conferencies.index')
            ->with('success','Conferency updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conferency $conferency
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Conferency $conferency)
    {
        $conferency->delete();

        return redirect()->route('conferencies.index')
            ->with('success','Conferency deleted successfully');
    }

    public function all(){

        $conferencies = Conferency::latest()->paginate(5);

        return view('layouts.conferencies',compact('conferencies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
