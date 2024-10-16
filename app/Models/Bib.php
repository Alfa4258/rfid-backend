<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bib extends Model
{
    use HasFactory;

    protected $table = 'bib';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'bib_number',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'address',
        'city',
        'province',
        'country',
        'email',
        'cellphone',
        'category',
    ];
}
