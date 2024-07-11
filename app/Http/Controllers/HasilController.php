<?php
  
namespace App\Http\Controllers;
  
use App\Models\Kosan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\KosanStoreRequest;
use App\Http\Requests\KosanUpdateRequest;
use App\Models\Kriteria;
use App\Models\Pembobotan;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $total_bobot = Kriteria::sum('bobot');
        $pembobotans = Pembobotan::all();
        $nilai = 0;

        foreach ($pembobotans as $pembobotan) {
            // $nilaiTest = $pembobotan->nilai;
            // $bobot =  DB::select('select bobot from kriterias where id = '. $pembobotan->id_kriteria);
            // $x = $nilaiTest/$bobot[0];
        }

        // nilai ^ bobot/total_bobot

        
        $nilaiS = [];

        return view('hasils.index');
    }
  
}