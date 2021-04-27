<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    public function jenismobil()
    {
        return $this->belongsTo(JenisMobil::class, 'jenismobil_id', 'id');
    }

    public function pesanandetails()
    {
        return $this->hasMany(PesananDetail::class, 'mobil_id', 'id');
    }
}
