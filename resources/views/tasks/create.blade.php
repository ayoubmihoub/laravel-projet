@extends('layout')

@section('content')
<h4>Ajouter une tâche</h4>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Titre</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Ajouter</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Retour</a>
</form>
@endsection
