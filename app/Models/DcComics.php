<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DcComics extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'img',
        'title',
        'description',
        'price',
        'series',
        'sale_date',
        'type',
        'slug',

    ];
}
