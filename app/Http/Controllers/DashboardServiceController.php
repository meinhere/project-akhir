<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'JagoKebun . Dashboard - Layanan',
            'services' => Service::all()
        ];

        return view('dashboard.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'JagoKebun . Tambah Layanan',
        ];

        return view('dashboard.services.create', $data);
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
            'name' => 'required|max:255',
            'slug' => 'required|unique:services',
            'gambar' => 'required|image|file|max:1024',
        ]);
        $validatedData['jenis_service'] = $request->jenis_service;
        $validatedData['gambar'] = $request->file('gambar')->store('service-images');

        Service::create($validatedData);

        return redirect('/dashboard/services')->with('success', 'Layanan baru telah ditambakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $data = [
            'title' => 'JagoKebun . Edit Artikel',
            'service' => $service
        ];

        return view('dashboard.services.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $rules = [
            'name' => 'required|max:255',
            'gambar' => 'image|file|max:1024',
        ];

        if ($request->slug != $service->slug) {
            $rules['slug'] = 'unique:services|max:255';
        }

        $validatedData = $request->validate($rules);
        $validatedData['jenis_service'] = $request->jenis_service;

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('service-images');
        }

        Service::where('id', $service->id)->update($validatedData);

        return redirect('/dashboard/services')->with('success', 'Layanan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::delete($service->gambar);

        Service::destroy($service->id);
        return redirect('/dashboard/services')->with('success', 'Layanan telah dihapus');
    }
}
