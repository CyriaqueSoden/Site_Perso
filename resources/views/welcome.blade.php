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


    .strokeme {
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        width: 100%;
        word-wrap: break-word;
    }



    body {
        background-image: url("dogu.jpg");
        background-repeat: no-repeat;
        background-color: aquamarine;
        background-size: 100%;
        background-position: center;
        color: white;
        background-attachment: fixed;
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
