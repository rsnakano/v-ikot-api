<?php

namespace App\Http\Controllers\Api;

use App\Models\Poi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class PoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Poi::all();
    }

    /**
     * Display a specified resource.
     */
    public function show($id)
    {
        $poi = Poi::find($id);
        if (!$poi) {
            return response()->json([
                'error' => 'The poi requested does not exist'
            ], $status = HttpResponse::HTTP_NOT_FOUND);
        }

        return $poi;
    }
}
