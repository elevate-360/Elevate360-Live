<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use App\Models\Links;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $contactDetails = ContactDetails::pluck("cdValue", "cdKey")->all();
        $Links = Links::all();
        $links = $Links->mapWithKeys(function ($item) {
            return [$item['lTitle'] => ['lAddress' => $item['lAddress'], 'lClass' => $item['lClass']]];
        })->all();
        return view('index', compact('contactDetails', 'links'));
    }
}
