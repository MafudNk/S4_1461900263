<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';    
    protected $fillable = ['nama','jabatan'];


    public function getAll(){
        return DB::table('dokter')->get();
    }
}
