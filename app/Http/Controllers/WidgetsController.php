<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class WidgetsController extends Controller
{
    /**
     * show the homepage to request the corresponding order to the widgets needed
     *
     * @return mixed
     */
    public function show()
    {
        return View::make('home');
    }
    /**
     * process the request to return the number of pack to send out for the given order
     *
     * @param Request $request
     */
    public function process(Request $request)
    {
        $amount = $request->get('widgets');
        $pack_sizes = [
            5000,
            2000,
            1000,
            500,
            250
        ];

        $keys = count($pack_sizes);
        $pack_number = [];
        $last_key = $keys - 1;
        $before_last_key = $keys - 2;

        for($i = 0; $i < $keys; $i++) {
            $number = floor($amount / $pack_sizes[$i]);
            $remainder = $amount % $pack_sizes[$i];

            if ($i == $before_last_key
                && $remainder < $pack_sizes[$before_last_key]
                && $remainder > $pack_sizes[$last_key] ) {
                $number = 1;
                $remainder = 0;
            }

            if ($i == $last_key && $remainder < $pack_sizes[$last_key] && $remainder != 0) {
                $number = 1;
                $remainder = 0;
            }

            $pack_number[] = $number;
            $amount = $remainder;
        }

        return View::make('result',compact('pack_number','pack_sizes'));
    }

    /**
     * show the order
     *
     * @return mixed
     */
    public function result()
    {
        return View::make('result');
    }
}
