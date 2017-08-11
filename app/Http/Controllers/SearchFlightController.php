<?php namespace App\Http\Controllers;

use App\FLYAirlines;
use App\FLYAirports;
use App\FLYFlights;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class SearchFlightController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /searchflight
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['destination'] = FLYAirports::pluck('name', 'id')->toArray();
        $config['origin'] = FLYAirports::pluck('name', 'id')->toArray();
//        $config['list'] = FLYFlights::get()->toArray();
        $config['date'] = Carbon::now('Europe/Vilnius');
        $config['route'] = route('app.search.index');

        $data = request()->all();

        if($data) {
            $config['flights'] = $this->getFlights($data);
        }


        return view('frontend.search-flights', $config);


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /searchflight/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /searchflight
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /searchflight/{id}
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
	 * GET /searchflight/{id}/edit
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
	 * PUT /searchflight/{id}
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
	 * DELETE /searchflight/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


    public function getFlights(){
	    $data = request()->all();
//	    dd($data);
	    $from = $data['origin_id'];
	    $to = $data['destination_id'];
	    $date = $data['departure'];



        return FLYFlights::where('origin_id', $from)
            ->where('destination_id', $to)
            ->where('departure', '>=', $date)
            ->where('departure', '<=', $date . '23.59.59')
            ->get()->toArray();
//dd($config);



    }


}