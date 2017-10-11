<?php namespace App\Http\Controllers;

use App\FLYAirlines;
use Illuminate\Routing\Controller;

class FLYAirlinesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /flyairlines
     *
     * @return Response
     */
    public function index()
    {
        $config['list'] = FLYAirlines::get()->toArray();
        $config['new'] = 'app.airlines.create';
        $config ['title'] = 'Airlines';
        $config['edit'] = 'app.airlines.edit';
        $config['delete'] = 'app.airlines.delete';
        $config['route'] = route('app.airlines.create');


        return view('admin.list', $config);
    }

    /**
     * Show the form for creating a new resource.
     * GET /flyairlines/create
     *
     * @return Response
     */
    public function create()
    {
        $config['form'] = 'Airline';
        $config['route'] = route('app.airlines.create');
        $config['back'] = route('app.airlines.index');


        return view('admin.create', $config);


    }

    /**
     * Store a newly created resource in storage.
     * POST /flyairlines
     *
     * @return Response
     */
    public function store()
    {

//        $data = request()->all();
//        FLYAirlines::create($data);

        return redirect(route('app.airlines.index'));


    }

    /**
     * Display the specified resource.
     * GET /flyairlines/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /flyairlines/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $config['id'] = $id;
        $config['form'] = $id;
        $config['back'] = route('app.airlines.index');
        $config['record'] = FLYAirlines::find($id)->toArray();
        $config['route'] = route('app.airlines.edit', $id);


        return view('admin.create', $config);
    }

    /**
     * Update the specified resource in storage.
     * PUT /flyairlines/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $config = FLYAirlines::find($id);
        $data = request()->all();
        $config->update([
            'name' => $data['name']
        ]);

        return redirect(route('app.airlines.index'));
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /flyairlines/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        if(FLYAirlines::destroy($id))
        return json_encode(["success" => true, "id" => $id]);

        }




}