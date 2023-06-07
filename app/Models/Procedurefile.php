<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedurefile extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_procedure',
        'file',
        'service_id'
    ];
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
