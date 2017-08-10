<?php namespace App\Http\Controllers;

use App\FLYAirlines;
use App\FLYAirports;
use App\FLYCountries;
use App\FLYFlights;
use Carbon\Carbon;
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
        $config['destination'] = FLYAirports::pluck('name', 'id')->toArray();
        $config['origin'] = FLYAirports::pluck('name', 'id')->toArray();
        $config['airline'] = FLYAirlines::pluck('name', 'id')->toArray();
        $config['departure'] =  Carbon::now('Europe/Vilnius');
        $config['arival'] = Carbon::now('Europe/Vilnius')->addDays(7);


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
        $data = request()->all();
        FLYFlights::create([
            'origin_id' => $data['origin_id'],
            'destination_id' => $data['destination_id'],
            'airline_id' => $data['airline_id'],
            'departure' => $data['departure'],
            'arival' => $data['arival'],
        ]);

        return redirect(route('app.flights.index'));
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
        $config['id'] = $id;
        $config['form'] = $id;
        $config['back'] = route('app.airlines.index');
        $config['route'] = route('app.airports.edit', $id);
        $config['record'] = FLYFlights::find($id)->toArray();
        $config['destination'] = FLYAirports::pluck('name', 'id')->toArray();
        $config['origin'] = FLYAirports::pluck('name', 'id')->toArray();
        $config['airline'] = FLYAirlines::pluck('name', 'id')->toArray();
        $config['departure'] =  Carbon::now('Europa/Vilnius');
        $config['arival'] = Carbon::now('Europa/Vilnius')->addDays(7);

        return view('admin.flight-create', $config);
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
        $config = FLYFlights::find($id);
        $data = request()->all();
        $config->update($data);

        return redirect(route('app.flights.index'));
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
        FLYFlights::destroy($id);
        return json_encode(["success" => true, "id" => $id]);
	}

}