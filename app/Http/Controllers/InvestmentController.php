<?php

namespace App\Http\Controllers;

use App\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investments = Investment::all();
        return view('investments.index', ['investments' => $investments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('investments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'recipient' => ['required', 'min:3', 'max:50'],
            'amount' => ['required']
        ]);

        Investment::create($attributes);

        return redirect('/investments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investment  $Investment
     * @return \Illuminate\Http\Response
     */
    public function show(Investment $Investment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investment  $Investment
     * @return \Illuminate\Http\Response
     */
    public function edit(Investment $Investment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investment  $Investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $Investment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investment  $Investment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investment $Investment)
    {
        //
    }
}
