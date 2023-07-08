<?php

namespace App\Http\Controllers;

use App\Models\Hiking;
use Illuminate\Http\Request;

class HikingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hiking = Hiking::orderBy('created_at', 'DESC')->get();

        return view('hikings.index', compact('hiking'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hikings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hiking::create($request->all());

        return redirect()->route('hikings')->with('success', 'Data Pendaki Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hiking = Hiking::findOrFail($id);

        return view('hikings.show', compact('hiking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hiking = Hiking::findOrFail($id);

        return view('hikings.edit', compact('hiking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hiking = Hiking::findOrFail($id);

        $hiking->update($request->all());

        return redirect()->route('hikings')->with('success', 'Data Pendaki Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hiking = Hiking::findOrFail($id);

        $hiking->delete();

        return redirect()->route('hikings')->with('success', 'Data Pendaki Berhasil Di Hapus');
    }
}
