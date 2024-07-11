<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\PembobotanStoreRequest;
use App\Http\Requests\PembobotanUpdateRequest;
use App\Models\Kosan;
use App\Models\Kriteria;
use App\Models\Pembobotan;
use Illuminate\Support\Facades\DB;

class PembobotanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pembobotans =  DB::select('select p.id, p.nilai , k.nama, k2.kode_kriteria, k2.nama_kriteria from pembobotans p join kosans k on p.id_kosan = k.id join kriterias k2 on p.id_kriteria = k2.id ');
        
        return view('pembobotans.index', compact('pembobotans'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        $kosans = Kosan::get();
        $kriterias = Kriteria::get();


        return view('pembobotans.create', compact('kosans'))->with(compact('kriterias'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(PembobotanStoreRequest $request): RedirectResponse
    {   
        Pembobotan::create($request->validated());
         
        return redirect()->route('pembobotans.index')
                         ->with('success', 'Pembobotan created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Pembobotan $pembobotan): View
    {
        return view('pembobotans.show',compact('pembobotan'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembobotan $pembobotan): View
    {
        return view('pembobotans.edit',compact('pembobotan'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(PembobotanUpdateRequest $request, Pembobotan $pembobotan): RedirectResponse
    {
        $pembobotan->update($request->validated());
        
        return redirect()->route('pembobotans.index')
                        ->with('success','Pembobotan updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembobotan $pembobotan): RedirectResponse
    {
        $pembobotan->delete();
         
        return redirect()->route('pembobotans.index')
                        ->with('success','Pembobotan deleted successfully');
    }
}