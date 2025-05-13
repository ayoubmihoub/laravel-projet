@extends('layout')

@section('content')
<h4>Modifier la tâche</h4>
<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Titre</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Retour</a>
</form>
@endsection
