<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'service_id',
        'reference_code',
        'edition',
        'date_creation',
        'nom_redacteur',
        'fonction_redacteur',
        'nom_ver',
        'fonction_ver',
        'date_verification',
        'nom_app',
        'fonction_app',
        'date_approvation',
        'nom_proc',
        'objet',
        'domaineapp',
        'references',
        'abreviation',
        'description',
        'enregistrement',
        'logigramme'

    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}