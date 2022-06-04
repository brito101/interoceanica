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

    /** Aux */
    public function getDtReservaUs()
    {
        $date = explode('/', $this->Ex_DtReserva);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getEntregaCargaUs()
    {
        $date = explode('/', $this->Ex_EntregaCarga);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getEntregaDocUs()
    {
        $date = explode('/', $this->Ex_EntregaDoc);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getETAUs()
    {
        $date = explode('/', $this->Ex_ETA);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getETDUs()
    {
        $date = explode('/', $this->Ex_ETD);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getSaidaNavio()
    {
        $date = explode('/', $this->Ex_SaidaNavio);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }

    public function getDtChegDestino()
    {
        $date = explode('/', $this->Ex_DtChegDestino);
        return $date[1] . '/' . $date[0] . '/' . $date[2];
    }
}
