<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {
        /** GET client FROM API */
        /** @var Response $clients */
        $clients = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/client/'));
        return view('client', ['clients'=>$clients]);
    }

    public function create(Request $request)
    {
        /** GET client FROM API */
        /** @var Response $clients */
        //dd($request->id_teleprospecteur);
        $clients = Http::withToken(session('key'))->post(env('API_PATH').'/client/create',[
            'emailClient' => $request->emailClient,
            'typeClient' => '1',
            'nomClient' => $request->nomClient,
            'prenomClient' => $request->prenomClient,
            'societeClient' => $request->societeClient,
            'telClient' => $request->telClient,
            'mobileClient' => $request->mobileClient,
            'faxClient' => $request->faxClient,
            'factAdr1' => $request->factAdr1,
            'factAdr2' => $request->factAdr2,
            'factAdr3' => $request->factAdr3,
            'factPays' => $request->factPays,
            'livAdr1' => $request->livAdr1,
            'livAdr2' => $request->livAdr2,
            'livAdr3' => $request->livAdr3,
            'livPays' => $request->livPays,
            'remarques' => $request->remarques,
            'id_teleprospecteur' => $request->id_teleprospecteur
        ]);
        //dd($request->teleprospecteur);
        return redirect(route('client.index'))->with('success','Client correctement ajouté');
    }


    public function show(Request $request)
    {
        /** GET client FROM API */
        /** @var Response $clients */
        $clients = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/client/'.$request->refClient));
        $commandes = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/commandes/client/'.$request->refClient));
        $devis = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/devis/client/'.$request->refClient));


        //dd($request->refClient);
        return view('detailClient', ['clients'=>$clients,'commandes'=>$commandes,'devis'=>$devis]);
    }

    public function showCommande(Request $request)
    {
        /** GET client FROM API */
        /** @var Response $clients */
        $clients = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/client/'.$request->refClient));
        $commandes = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/commandes/client/'.$request->refClient));
        $devis = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/devis/client/'.$request->refClient));


        //dd($request->refClient);
        return view('clientCommande', ['commandes'=>$commandes,'devis'=>$devis,'clients'=>$clients]);
    }


    public function showadd()
    {
        /** GET client FROM API */
        /** @var Response $clients */
        $clients = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/client/'));
        $teleprospecteur = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/teleprospecteur/'));
        $pays = json_decode(Http::withToken(session('key'))->get(env('API_PATH').'/pays/'));

        //dd($request->refClient);
        return view('addclient', ['clients'=>$clients,'teleprospecteur'=>$teleprospecteur,'pays'=>$pays]);
    }


    public function edit(Request $request)
    {
        /** GET client FROM API */
        /** @var Response $clients */
        $clients = json_decode(Http::withToken(session('key'))->patch(env('API_PATH').'/client/edit/'.$request->refClient));
        //dd($request->refClient);
        return redirect(route('client.index'))->with('success','Commande bien supprimée');
    }

    public function delete(Request $request)
    {
        /** PATCH DATA FOR STORE VISIT */
        /** @var Response $delete */
        //dd($request->v_id);
        $delete = json_decode(Http::withToken(session('key'))->delete(env('API_PATH') . '/client/destroy/'.$request->refClient,));
        //dd($request->noCommande);
        return redirect(route('client.index'))->with('success','Commande bien supprimée');
    }
}
