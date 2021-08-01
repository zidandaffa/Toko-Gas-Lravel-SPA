<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuKredit extends Model
{
    //
    protected $fillable = ['akun','limit','tanggal_bayar'];

    public function akun()
    {
        return $this->belongsTo('App\Akun','akun');
    }
}
