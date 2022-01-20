@extends('admin.layouts.app')

@section('content')
<div class="container">

     <h1 class="text-center">
          FORM PER LA MODIFICA DI UN RECORD
     </h1>

     <form action="{{ route('record.update', $comic->id) }}" method="post">
          @csrf
          @method('PUT')

          <div class="mb-3">
               <label for="title" class="form-label">Titolo</label>
               <input type="text" value="{{ $comic->title }}" name="title" id="title" class="form-control" placeholder="inserire titolo" aria-describedby="helpTitle" required>
               <small id="helpTitle" class="text-muted">max 250 caratteri</small>
          </div>

          <div class="mb-3">
               <label for="description" class="form-label">Descrizione</label>
               <textarea class="form-control" name="description" id="description" rows="5" placeholder="inserire descrizione fumetto">{{ $comic->description }}</textarea>
          </div>

          <div class="mb-3">
               <label for="thumb" class="form-label">Link immagine</label>
               <input type="url" value="{{ $comic->thumb }}" name="thumb" id="thumb" class="form-control" placeholder="inserire link immagine" aria-describedby="helpId">
               <small id="helpId" class="text-muted"></small>
          </div>

          <div class="mb-3">
               <label for="price" class="form-label">Prezzo</label>
               <input type="number" value="{{ $comic->price }}"
               class="form-control" name="price" id="price" aria-describedby="helpPrice" placeholder="inserire prezzo" required>
               <small id="helpPrice" class="form-text text-muted">only number</small>
          </div>

          <div class="mb-3">
               <label for="series" class="form-label">Series</label>
               <input type="text" value="{{ $comic->series }}"
               class="form-control" name="series" id="series" aria-describedby="helpPrice" placeholder="inserire serie">
               <small id="helpPrice" class="form-text text-muted">max 50 caratteri</small>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
     </form>
</div>     
@endsection