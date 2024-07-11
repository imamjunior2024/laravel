<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\KosanStoreRequest;
use App\Http\Requests\KosanUpdateRequest;

class KosanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kosans = Kosan::latest()->paginate();

        return view('kosans.index', compact('kosans'))
                ->with('i', (request()->input('page', 1) - 1) *5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('kosans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KosanStoreRequest $request): RedirectResponse
    {
        Kosan::create($request->validated());

        return redirect()->route('kosans.index')
                         ->with('success', 'Kosan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kosan $kosan): View
    {
        return view('kosans.show',compact('kosan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kosan $kosan): View
    {
        return view('kosans.edit',compact('kosan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KosanUpdateRequest $request, Kosan $kosan): RedirectResponse
    {
        $kosan->update($request->validated());

        return redirect()->route('kosans.index')
                        ->with('success','Kosan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kosan $kosan): RedirectResponse
    {
        $kosan->delete();

        return redirect()->route('kosans.index')
                         ->with('success','Kosan deleted successfully');
    }
}
