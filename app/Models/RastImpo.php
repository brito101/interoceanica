<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RastImpo extends Model
{
    use HasFactory;

    protected $table = 'Rast_Impo';

    public function getImDataMBLAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImAtracacaoAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImDataHBLAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImDataCotaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImPrevProntAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImPrevSaidaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImSaidaRealAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImPrevChegaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImGravacaoAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImGravaHoraAttribute($value)
    {
        return date('H:i:s', strtotime($value));
    }

    public function getImTraPrevSaidaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImTraSaidaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImDtLiberaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getImDtRetiradaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }
}
