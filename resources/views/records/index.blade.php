<!DOCTYPE html>
<head>
    @vite(['resources/sass/app.scss'])
    <title>Record Collection</title>
</head>

<body>
    <div class="d-flex flex-wrap">
    @foreach ($recordsData['results'] as $result)
        <div class="book-container mb-4">
            <div class="book">
                <img src="{{ $result['thumb'] }}"/>
            </div>
        </div>
    @endforeach
    </div>
</body>
</html>
