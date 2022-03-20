<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Tag extends Model
{
    use HasFactory;

    protected $filable = ['label'];

    public $timestamps = false;

    public function articles() {
        return $this->belongsToMany(Article::class);
    }
}
