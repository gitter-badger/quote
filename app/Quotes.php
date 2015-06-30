<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Quotes extends Model
{
    protected $dates = ['published_at'];

    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    public function setPublishedAtAttribute( $date ){
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}
