<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tatausaha extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}