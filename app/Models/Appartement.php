<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;

    protected $table = 'appartements'; // Nom de la table

    protected $primaryKey = 'numApp'; // Clé primaire

    public $incrementing = true; // Auto-incrémentation activée

    protected $keyType = 'int'; // Type de la clé primaire

    protected $fillable = [
        'design',
        'loyer',
    ];

    public $timestamps = true; // Active les timestamps (created_at, updated_at)
}
