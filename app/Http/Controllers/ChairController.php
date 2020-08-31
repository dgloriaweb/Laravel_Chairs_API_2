<?php

namespace App\Http\Controllers;

use App\Chair;
use App\Http\Resources\ChairResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        // Get articles
        $chairs = Chair::paginate(15);

        // Return collection of articles as a resource
        return ChairResource::collection($chairs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return ChairResource
     */
    public function show($id)
    {
        // Get articles
        $chair = Chair::findOrFail($id);

        // Return collection of articles as a resource
        return new ChairResource($chair);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
