<?php namespace App\Http\Controllers;

use App\FLYAirports;
use Illuminate\Routing\Controller;

class FLYAirportsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /flyairports
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = FLYAirports::get()->toArray();
        $config['new'] = 'app.airports.create';
        $config['edit'] = 'app.airports.edit';
        $config['delete'] = 'app.airports.delete';
        $config['route'] = route('app.airports.create');


        return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /flyairports/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /flyairports
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /flyairports/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /flyairports/{id}/edit
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
	 * PUT /flyairports/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /flyairports/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}