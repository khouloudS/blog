<?php

namespace App\Http\Controllers;

use App\computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class computerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$computer  =DB::table('computers')->simplePaginate(10);
        //$computer->nextPageUrl();
        //$computer =computer::all();
        $category = computer::first();
        $computer = $category->paginate(10);
        return view('computer.index', compact('computer'));
    }
    public function avaible(){

        $category = computer::first();
        $computer = $category->paginate(10);
        return view('computer.index', compact('computer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('computer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'macAdress' => 'required|unique:computers',
            'model' => 'required',
            'system' => 'required',
            'purchase' => 'nullable|date'



        ]);
        //     $manager = Manager::findOrFail($id);


        $manager = new computer();

        $manager->macAdress = $request->macAdress;
        $manager->model = $request->model;
        $manager->system = $request->system;
        $manager->purchase = $request->purchase;
        // $manager->station_id = 1;
        $manager->departement_id = $request->departement_id;
        $manager->save();


        // $manager->station_id = 1;
        $manager->save();

        return redirect()->route('computer.show', $manager);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $computer = computer::findOrFail($id);

        return view('computer.show', compact('computer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
