@extends('admin.layouts.app')

@section('content')

<div class="container">
     <h1 class="text-center">
          FORM PER LA CREAZIONE DI UN NUOVO RECORD
     </h1>

     <form action="{{ route('record.store')}}" method="post">
          @csrf
          <div class="mb-3">
               <label for="title" class="form-label">Titolo</label>
               <input type="text" name="title" id="title" class="form-control" placeholder="inserire titolo" aria-describedby="helpTitle">
               <small id="helpTitle" class="text-muted">max 250 caratteri</small>
          </div>

          <div class="mb-3">
               <label for="description" class="form-label">Descrizione</label>
               <textarea class="form-control" name="description" id="description" rows="5" placeholder="inserire descrizione fumetto"></textarea>
          </div>

          <div class="mb-3">
               <label for="thumb" class="form-label">Link immagine</label>
               <input type="url" name="thumb" id="thumb" class="form-control" placeholder="inserire link immagine" aria-describedby="helpId">
               <small id="helpId" class="text-muted"></small>
          </div>

          <div class="mb-3">
               <label for="price" class="form-label">Prezzo</label>
               <input type="number"
               class="form-control" name="price" id="price" aria-describedby="helpPrice" placeholder="inserire prezzo">
               <small id="helpPrice" class="form-text text-muted">only number</small>
          </div>

          <div class="mb-3">
               <label for="series" class="form-label">Series</label>
               <input type="text"
               class="form-control" name="series" id="series" aria-describedby="helpPrice" placeholder="inserire serie">
               <small id="helpPrice" class="form-text text-muted">max 50 caratteri</small>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>

     </form>

</div>

@endsection

