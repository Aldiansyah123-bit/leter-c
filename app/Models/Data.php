<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable =  [
        'number','nama','file','keterangan','dusun','desa','kab_kota'
    ];

    public function asset()
    {
        return $this->hasMany(Asset::class);
    }
}
