<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=Sono:wght@300&display=swap');

    .mid {
        justify-content: center;

    }

    body {
        background-color: aquamarine
    }

    h1 {
        font-family: 'Sono', sans-serif;
    }
</style>

<body>

    @livewire('page')


    @livewireScripts

</body>

</html>