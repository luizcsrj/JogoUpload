@extends('layouts.app')
@section('content')

@if ($errors->any())
<div clas="alert alert-danger">
    <strong>OPS!</strong>Ouve um problema<br><br>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create a new Game</h2>
        </div>
    </div>
</div>

<form action="{{ route('jogos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
                <div class="form-group">
                <strong>Título:</strong>
                <input type="text" name="titulo" class="form-control">
                </div>
         </div>
     </div>

     <div class="row">
        <div class="col">
                <div class="form-group">
                <strong>Descrição:</strong>
                <textarea  name="letra" class="form-control"> </textarea>
                </div>
         </div>
     </div>
     
     <div class="row">
        <div class="col">
                <div class="form-group">
                <strong>Preço:</strong>
                <input type="number" name="preco" class="form-control">
                </div>
         </div>
     </div>
     
     <div class="row">
        <div class="col">
                <div class="form-group">
                <strong>Avaliação:</strong>
                <input type="number" name="avaliacao" class="form-control">
                </div>
         </div>
     </div>

     <div class="row">
        <div class="col">
                <div class="form-group">
                <strong>Usabilidade:</strong>
                <input type="number" name="usabilidade" class="form-control">
                </div>
         </div>
     </div>

     <div class="row">
        <div class="col">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input id="image" type="file" name="image" class="form-control">
                </div>
         </div>
     </div>

     <div class="row">
        <div class="col text-center">
                
                <button type="submit" class="btn col btn-primary">CREATE</button>
                
         </div>
     </div>

     

</form>


@endsection