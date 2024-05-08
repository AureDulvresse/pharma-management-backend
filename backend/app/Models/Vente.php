<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = ['medicament_id', 'client_id', 'date_vente', 'montant_total', 'mode_paiement'];
    
}
