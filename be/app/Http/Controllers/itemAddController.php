<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerOrders;

class itemAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return customerOrders::all();
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
        $register = new customerOrders();

        $register->Customer_Email = $request->register['customerEmail'];
        $register->Product_Name = $request->register['productName'];
        $register->Product_Desc = $request->register['productDesc'];
        $register->Product_Price = $request->register['productPrice'];
        $register->Product_Count = $request->register['productCount'];
        $register->Product_TPrice = $request->register['productTotalPrice'];
        $register->Product_Image = $request->register['productImage'];
        $register->OrderTag = $request->register['orderTag'];
        
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
