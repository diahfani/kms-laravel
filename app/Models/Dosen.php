<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $table = 'dosen';

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function bidangilmu()
    {
        return $this->belongsTo(BidangIlmu::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}