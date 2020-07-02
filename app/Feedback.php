<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";

    public $timestamps = false;

    public $incrementing = true;

    protected $fillable = ['id', 'feed_title', 'feed_content', 'feed_phone', 'feed_status', 'feed_email', 'feed_date',
	'feed_rep'];
}
