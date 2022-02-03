@extends('adminlte::page')

@section('title', 'ImpressionDirect')

@section('content_header')

    <head>
        <link href="{{asset('style.css')}}" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    </head>
    <body>
    @foreach ($clients as $client)
    <h1 style="text-align: center" class="m-0 text-dark">Detail du client n°{{$client->refClient}}</h1>
    <br>
    <a style="margin-right: auto;border-color: red" href="{{url()->previous()}}" class="btn">RETOUR</a>
    <br>
    <br>

        <form action="{{ route('client.edit',$client->refClient) }}" method="POST">
            @csrf
            <table id="customers">
                <tr>
                    <th>Informations</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Societe</th>
                    <th>Nom de Livraison</th>
                    <th>Pays</th>
                </tr>
                <tr>
                    <td style="text-align: left;background-color: #ff2525;color: white;">Informations Générales</td>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>{{$client->societe}}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>{{$client->tel}}</td>
                    <td>{{$client->mobile}}</td>
                    <td>{{$client->fax}}</td>
                    <td>{{$client->email}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Adresse de Facturation</td>
                    <td>{{$client->factAdr1}}</td>
                    <td>{{$client->factAdr2}}</td>
                    <td>{{$client->factAdr3}}</td>
                    <td></td>
                    <td>{{$client->factPays}}</td>
                </tr>
                <tr>
                    <td>Adresse de Livraison</td>
                    <td>{{$client->livAdr1}}</td>
                    <td>{{$client->livAdr2}}</td>
                    <td>{{$client->livAdr3}}</td>
                    <td>{{$client->livNom}}</td>
                    <td>{{$client->livPays}}</td>
                </tr>
                <tr>
                    <td>Commercial associé </td>
                    <td>
                        @if ($client->id_teleprospecteur === 0)
                        Pas de Commercial associé
                        @elseif ($client->id_teleprospecteur === 1)
                            IORIO Carmelo
                        @elseif ($client->id_teleprospecteur === 2)
                            ROGER Pascal
                        @elseif ($client->id_teleprospecteur === 3)
                            BERNARD Olivier
                        @endif
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Commentaires</td>
                    <td style="margin-left: auto">{{$client->remarques}}</td>

                </tr>

            </table>

            <br>

            <a style="border-color: red" href="{{route('client.commande',$client->refClient)}}" class="btn">VOIR SES COMMANDES ET DEVIS</a>
            <br>
            <br>

                <button style="border: none" type="submit">
                    <a style="margin-right: auto;border-color: red" class="btn">MODIFIER LE CLIENT</a>
                </button>

        </form>
        <br>
        </body>
    @endforeach

@stop

@section('content')


