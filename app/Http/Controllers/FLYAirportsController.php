<?php namespace App\Http\Controllers;

use App\FLYAirports;
use App\FLYCountries;
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
        $config ['title'] = 'Airports';
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

        $config['form'] = 'Airport';
        $config['route'] = route('app.airports.create');
        $config['back'] = route('app.airports.index');
        $config['country'] = FLYCountries::pluck('name', 'id')->toArray();

        return view('admin.airport-create', $config);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /flyairports
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();
        FLYAirports::create($data);

        return redirect(route('app.airports.index'));
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
        $config['id'] = $id;
        $config['form'] = $id;
        $config['back'] = route('app.airlines.index');
        $config['record'] = FLYAirports::find($id)->toArray();
        $config['route'] = route('app.airports.edit', $id);
        $config['country'] = FLYCountries::pluck('name', 'id')->toArray();


        return view('admin.airport-create', $config);
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

        $config = FLYAirports::find($id);
        $data = request()->all();
        $config->update($data);

        return redirect(route('app.airports.index'));
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
        FLYAirports::destroy($id);
        return json_encode(["success" => true, "id" => $id]);
	}

}