<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title }} - CMSO</title>
    {{-- Basic styling placeholder --}}
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $page->title }}</h1>
        <div>
            {!! $page->content !!} {{-- Use {!! !!} to render HTML content --}}
        </div>
        <hr>
        <p><a href="{{ url('/') }}">Back to Home (Placeholder)</a></p>
    </div>
</body>
</html>
