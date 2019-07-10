<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Hike extends Model
    {
        protected $fillable = [
            'title', 'description', 'imageLink', 'level', 'article'
        ];
    }