<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //pour donner la permission d'ajouter des infos à partir d'un tableau
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];
    //on veut mélanger une categorie à un article
    public function category(){
        return $this->belongsTo(Category :: class);
    }
}
