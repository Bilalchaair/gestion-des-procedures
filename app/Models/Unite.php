<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    use HasFactory;
    protected $fillable = ['nom_unite', 'service_id'];
    
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
