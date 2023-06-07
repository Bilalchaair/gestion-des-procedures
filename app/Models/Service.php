<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['nom_service', 'hopital_id', 'division_id'];
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function hospital()
    {
        return $this->belongsTo(Hopital::class, 'hopital_id');
    }
    public function unite()
    {
        return $this->hasMany(Unite::class, 'service_id');
    }
    public function procedurefiles()
    {
        return $this->hasMany(procedurefile::class, 'service_id');
    }
    public function procedures()
    {
        return $this->hasMany(Procedure::class, 'service_id');
    }
}
