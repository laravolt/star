<?php
namespace Laravolt\Star\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: tama
 * Date: 10/2/2015
 * Time: 11:23 AM
 */

class StarController extends Controller
{
    public function add(Request $request)
    {
        $className = $request->input('className');
        $obj = new $className();
        $obj = $obj::find($request->input('id'));

        \Star::star($obj, $request->input('value'));

        return response()->json('hehe');
    }
}