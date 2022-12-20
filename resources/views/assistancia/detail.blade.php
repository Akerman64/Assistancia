@extends('user.template')
@section('bouton')
<a href="{{ route('assisHome')}}" class="get-started-btn scrollto" style="margin-right: 270px">Get Started</a>
@endsection
@section('title',"Détail des demandes")
@section('headertitle', "Détails de toutes les demandes avec leurs aadministrateurs")
@section('body')
  <table class="table table-bordered table-striped table-hover" style="padding-top: 50px">
    <thead>
      <tr class="tye">
          <th scope="col"> Id du Client </th>
          <th scope="col"> Demande </th>
          <th scope="col"> Statut </th>
          <th scope="col"> Nom Admin </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($details as $product )
        <tr>
            <td scope="row"> {{ $product->user_id }} </td>
            <td> {{ $product->demande }} </td>
            <td> {{ $product->status }}</td>
            <td>{{ $product->nom_admin }} </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
