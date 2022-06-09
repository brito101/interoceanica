<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RastHouse extends Model
{
    use HasFactory;

    protected $table = 'A_Rast_House';

    protected $appends = ['Re_Aeroporto', 'Re_Flight', 'Re_Data', 'Re_Hora'];

    public function getRaPrevSaidaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getRaSaidaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getRaChegadaAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getRaPrevEntreDestAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    public function getRaEntregaDestAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    /** Appends */
    public function getReAeroportoAttribute()
    {
        $escala = RastEscala::where('Re_Codigo', $this->Ra_CodHouse)->first();
        return $escala->Re_Aeroporto;
    }

    public function getReFlightAttribute()
    {
        $escala = RastEscala::where('Re_Codigo', $this->Ra_CodHouse)->first();
        return $escala->Re_Flight;
    }

    public function getReDataAttribute()
    {
        $escala = RastEscala::where('Re_Codigo', $this->Ra_CodHouse)->first();
        return $escala->Re_Data;
    }

    public function getReHoraAttribute()
    {
        $escala = RastEscala::where('Re_Codigo', $this->Ra_CodHouse)->first();
        return $escala->Re_Hora;
    }
    /** Aux */
    public function getPrevSaida()
    {
        $date = explode('/', $this->Ra_PrevSaida);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getSaida()
    {
        $date = explode('/', $this->Ra_Saida);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getChegada()
    {
        $date = explode('/', $this->Ra_Chegada);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getPrevEntreDest()
    {
        $date = explode('/', $this->Ra_PrevEntreDest);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getEntregaDest()
    {
        $date = explode('/', $this->Ra_EntregaDest);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getDateUs()
    {
        $date = explode('/', $this->Re_Data);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }
}
