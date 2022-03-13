<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\PlantCategory;
use App\Models\PlantTool;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'JagoKebun . Dashboard - Tanaman',
            'plants' => Plant::all(),
        ];

        return view('dashboard.plants.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'JagoKebun . Tambah Tanaman',
            'plant_categories' => PlantCategory::all(),
            'tools' => Tool::all()
        ];

        return view('dashboard.plants.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:plants',
            'plant_category_id' => 'required',
            'detail' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);
        $validatedData['image'] = $request->file('image')->store('plants-images');

        $plant = Plant::create($validatedData);
        $plant->tool()->attach($request->tools);

        return redirect('/dashboard/plants')->with('success', 'Tanaman baru telah ditambakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        $data = [
            'title' => 'JagoKebun . Edit Tanaman',
            'plant' => $plant,
            'plant_categories' => PlantCategory::all(),
            'tools' => Tool::all()
        ];

        return view('dashboard.plants.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $rules = [
            'plant_category_id' => 'required',
            'detail' => 'required',
            'image' => 'image|file|max:1024',
        ];

        if ($request->name != $plant->name) {
            $rules['name'] = 'required|max:255|unique:plants';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('plant-images');
        }

        plant::where('id', $plant->id)->update($validatedData);

        if ($request->tools) {
            PlantTool::where('plant_id', $plant->id)->delete();
            $plant->tool()->attach($request->tools);
        }

        return redirect('/dashboard/plants')->with('success', 'Tanaman berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        Storage::delete($plant->image);

        PlantTool::where('plant_id', $plant->id)->delete();
        Plant::destroy($plant->id);
        return redirect('/dashboard/plants')->with('success', 'Tanaman telah dihapus');
    }
}
