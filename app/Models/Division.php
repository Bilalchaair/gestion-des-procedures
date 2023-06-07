<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable = ['nom_division', 'hopital_id'];
    public function services()
    {
        return $this->hasMany(Service::class, 'division_id');
    }

    public function hospital()
    {
        return $this->belongsTo(Hopital::class, 'hopital_id');
    }
}
