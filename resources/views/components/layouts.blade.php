<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1> Ninja Hatori</h1>
            <a href="/contact"> Contact</a>
            <a href="{{ route ('create') }}"> Create</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>