<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedurefiles extends Model
{
    use HasFactory;
    
    

    protected $fillable = [
        'nom_procedure',
        'file',
        'service_id'
    ];
}
