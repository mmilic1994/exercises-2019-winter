<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actor-o-matic</title>

    <link rel="stylesheet" href="loader.css">

    <script src="workout.js"></script>
</head>
<body>

    <div class="loader hidden">
        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>

    <div id="page">
    
        <nav>
            <a href="/bruce-willis" data-id="22616">Bruce Willis</a>
            <a href="#anything" data-id="19302">Salma Hayek</a>
        </nav>

        <div class="main">
        
            <h1 class="name"></h1>

            <div class="movies-total">
                <h2>Movies total</h2>
                <div class="data"></div>
            </div>

            <div class="ratings">
                <h2>Movie ratings over time</h2>
                <div id="ratings-data" class="data"></div>
            </div>

            <div class="genres">
                <h2>Genres</h2>
                <div id="genres-data" class="data"></div>
            </div>

        </div>

    </div>

    <script src="functions.js"></script>
    <script>

function chartScriptsReady() {

    // call your functions here
    initialize_actors();

}

    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(() => { chartScriptsReady() });
    </script>
    
</body>
</html>