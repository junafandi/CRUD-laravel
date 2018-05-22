<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\barang;

class isi extends Model
{
    protected $table = 'isi';
    protected $guarded = ['id'];
    public $timestamps = true;

    public function barang(){
		return $this->hasMany('App\barang');
	}


}
