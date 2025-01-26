<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'Comment', // Yorum içeriği
        'User_ID', // Yorumu yapan kullanıcının ID'si
        'Movie_ID', // Yorumun yapıldığı filmin ID'si
        'C_Like',
        'Dislike',
        'Time',
    ];

    // Yorumu yapan kullanıcıyla ilişki (opsiyonel)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Yorumun yapıldığı filmle ilişki (opsiyonel)
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
    public $timestamps = false;
}
