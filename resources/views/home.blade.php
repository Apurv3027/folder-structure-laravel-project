<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @isset($name)
        Welcome, {{$name ?? "Guest"}}.
    @endisset
    <br>
    <h1>Condition:</h1>
    @if ($name == "")
        {{ "Name is empty" }}
    @elseif ($name == "Admin")
        {{ "Name is Admin" }}
    @else
        {{ "Name is not Admin" }}
    @endif
    <br>
    <h1>For Loop:</h1>
    @for ($i = 1; $i<5; $i++)
        <h2 class="Hello">
            {{ $i }}
        </h2>
    @endfor
    <br>
    <h1>While Loop:</h1>
    @php
        $i=1;
    @endphp
    <?php
        $i = 1;
    ?>
    @while ($i<=5)
        <h2>
            {{ $i }}
        </h2>
        @php
            $i++;
        @endphp
    @endwhile

</body>
</html>