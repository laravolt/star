<?php
namespace Laravolt\Star;

use Laravolt\Star\Models\Star as StarModel;

class Star {
    public function star($obj, $value)
    {
        $star = StarModel::where('starrable_id', $obj->id)->where('user_id', auth()->user()->id)->first();

        if(count($star) == 0) {
            $star = new StarModel();
            $star->user_id = auth()->user()->id;
            $star->value = $value;

            $obj->stars()->save($star);
        } else {
            $star->value = $value;
            $star->save();
        }
    }

    public function average($obj)
    {
        $stars = $obj->stars()->get();

        $total = 0;
        foreach($stars as $star) {
            $total += $star->value;
        }

        $average = $total / count($stars);

        return $average;
    }

    public function giver($obj)
    {
        return $obj->stars()->get();
    }
}