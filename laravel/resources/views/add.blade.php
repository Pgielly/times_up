@extends('layouts.base')
{{-- @section('css', '/css/panel.css') --}}
@section('css', '/css/add.css')
@section('title','Ajout')


@section('content')


<form method="post"action="/login">
    <h1>Ajouter une cartes</h1>
    @csrf
    <div>
        <label for="name">Le nom de la carte :</label>
        <input class="input" type="text" name="name" id="" value="Test" placeholder="Titre">
    </div>
    <input type="hidden" name="value" value="addOne">
    <button type="submit">Ajouter!</button>
</form>

@endsection