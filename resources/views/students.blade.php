@include('app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>
<body class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($data as $row)
                @php echo '<pre>'; print_r($row); @endphp
            @endforeach
        </div>
    </div>
</body>
</html>
