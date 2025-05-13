<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Tâches</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2563eb;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
        }

        header img {
            height: 40px;
            margin-right: 15px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f9fafb;
        }

        a.button, form button {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a.button:hover, form button:hover {
            background-color: #1e40af;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .button.delete {
            background-color: #dc2626;
        }

        .button.delete:hover {
            background-color: #b91c1c;
        }

        .add-button {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>Mes Tâches</h1>
    </header>

    <div class="container">
        <a href="{{ route('tasks.create') }}" class="button add-button">+ Ajouter une tâche</a>

        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->created_at->format('d/m/Y H:i') }}</td>
                        <td class="actions">
                            <a href="{{ route('tasks.edit', $task) }}" class="button">Modifier</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Supprimer cette tâche ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button delete">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Aucune tâche enregistrée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
