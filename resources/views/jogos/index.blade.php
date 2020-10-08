@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Jogos</h2>
        </div>
    </div>
</div>

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success')}}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger">
    {{ session('error')}}
  </div>
@endif



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th>Author</th>
    </tr>
  </thead>

  
  <tbody>
    @foreach($jogos as $jogo)

    <tr>
      <th scope="row">{{$jogo->id}}</th>
      <td>
      <a href="{{ url("/jogos/{$jogo->id}") }}">
        {{$jogo->titulo}}
      </a>
      <td>{{ $jogo->user->name }}</td>
      </td>

      <td>
      <form action="{{route('jogos.destroy', $jogo->id)}}" method="POST">
        <a class="btn btn-info" href="{{route('jogos.show', $jogo->id)}}">Visualizar
        </a>
        <a class="btn btn-info" href="{{route('jogos.edit', $jogo->id)}}">Editar
        </a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>

      </form>
      </td>
    
    
    </tr>
    @endforeach
    
  </tbody>
</table>

{{$jogos->links()}}


@endsection