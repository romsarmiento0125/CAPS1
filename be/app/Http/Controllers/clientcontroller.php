<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class clientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return clients::all();
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
        $register = new clients();

        $register->First_Name = $request->register['First_Name'];
        $register->Last_Name = $request->register['Last_Name'];
        $register->Mobile_Number = $request->register['Mobile_Number'];
        $register->Email = $request->register['Email'];
        $register->Home_Adress = $request->register['Home_Adress'];
        $register->Postal_code = $request->register['Postal_code'];
        $register->City_Adress = $request->register['City_Adress'];
        $register->Province_Adress = $request->register['Province_Adress'];
        $register->Birthday = $request->register['Birthday'];
        $register->Gender = $request->register['Gender'];
        $register->Tag = $request->register['Tag'];
        $register->Password = $request->register['Password'];
        $register->save();

        return $register;
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
        $existingName =clients::find( $id );

        
        if( $existingName ){
            $existingName->First_Name = $request->register['First_Name'];
            $existingName->Last_Name = $request->register['Last_Name'];
            $existingName->Mobile_Number = $request->register['Mobile_Number'];
            $existingName->Email = $request->register['Email'];
            $existingName->Home_Adress = $request->register['Home_Adress'];
            $existingName->Postal_code = $request->register['Postal_code'];
            $existingName->City_Adress = $request->register['City_Adress'];
            $existingName->Province_Adress = $request->register['Province_Adress'];
            $existingName->Birthday = $request->register['Birthday'];
            $existingName->Gender = $request->register['Gender'];
            $existingName->Tag = $request->register['Tag'];
            $existingName->Password = $request->register['Password'];
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
        $existingName = clients::find( $id );
        if( $existingName ){
            $existingName->delete();
            return "item deleted";
        }
        return "no item";
    }
}
