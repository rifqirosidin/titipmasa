<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TitipBarang extends Model
{
    protected $fillable = [
    	'harga','user_id','status', 'TripInternational_id','gambar_barang',
    	'nama_barang', 'berat_barang', 'pajak', 'deskripsi_barang','jumlah'
    ];


    public function TripInternational()
    {
    	return $this->belongsTo('App\TripInternational', 'TripInternational_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
