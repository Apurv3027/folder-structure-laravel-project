<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <center>
        <h1>Hello {{ $name }}!</h1>
        <h1>Hello, {!! $name !!}.</h1>
        <h2>The current UNIX timestamp is {{ time() }}.</h2>
        @unless (Auth::check())
            You are not signed in.
        @endunless

        <button type="submit" @disabled($errors->isNotEmpty())>Submit</button>
        <br>
        @php
            echo "Current Url: ".url()->current();
            echo "<br>";
            echo "Full Url: ".url()->full();
            echo "<br>";
            echo "Previous Url: ".url()->previous();
        @endphp

    </center>
</body>
</html>