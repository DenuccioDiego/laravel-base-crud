@extends('admin.layouts.app')

@section('content')

     <h1 class="text-center">RECORD RICHIESTO/CREATO</h1>

<div class="container text-center">

     <h3>
          RECORD NUMERO <br>{{$comic->id}}
     </h3>

     <h4>
          TITOLO: <br> {{$comic->title}}
     </h4>
     
     <p>
          <h5> 
               DESCRIZIONE 
          </h5>
          {{$comic->description}}
     </p>

     <span>
          <h5>
               LINK IMMAGINE
          </h5>
          {{$comic->thumb}}
     </span>

     <span>
          <h5>
               PREZZO
          </h5>
          {{$comic->price}}
     </span>

     <span>
          <h5>SERIES</h5>
          {{$comic->series}}
     </span>
</div>
   


@endsection