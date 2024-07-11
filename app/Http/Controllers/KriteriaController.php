<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\KriteriaStoreRequest;
use App\Http\Requests\KriteriaUpdateRequest;
use App\Models\Kriteria;
  
class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kriterias = Kriteria::orderBy('kode_kriteria')->get();
        
        return view('kriterias.index', compact('kriterias'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('kriterias.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(KriteriaStoreRequest $request): RedirectResponse
    {   
        Kriteria::create($request->validated());
         
        return redirect()->route('kriterias.index')
                         ->with('success', 'Kriteria created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria): View
    {
        return view('kriterias.show',compact('kriteria'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria): View
    {
        return view('kriterias.edit',compact('kriteria'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(KriteriaUpdateRequest $request, Kriteria $kriteria): RedirectResponse
    {
        $kriteria->update($request->validated());
        
        return redirect()->route('kriterias.index')
                        ->with('success','Kriteria updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kriteria $kriteria): RedirectResponse
    {
        $kriteria->delete();
         
        return redirect()->route('kriterias.index')
                        ->with('success','Kriteria deleted successfully');
    }
}