<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test1;

class test1controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return test1::all();
        // return test1::where('id', '>', '20')->get();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $newtest1 = new test1;
        // $newtest1->name = $request->test1["name"];
        // $newtest1->save();
        // return $newtest1;
        $test1 = new test1;
        return $test1->name = $request->input('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('test1.name', ['test1' => test1::findOrFail($id)]);
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
        $existingTest1 = test1::find($id);

        if( $existingTest1 ){
            $existingTest1->name = $request->test1['name'];
            $existingTest1->save();
            return $existingTest1;
        }

        return "Item Not Found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(test1 $id)
    {
        // $existingTest1 = test1::find( $id );
        // if( $existingTest1 ) {
        //     $existingTest1->delete();
        //     return "Item successfully deleted";
        // }

        // return "Item not found";
        return $id->delete();
    }
}
