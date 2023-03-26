<?php

namespace App\Http\Controllers;

use App\Models\Poi;
use Illuminate\Http\Request;

class PoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.dashboard', [
            'pois' => Poi::all()
        ]);
    }

    /**
     * Shows the update form.
     */
    public function edit(int $id) {
        return view('layouts.edit', [
            'poi' => Poi::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $poi = Poi::find($id);

        $formFields = $request->validate([
            'name' => 'required|string',
            'history' => 'required|string',
            'courses' => 'required|string',
            'offices' => 'required|string',
            'top' => 'required',
            'bottom' => 'required',
            'left' => 'required',
            'right' => 'required'
        ]);

        $poi->update($formFields);


        return redirect(route('poi.index'));
    }
}
