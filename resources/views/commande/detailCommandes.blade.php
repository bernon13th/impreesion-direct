@extends('adminlte::page')

@section('title', 'ImpressionDirect')

@section('content_header')
    <head>
        <link href="{{asset('style.css')}}" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    </head>
    <body>
    @foreach ($commandes as $detailCommande)
        <h1 style="text-align: center" class="m-0 text-dark">Detail de la commande n° {{$detailCommande->noCommande}}</h1>

            <a style="border-color: red" href="{{url()->previous()}}" class="btn">RETOUR</a>

        <br>
        <br>
        <table id="customers">
            <tr><th colspan="5"; style="text-align: center">Information Commande</th></tr>
            <tr>
                <th>dateCommande</th>
                <td>{{$detailCommande->dateCommande}}</td>
                <th>Produits</th>
                <td><textarea cols="50" rows="1" style="border: none;background: none; text-align: center;" name="dateCommande">{{$detailCommande->produits}}</textarea></td>
            </tr>
            <tr>
                <th>Moyen de Paiement</th>
                <td>{{$detailCommande->mpaiement}}</td>
                <th>Moment du Paiement</th>
                <td>{{$detailCommande->momentPaiement}}</td>
            </tr>
            <tr>
                <th>Nom du PDf</th>
                <td>{{$detailCommande->nomPdf}}</td>
                <th>Date d'expedition</th>
                <td>{{$detailCommande->dateExpd}}</td>
            </tr>
            <tr>
                <th>Prix TTC</th>
                <td>{{$detailCommande->pxttc}} €</td>
            </tr>
            <tr><th colspan="5"; style="text-align: center">Information Client</th></tr>
            <tr>
                <th>Réference du client</th>
                <td><a style="border: none; color: black ;background: none; text-align: center" name="dateCommande" href="{{route('client.detail', $detailCommande->refClient)}}">{{$detailCommande->refClient}}</a></td>
                <th>Entité Client</th>
                <td>{{$detailCommande->entCli}}</td>
            </tr>
            <tr>
                <th>Mail Client</th>
                <td>{{$detailCommande->mail}}</td>
                <th>Téléphone Cient</th>
                <td>{{$detailCommande->tel}}</td>
            </tr>
            <tr><th colspan="5", style="text-align: center">Adresse Client</th></tr>
            <tr>
                <td style="border-style: none"></td>
                <td>{{$detailCommande->ad1}}</td>
                <td>{{$detailCommande->ad3}}</td>
                <td>{{$detailCommande->ad2}}</td>
                <td style="border-style: none"></td>
            </tr>
            <tr><tr><th colspan="5", style="text-align: center">Adresse Livraison</th></tr>
            <tr>
                <td style="border-style: none"></td>
                <td>{{$detailCommande->livad1}}</td>
                <td>{{$detailCommande->livad3}}</td>
                <td>{{$detailCommande->livad2}}</td>
                <td style="border-style: none"></td>
            </tr>
            <tr><th colspan="5", style="text-align: center">Statut Commande</th></tr>
            <tr>
                <th>Validation Client</th>
                <td>
                    <a href="">
                        @if ($detailCommande->valClient === 0)
                            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @endif
                    </a>
                </td>
                <th>Commande Expedie</th>
                <td>
                    <a href="">
                        @if ($detailCommande->validee === 0)
                            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @endif
                    </a>
                </td>
            </tr>
            <tr>
                <th>Commande Expediée</th>
                <td>
                    <a href="">
                        @if ($detailCommande->expediee === 0)
                            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @endif
                    </a>
                </td>
                <th>Commande Facturée</th>
                <td>
                    <a href="">
                        @if ($detailCommande->facturee === 0)
                            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @endif
                    </a>
                </td>
            </tr>
            <tr>
                <th>Commande Envoyée</th>
                <td>
                    <a href="">
                        @if ($detailCommande->envoyee === 0)
                            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @endif
                    </a>
                </td>
                <th>Envoie du Suivi</th>
                <td>
                    <a href="">
                        @if ($detailCommande->envoiSuivi === 0)
                            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @else
                            <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        @endif
                    </a>
                </td>
            </tr>
            <tr><th colspan="5", style="text-align: center">Information complémentaire</th></tr><tr>
                <th>noColissimo</th>
                <td>{{$detailCommande->noColissimo}}</td>
                <th>BAT</th>
                <td>{{$detailCommande->BAT}}</td>
            </tr>
            <tr>
                <th>Adresse Suivi</th>
                <td>{{$detailCommande->adrSuivi}}</td>
                <th>Option T</th>
                <td>{{$detailCommande->optionT}}</td>
            </tr>
            <tr>
                <th>Impressions Numerique</th>
                <td>{{$detailCommande->impressions_numeriques}}</td>
                <th>Commentaire</th>
                <td>{{$detailCommande->commentaire}}</td>
            </tr>
            <tr>
                <th>Transporteur Client</th>
                <td>{{$detailCommande->transporteurClient}}</td>
                <th>Prix Transporteur</th>
                <td>{{$detailCommande->pxTransporteur}}</td>
            </tr>
            <tr>
                <th>Ref du transporteur</th>
                <td>{{$detailCommande->refTransporteur}}</td>
                <th>Id_Commission</th>
                <td>{{$detailCommande->id_commission}}</td>
            </tr>
            <tr>
                <th>id_NomPdf</th>
                <td>{{$detailCommande->id_NomPdf}}</td>
                <th>Expertise</th>
                <td>{{$detailCommande->expertise}}</td>
            </tr>

        </table>
        <br>

            <button style="border: none" type="submit">
                <a style="margin-right: auto;border-color: red" class="btn">MODIFIER LA COMMANDE</a>
            </button>
        @endforeach
    <br>

    </body>

@stop

@section('content')


