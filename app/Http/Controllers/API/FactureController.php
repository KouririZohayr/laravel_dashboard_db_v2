<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Fournisseur;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
        
    {
      
        $query = $request->q;
        $order =!empty($request->order)?$request->order :'id';
        $DESC= $request->DESC == "true" ?"DESC":"ASC";
        // $order = $request->order;

    if (!empty($query)) {

        $factures=Facture::search($query)->orderBy($order,$DESC)->paginate(5);
     
    } else {
        $factures = Facture::orderBy($order,$DESC)->paginate(5);
    }

    return response()->json($factures, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Facture $facture)
    {
       
        $factures = Facture::find($facture);
        return response()->json($factures);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facture $facture)
    {
        //
    }
}
