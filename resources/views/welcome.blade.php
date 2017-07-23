@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">

    <h1 class="h1">Laravel</h1>

    <nav>
    	<ul class="nav nav-pills">
	    	<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
    	</ul>
    </nav>
</div>

<div class="row">
    @forelse($messages as $message)
    	<div class="col-md-6">
    		<img class="img-thumbnail" src="{{ $message['image'] }}">
    		<p class="card-text">{{ $message['content'] }}
	    		<a href="/messages/{{ $message['id'] }}">Leer más</a>
    		</p>
    	</div>
	@empty
		<p>No hay Mensajes en este momento!</p>
    @endforelse

</div>


@endsection