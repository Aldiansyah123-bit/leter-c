<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_id','no_persil','kelas_desa','da','ha','R','S',
        'alasan','type'
    ];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
