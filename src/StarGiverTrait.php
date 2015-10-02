<?php
/**
 * Created by PhpStorm.
 * User: tama
 * Date: 10/2/2015
 * Time: 11:02 AM
 */

namespace Laravolt\Star;


trait StarGiverTrait {
    public function starGiver()
    {
        return $this->hasMany('\Laravolt\Star\Models\Star::class');
    }
}