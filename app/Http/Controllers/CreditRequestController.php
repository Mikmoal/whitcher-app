<?php

namespace App\Http\Controllers;

use App\Models\CreditRequest;
use Illuminate\Http\Request;

class CreditRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = CreditRequest::all();
        return view('index_requests', ['registros' => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-request-new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CreditRequest::create([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);

        return redirect('/requests')->with('mensaje', 'Solicitud creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(CreditRequest $creditRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreditRequest $creditRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CreditRequest $creditRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreditRequest $creditRequest)
    {
        //
    }
}
