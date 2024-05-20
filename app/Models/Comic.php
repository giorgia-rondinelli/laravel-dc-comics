<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    // fillable contiene i nomi di tutte le colonne che abbamo creato con la migration, che devono corrispondere ai nomi dei value che abbiamo creato nel form
    protected $fillable=['title','slug','description','thumb','price','series','sale_date','type','artists','writers'];
}
