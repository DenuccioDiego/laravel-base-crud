
<nav class="navbar navbar-expand navbar-light bg-light justify-content-center">

    <div class="nav navbar-nav w-100 justify-content-evenly">

        <a class="nav-item nav-link active" href="{{ route('home')}}">Modalità GUEST <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="{{ route('admin')}}">Home admin</a>
        <a class="btn btn-primary link" href="{{route('record.create')}}" role="button">Create</a>
        
    </div>

</nav>