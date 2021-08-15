@include('header')
    <div class="container">
        <h1>Usuarios</h1>
    <ul>
    @foreach ($users as $user)
        
        <li>{{ $user }}</li>
        
    @endforeach
    </ul>
    </div>
@include('footer')