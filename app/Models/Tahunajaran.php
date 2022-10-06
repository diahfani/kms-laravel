<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahunajaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kurikulum()
    {
        return $this->belongsTo(Kurikulum::class);
    }
}