@extends('layouts.app')

@section('content')

    C'est la page générale du site,
    <br />
    on doit y voir les histoires.


@endsection




<html>
<head>
    <title>Liste des Séries</title>
</head>
<body>


<h2>Séries</h2>

@if(!empty($series))

    <div>
        <table>
            <th>Nom</th>
            <th>Resume</th>
            <th>Langue</th>
            <th>Note</th>
            <th>Premiere</th>
            <th>Avis</th>
            <th>Image</th>


            @foreach($series as $serie)
            <tr>

                <td>{{$serie -> nom}}</td>
                <td>{{$serie -> resume}}</td>
                <td>{{$serie -> langue}}</td>
                <td>{{$serie -> note}}</td>
                <td>{{$serie -> premiere}}</td>
                <td>{{$serie -> avis}}</td>
                <td><a href={{url('series/'.$serie->id)}}> <img src={{$serie->urlImage}} > </a> </td>
            </tr>
                @endforeach

        </table>
    </div>

@else

    <h3>Aucune Séries</h3>

@endif

</body>
</html>






<style>
    table {
        border-collapse: collapse;

    }

    table, th, tr, td {
        border: 1px solid black;
        padding-left: 10px;
        padding-bottom: 10px;
        padding-top: 10px;
        padding-right: 10px ;
    }

    table th{
        background-color: brown;

    }


    h3{
        margin: 2%;
        font-size: 20px;
        padding-bottom: 0;
    }


    table tr, td{
        background-color: cornsilk;
    }



    ul{
        list-style: none;
        padding: 1%;
        padding-top: 0;
    }


    li{
        padding: 1%;
        font-weight: bold;
    }


    span{
        padding: 0.2%;
        margin-left: 0.5%;
        display: block;
        font-weight: normal;
    }


    .styled {
        border: 0;
        line-height: 2.5;
        padding: 0 20px;
        font-size: 1rem;
        text-align: center;
        color: #fff;
        text-shadow: 1px 1px 1px #000;
        border-radius: 10px;
        background-color: rgba(220, 0, 0, 1);
        background-image: linear-gradient(to top left,
        rgba(0, 0, 0, .2),
        rgba(0, 0, 0, .2) 30%,
        rgba(0, 0, 0, 0));
        box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
        inset -2px -2px 3px rgba(0, 0, 0, .6);
    }

    .styled:hover {
        background-color: rgba(255, 0, 0, 1);
    }

    .styled:active {
        box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
        inset 2px 2px 3px rgba(0, 0, 0, .6);
    }


</style>