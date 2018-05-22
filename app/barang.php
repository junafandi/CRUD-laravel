<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\isi;

class barang extends Model
{
    protected $table = 'barang';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function isi(){
		return $this->belongsTo('App\isi');
	}

}
