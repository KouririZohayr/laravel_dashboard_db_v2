<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class DashStatic extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):JsonResponse
    {
        
        $cat =$request->Idc;
        
        if ($cat) {
            $total =DB::selectOne("SELECT calculate_total_by_categorie($cat) AS total")->total;
        } else {
            $total = 0;
        }
        // $res = DB::select("select id ,type ,intitule_CG,calculate_total_by_categorie(id) as total  FROM categories");
    
       return response()->json(['total' => $total], 200);
    //     return $res;
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
