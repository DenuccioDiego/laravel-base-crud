@extends('layouts.app')

@section('content')

<table class="table">
     <thead>
          <tr>
               <th>id</th>
               <th>title</th>
               <th>description</th>
               <th>thumb</th>
               <th>price</th>
               <th>series</th>
               <th>created_at</th>
               <th>update_at</th>
          </tr>
     </thead>
     <tbody>
          @foreach($comics as $comic)
          <tr>
               <td scope="row"></td>
               <td>{{ $comic->id }}</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
          </tr>
          @endforeach
     </tbody>
</table>


@endsection

