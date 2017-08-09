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
//        $config['submit'] = 'app.airlines.create';


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
        $config = $this->getFormData();
        $config['route'] = route('app.airlines.create');
        $config['back'] = '/admin/airlines';

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

        $data = request()->all();
        FLYAirlines::create([
            'name' => $data['name']
        ]);

        return redirect(route('app.airlines.edit'));


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
        $record = FLYAirlines::find($id)->toArray();
        $config = $this->getFormData();
        $config['route'] = route('app.airlines.edit', $id);
        $config['record'] = $record;


        return view('airlines.create', $config);
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
        //
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
        //
    }


    public function getFormData()
    {
        $config['fields'][] =
            [
                "type" => "singleLine",
                "key" => "name",
            ];



        return $config;
    }

}