@extends('layout.app')



@section('navbar')

 <!-- Start Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="#">Opus Nusantara</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav ml-auto">
     <!-- <li class="nav-item active">
       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
     </li> -->
     <li class="nav-item">
       <a class="nav-link" href="#">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Daftar Lombaku</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Pengumuman</a>
     </li>
     <li class="nav-item">
       <a class="nav-link btn btn-success" href="login">SignIn</a>
     </li>
     <li class="nav-item">
       <a class="nav-link btn btn-warning" href="register">SignUp</a>
     </li>
   </ul>
 </div>
</nav>
<!--   End Navbar   -->

@endsection

@section('content')

<a href="/lomba/add">
  <button class="btn btn-success">Tambah Daftar Lomba</button>
</a>
<table class="table">...
</table>



<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Poster</th>
      <th scope="col">Berlaku</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $lombas= \App\Lomba::get();
    ?>

      @for($i = 0; $i<sizeof($lombas); $i++)
      <tr>
        <th scope="row">{{$i}}</th>
        <td>
            <a href="/lomba/{{$lombas[$i]->id}}">
            {{$lombas[$i]->nama}}
            </a>
        </td>
        <td>{{$lombas[$i]->deskripsi}}</td>
        <td>
          <img height="100" src="{{$lombas[$i]->poster}}"/>
        </td>
        <td>{{$lombas[$i]->tanggal_tutup}}</td>
        <td>
          <a href="/lomba/{{$lombas[$i]->id}}/edit">
            <button type="button" class="btn btn-info">Edit</button>
          </a>
          <a href="/lomba/{{$lombas[$i]->id}}/delete">
            <button type="button" class="btn btn-danger">Delete</button>
          </a>
        </td>
      </tr> 

      @endfor 
     
    
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>

@endsection

@section('footer')

<!-- As a link -->
<div class="bg-dark'">
  <p class="text-center" >&copy;Copyright OPUS NUSANTARA 2018</p>
</div>


@endsection