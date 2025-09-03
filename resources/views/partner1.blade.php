<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partener</title>
</head>
<body>
    <a href="/">Home Page</a>
    <a href="/contact">About</a>
    <a href="/partner">About</a>
    <a href="/partner/{{ $partner[0]["id"] }}"><h1>{{ $partner[0]["name"] }}</h1></a>
    <li>{{ $partner[0]["skill"] }}</li>

    <a href="/partner/{{ $partner[1]["id"] }}"><h1>{{ $partner[1]["name"] }}</h1></a>
    <li>{{ $partner[1]["skill"] }}</li>
</body>
</html>