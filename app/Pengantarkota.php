<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengantarkota extends Model
{
    protected $table = 'pengantarkotas';
    protected $primaryKey = 'id';
    protected $fillable = ['admin_id', 'jabatan','nama', 'nama_surat'];

    public function admin(){
        return $this->belongsTo('App\Admin');
    }
}
