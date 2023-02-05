<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiHarian extends Model
{
    use HasFactory;

    protected $guarder = ['id'];
    protected $fillable = [0];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
