<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // on autorise les enregistrement
	protected $fillable = ['nom', 'email', 'objet', 'contenu'];
}
