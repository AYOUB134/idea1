<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Landing</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #2d3748;
        }

        .container {
            text-align: center;
            max-width: 600px;
            padding: 2rem;
            background: #ffffffdd;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #4a5568;
        }

        a.button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            background-color: #3182ce;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #2b6cb0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Laravel 🚀</h1>
        <p>Your application is live on Hostinger! Make your first move now.</p>
        <a href="{{ url('/') }}" class="button">Get Started</a>
    </div>
</body>
</html>
