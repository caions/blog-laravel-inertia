<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Mews\Purifier\Casts\CleanHtmlInput;
use Mews\Purifier\Casts\CleanHtmlOutput;

class Post extends Model
{
    use HasFactory;
    protected $casts = [
        'body'             => CleanHtml::class, // cleans both when getting and setting the value
        //'body'             => CleanHtmlInput::class, // cleans when setting the value
        //'body'             => CleanHtmlOutput::class, // cleans when getting the value
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'slug',
    ];
}
