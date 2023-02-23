<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    @php
        echo "Current Url: ".url()->current();
        echo "<br>";
        echo "Full Url: ".url()->full();
        echo "<br>";
        echo "Previous Url: ".url()->previous();
        echo "<br>";
        echo "URLs For Named Routes: ".route('test');
    @endphp
</body>
</html>