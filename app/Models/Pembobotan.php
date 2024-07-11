<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembobotan extends Model
{
    protected $fillable = [
        'id_kosan',
        'id_kriteria',
        'nilai'
        ];
}