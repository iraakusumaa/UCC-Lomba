@extends('layout.app')

@section('content')

<div class="jumbotron">
  <h3 class="display-4">Apakah Anda Yakin Ingin Menghapus Lomba "{{$lomba->nama}}" ??</h3>
  <p class="lead">
    <a class="btn btn-danger btn-lg" href="/lomba/{{$lomba->id}}/confirmDelete" role="button">IYA</a>
    <a class="btn btn-success btn-lg" href="/lomba" role="button">TIDAK</a>
  </p>
</div>

@endsection