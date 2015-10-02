<?php
namespace Laravolt\Star\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: tama
 * Date: 10/1/2015
 * Time: 11:21 AM
 */

class Star extends Model
{
    protected $table = 'star';

    public function starrable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}