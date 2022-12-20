@extends('user.template')
@section('bouton')
<a href="{{ route('assisHome')}}" class="get-started-btn scrollto" style="margin-right: 270px">Get Started</a>
@endsection
<div style="margin-top: 45px">
  @section('title',"TABLEAU DE BORD D'ASSISTANCIA")
</div>
@section('headertitle', "Nombre de demandes")
@section('body')
    <table class="table table-bordered table-striped table-hover " >
      <thead>
          <tr class="tye">
              <th scope="col">N°Id</th>
              <th scope="col">Nom Admin</th>
              <th scope="col">Rejetée,</th>
              <th scope="col">En attente</th>
              <th scope="col"> En cours de traitement</th>
              <th scope="col">Traitée </th>
          </tr>
      </thead>
      <tbody>
          @foreach ($data as $demande)

          <tr class="">
              <td scope="row">{{$loop->index+1}}</td>
              <td>{{ $demande->name }}</td>
              <td>{{DB::table('demandes')->where('status','Rejetée')->where('nom_admin',$demande->name)->count()}}</td>
              <td>
                  {{DB::table('demandes')->where('status','En attente')->count()}}


              </td>
              <td>
                  {{DB::table('demandes')->where('status','En cours de traitement')->where('nom_admin',$demande->name)->count()}}


              </td>
              <td>
                  {{DB::table('demandes')->where('status','Traitée')->where('nom_admin',$demande->name)->count()}}


              </td>

          @endforeach
          <tr >
            <td colspan="2" style="font-weight: bold; font-size:20px; background-color: grey; color:white">Total</td>
            <td>{{ $totalRejet }}</td>
            <td>{{ $totalAttente }}</td>
            <td>{{ $totalEncours }}</td>
            <td>{{ $totalTraite }}</td>
          </tr>
      </tbody>
    </table>

@endsection


