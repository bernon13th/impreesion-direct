<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PartenairesController extends Controller
{
    public function index()
    {
        /** GET partenaire FROM API */
        /** @var Response $partenaires */
        $partenaires = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/teleprospecteur/'));
        return view('partenaires', ['partenaires'=>$partenaires]);
    }

}
