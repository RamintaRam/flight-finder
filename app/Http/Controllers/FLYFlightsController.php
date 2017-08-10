<?php namespace App\Http\Controllers;

use App\FLYAirlines;
use App\FLYCountries;
use App\FLYFlights;
use Illuminate\Routing\Controller;

class FLYFlightsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /flyflights
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = FLYFlights::get()->toArray();
        $config['new'] = 'app.flights.create';
        $config['edit'] = 'app.flights.edit';
        $config['delete'] = 'app.flights.delete';
        $config['route'] = route('app.flights.create');


        return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /flyflights/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $config['form'] = 'Flight';
        $config['route'] = route('app.flights.create');
        $config['back'] = route('app.flights.index');
        $config['destination'] = FLYCountries::pluck('name', 'id')->toArray();
        $config['origin'] = FLYCountries::pluck('name', 'id')->toArray();
        $config['airline'] = FLYAirlines::pluck('name', 'id')->toArray();
//        $config['departure'] = FLYCountries::pluck('name', 'id')->toArray();
//        $config['arival'] = FLYCountries::pluck('name', 'id')->toArray();

        return view('admin.flight-create', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /flyflights
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /flyflights/{id}
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
	 * GET /flyflights/{id}/edit
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
	 * PUT /flyflights/{id}
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
	 * DELETE /flyflights/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}