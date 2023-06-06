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
        return $this->belongsTo(Division::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function unite()
    {
        return $this->hasMany(Unite::class);
    }
    public function procedurefiles()
    {
        return $this->hasMany(procedurefiles::class);
    }
    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }
}
