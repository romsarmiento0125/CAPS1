<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class login extends Controller
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
        // $validator = clients::make($request->all(), [
        //     'Email' => 'required',
        //     'Password' => 'required',
        // ]);

        //Need to fix super inefficient

        $validator = clients::all();
        $email = $request->clientCred['Email'];
        $pass = $request->clientCred['Password'];
        $validator = json_decode($validator, true);
        $index = false;
        $counter = 0;

        for($i = 0; $i < count($validator); $i++){
            if($validator[$i]['Email'] == $email && $validator[$i]['Password'] == $pass){
                $index = true;
                $counter = $i;
                $i = count($validator) + 1;
            }
        }

        if($index){
            return $validator[$counter];
        }
        else{
            //"Wrong credentials" string is use for validation in vue js
            return "Wrong credentials";
        }

        //return $validator[0]['Email'];

        // if ($validator->fails()) {
        //     return "You enter invalid account";
        // }
        // else{
        //     return "goods";
        // }

        // // Retrieve the validated input...
        // $validated = $validator->validated();

        // // Retrieve a portion of the validated input...
        // $validated = $validator->safe()->only(['name', 'email']);
        // $validated = $validator->safe()->except(['name', 'email']);
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
}
