<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use App\Models\test1;

class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = test1::table('test1s');
        return test1::all();
        //return $user;

        //$user = collect(['name']);
        //return $user;

        //$user = test1::get()->where('name', 'pers');
        //$user = json_decode($user, true);
        //return $user[0]['name'];
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
        $test1 = new test1;
        $test1->name = $request->test1['name'];
        $test1->desc = $request->test1['desc'];
        $test1->save();

        return $test1;
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
        $existingName = test1::find( $id );
        if( $existingName ){
            $existingName->name = $request->test1['name'];
            $existingName->save();
            return $existingName;
        }
        return "no item";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingName = test1::find( $id );
        if( $existingName ){
            $existingName->delete();
            return "item deleted";
        }
        return "no item";
    }
}
