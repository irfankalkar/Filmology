<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    // Veritabanındaki doldurulabilir değerler
    protected $fillable = [
        'Movie_ID',
        'Movie_Name',
        'Movie_Original_Name',
        'Movie_Story',
        'Category',
        'Director',
        'Writer',
        'Actor1',
        'Actor2',
        'Actor3',
        'Actor4',
        'Actor5',
        'Movie_Release_Year',
        'Movie_Duration',
        'Movie_Cover_URL',
        'Movie_Trailer_URL',
        'IMDB_Point',
        'View_Count',
    ];
    protected $primaryKey = 'Movie_ID'; // Birincil anahtarınız
    public $timestamps = false;
}

