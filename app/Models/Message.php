<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * Mass assignable attributes (table fields)
     *
     */

    protected $fillable = [
      'name',
      'email',
      'subject',
      'topic_id',
      'message',
      'read_at'

    ];

    /**
     *  Hidden from serialisation attributes (fields)
     */

    protected $hidden = [];

    /**
     * Attribute (type) casting
     */

    protected function casts():array{
        return [
          'read_at' => 'datetime',
        ];
    }

    public function isRead():bool
    {
        return isset($this->read_at) && $this->read_at;
    }

}
