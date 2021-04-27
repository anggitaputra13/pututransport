<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisMobil extends Model
{
    public function mobils()
    {
        return $this->hasMany(Mobil::class, 'jenismobil_id', 'id');
    }
}
