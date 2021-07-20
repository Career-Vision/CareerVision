<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('FrontEnd.home');
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
        //
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



    public function aptitudetest()
    {
        return view('FrontEnd.Aptitude_Test.aptitudetest');
    }

    
    public function sciencetest()
    {
        return view('FrontEnd.Aptitude_Test.sciencetest');
    }
    
    public function commercetest()
    {
        return view('FrontEnd.Aptitude_Test.commercetest');
    }

    public function arttest()
    {
        return view('FrontEnd.Aptitude_Test.arttest');
    }

    public function thankyou()
    {
        return view('FrontEnd.Aptitude_Test.thankyou');
    }


    public function careerguidence()
    {
        return view('FrontEnd.Career_Guidence.careerguidence');
    }


    public function careerexploration()
    {
        return view('FrontEnd.Career_Exploration.careerexploration');
    }

    public function appoinments()
    {
        return view('FrontEnd.Career_Guidence.Appoinment.appoinments');
    }


}
