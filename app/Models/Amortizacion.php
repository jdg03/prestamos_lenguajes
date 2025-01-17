<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amortizacion extends Model
{
    use HasFactory;
    protected $table = 'amortizaciones';
    protected $primaryKey = 'prestamo';
    public $timestamps = false;
    public $incrementing = false;
}
