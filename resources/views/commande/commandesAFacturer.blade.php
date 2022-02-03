@extends('adminlte::page')

@section('title', 'ImpressionDirect')

@section('content_header')
    <h1 class="m-0 text-dark">Liste des commandes</h1>
@stop

@section('content')
    <head>
        <link href="{{asset('style.css')}}" rel="stylesheet">
    </head>

    <p>Ici s'afficherons les commandes à facturées</p>
    <br><br>
    <div style="overflow-x: auto;">
        <table class="fl-table">
            <thead>
            <tr>
                <th>Num Commande</th>
                <th style="width: 10px">Nom de l'entreprise</th>
                <th>Prix TTC</th>
                <th>Moyen payement</th>
                <th>Date commande</th>
                <th>Validation Client</th>
                <th>Commande validee</th>
                <th>Commande Expédier</th>
                <th>date d'expedition</th>
                <th>Facture</th>
                <th>Num Facture</th>
            </tr>
            </thead>
            <tbody>
            @foreach($commandes->data as $commandeAFacturer)
                @if ($commandeAFacturer->facturee ===0)
                    <tr>
                        <td>{{$commandeAFacturer->noCommande}}</td>
                        <td>{{$commandeAFacturer->entCli}}</td>
                        <td>{{$commandeAFacturer->pxttc}}</td>
                        <td>{{$commandeAFacturer->mpaiement}}</td>
                        <td>{{$commandeAFacturer->dateCommande}}</td>
                        <td>
                            <a href="">
                                @if ($commandeAFacturer->valClient === 0)
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
                        <td>
                            <a href="">
                                @if ($commandeAFacturer->validee === 0)
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
                        <td>
                            <a href="">
                                    <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                        @if ($commandeAFacturer->expediee === 0)
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                @else
                                    <svg style="color: green" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                @endif
                            </a>
                        </td>
                        <td>{{$commandeAFacturer->dateExpd}}</td>
                        <td>
                            <a href="">
                                @if ($commandeAFacturer->facturee === 0)
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
                        <td>{{$commandeAFacturer->nomPdf}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@stop
