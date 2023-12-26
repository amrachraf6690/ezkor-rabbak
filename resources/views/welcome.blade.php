<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>و اذكر ربك</title>
    @livewireStyles

    <style>
        *{
            font-family: 'Noto Sans Arabic', sans-serif;
        }
        body {
            background: rgb(55,55,55);
            background: linear-gradient(142deg, rgba(55,55,55,1) 0%, rgba(66,107,199,1) 100%);
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .square {
            background-color: #3498db;
            width: 320px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .square h1 {
            font-size: 24px;
            color: white;
            margin: 0;
        }

        .square input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .btn-group {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <livewire:counter />


    @livewireScripts
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>
    