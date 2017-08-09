<?php namespace App\Http\Controllers;

use App\FLYCountries;
use Illuminate\Routing\Controller;

class FLYCountriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /flycountries
	 *
	 * @return Response
	 */
	public function index()
	{
        $config['list'] = FLYCountries::get()->toArray();
        $config['new'] = 'app.countries.create';


        return view('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /flycountries/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /flycountries
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /flycountries/{id}
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
	 * GET /flycountries/{id}/edit
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
	 * PUT /flycountries/{id}
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
	 * DELETE /flycountries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}