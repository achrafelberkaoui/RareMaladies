<?php

namespace App\Http\Controllers;


use App\Models\MaladieRare;
use Illuminate\Http\Request;

class MaladieRareController extends Controller
{

    public function index()
    {
    $maladieRares = MaladieRare::paginate(10);
    return response()->json($maladieRares,200);
    }

    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required',
        'symptoms' => 'required',
        'treatments' => 'nullable'
        ]);
         $maladieRares = MaladieRare::create($request->all());
         return response()->json($maladieRares, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $maladieRare = MaladieRare::findOrFail($id);
        return response()->json($maladieRare);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required',
        'symptoms' => 'required',
        'treatments' => 'nullable'
    ]);
        $maladieRare = MaladieRare::findOrFail($id);
        $maladieRare->update($request->all());
        return response()->json($maladieRare);
    }

    public function destroy($id)
    {
    $maladieRare = MaladieRare::findOrFail($id);
    $maladieRare->delete();

    return response()->json([
        "message" => "deleted"
    ]);
    }
}
