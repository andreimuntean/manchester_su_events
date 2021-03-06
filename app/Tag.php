<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * Name of the table.
     *
     * @var bool
     */
    public $table = 'tags';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the event that this photo is posted on.
     *
     * @return Eloquent\Relationship
     */
    public function events() {

        return $this->belongsToMany('App\Event', 'event_tags', 'tag_id', 'event_id');
    }
}