<style>
    .tr1{
        background-color: grey;
    }

    .tr1 th{
        color: white;
        font-weight: bold;
        font-size: 25px
    }
</style>
@extends('user.template')
@section('bouton')
<a href="{{ route('adminHome')}}" class="get-started-btn scrollto" style="margin-right: 270px">Get Started</a>
@endsection
<div style="padding-top: 75px">@section('title',"TABLEAU DE BORD DE L'ADMINISTRATEUR")</div>
@section('headertitle', "Nombre de demandes")
@section('body')
<table class="table table-bordered table-striped table-hover" style="padding-top: 50px; height:100px">
    <thead>
        <tr class="tr1">
            <th scope="col">N° id</th>
            <th scope="col">Nom Admin</th>
            <th scope="col">Rejetée,</th>
            <th scope="col">En attente</th>
            <th scope="col">Traitée</th>

        </tr>
    </thead>
    <tbody >
        <tr>
          <td scope="row">{{$id}}</td>
          <td>{{$nom}}</td>
          <td>{{$rejet}}</td>
          <td>{{$attente}}</td>
          <td>{{$traite}}</td>
        </tr>
      </tbody>
</table>
@endsection
