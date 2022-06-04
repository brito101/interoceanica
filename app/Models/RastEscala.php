<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RastEscala extends Model
{
    use HasFactory;

    protected $table = 'A_Rast_Escala';

    public function getReDataAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function getReHoraAttribute($value)
    {
        return date('H:i:s', strtotime($value));
    }

    public function getDate()
    {
        $date = explode('/', $this->Re_Data);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }
}
