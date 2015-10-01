<?php
namespace Laravolt\Star;

trait StarrableTrait
{
    public function stars()
    {
        return $this->morphMany(\Laravolt\Star\Models\Star::class, 'starrable');
    }
}