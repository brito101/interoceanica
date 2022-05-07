<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RastExpo extends Model
{
    use HasFactory;

    protected $table = 'Rast_Expo';

    /** Accessors */

    public function getExGravacaoAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExDtReservaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExEntregaCargaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExEntregaDocAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExETAAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExETDAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExSaidaNavioAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExDtTransboAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getExDtChegDestinoAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }
}
