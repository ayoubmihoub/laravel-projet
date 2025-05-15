<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            filter: blur(8px);
            z-index: -1;
        }

        .content {
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
            text-shadow: 2px 2px 4px #000;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        a.button {
            background-color: #2563eb;
            color: white;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: bounce 1.5s infinite;
        }

        a.button:hover {
            background-color: #1e40af;
            transform: scale(1.05);
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-6px);
            }
        }
    </style>
</head>
<body>
    <div class="background"></div>

    <div class="content">
        <h1>Bienvenue sur Mon Application</h1>
        <p>Gérez facilement vos tâches du quotidien en quelques clics.<br>
        Une application simple, rapide et efficace pour rester organisé.</p>
        <a href="{{ route('tasks.index') }}" class="button">Get Started</a>
    </div>
</body>
</html>
