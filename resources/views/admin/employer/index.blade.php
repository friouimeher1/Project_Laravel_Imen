@extends('admin.layout.auth')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md col-lg-6">
      <div class="panel panel-danger">
        <div class="panel-heading">
          Toutes les employers
        </div>
        <div class="panel-body">
        @foreach($employer as $e)
        Nom :{{$e->name}}<br>
        Prénom :{{$e->prenom}}<br>
        Téléphone :{{$e->tele}}<br>
        Matricule :{{$e->mat}}<br>
        CIN :{{$e->cin}}
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>


@stop
