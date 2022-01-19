@extends('admin.layouts.app')

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
               <td>{{ $comic->id }}</td>
               <td>{{ $comic->title }}</td>
               <td>{{ $comic->description }}</td>
               <td>{{ $comic->thumb }}</td>
               <td>{{ $comic->price }}</td>
               <td>{{ $comic->series }}</td>
               <td>{{ $comic->created_at }}</td>
               <td>{{ $comic->updated_at }}</td>
          </tr>
          @endforeach
     </tbody>
</table>


@endsection

