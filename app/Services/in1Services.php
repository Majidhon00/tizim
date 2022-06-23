<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\Services;


use App\item\in1CreateItem;
use App\Models\cat;

class in1Services
{
    public function in1Create()
    {
        $item = new in1CreateItem();
        $item->blogs = cat::orderBy('id','DESC')->get();
        return $item;
    }

}
