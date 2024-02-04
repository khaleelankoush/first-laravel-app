<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($value > 20)
        <div style="background: orange">
            <h1>Value is greater than 20</h1>
        </div>
    @elseif ($value > 10)
        <div style="background: green">
            <h1>Value is greater than 10</h1>
        </div>
    @else
        <div style="background: red">
            <h1>Value is less than or equal 10</h1>
        </div>
    @endif
    <h1>Hello, {{ $renderedName }}</h1>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. A fugit totam nam eum tenetur maiores enim est,
        eligendi distinctio nisi incidunt praesentium aliquam, voluptate modi consectetur labore. Quod, quia eaque.
    </p>

    <div style="background: orange; padding: 10px; border-radius: 10px; display: flex; justify-content: space-between">
        @foreach ($students as $s)
            <h1>{{ $s }}</h1>
        @endforeach
    </div>
</body>

</html>
