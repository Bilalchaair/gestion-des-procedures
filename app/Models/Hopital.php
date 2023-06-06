<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        
    ];

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
