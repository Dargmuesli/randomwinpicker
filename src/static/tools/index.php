<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Helper - RandomWinPicker
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="./layout/extension/loading.css">
        <link rel="stylesheet" href="/resources/dargmuesli/base/style.min.css">
        <link rel="icon" href="/resources/dargmuesli/icons/favicon.ico" type="image/x-icon" />
        <script src="./layout/extension/extension.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <h1>
            File Conversion
        </h1>
        <p>
            Convert an ISO-8859-1 .csv-file to UTF-8.
        </p>
        <form enctype="multipart/form-data" action="#" method="post">
            <input type="file" id="fileselect" accept=".csv" name="files">
        </form>
        <div class="wrap">
            <div class="bg">
                <div class="loading">
                    <span class="title">Testing Area</span>
                    <span class="text">Random Win Picker</span>
                </div>
            </div>
        </div>
        <h1>
            Fonts
        </h1>
        <p>
            Overview of available fonts:
        </p>
        <p>
            <span class="opensans">OpenSans</span>
            <br>
            <span class="bangers">Bangers</span>
            <br>
            <span class="inconsolata">Inconsolata</span>
            <br>
            <span class="neorf">Neorf</span>
        </p>
        <h1>
            Titles
        </h1>
        <p>
            Get stash's item website titles.
        </p>
        <form>
            Start index <input id="start_title" min="0" name="start" required title="Start index." type="number" value="0">
            End index <input id="end_title" min="0" name="end" required title="End index." type="number" value="0">
            <button type="button" id="btn_title">Go!</button>
        </form>
        <p id="title">
        </p>
        <h1>
            JSON
        </h1>
        <p>
            Retrieve detailed json data from stash and write it to files.
        </p>
        <form>
            Start index <input id="start_json" min="0" name="start" required title="Start index." type="number" value="0">
            End index <input id="end_json" min="0" name="end" required title="End index." type="number" value="0">
            <button type="button" id="btn_json">Go!</button>
        </form>
        <p id="json">
        </p>
        <h1>
            CSS3 Transforms
        </h1>
        <p>
            Testing different rotation animations.
        </p>
        <div id="container">
            <div id="card" class="shadow">
                <div class="front face">
                    Testing Area
                </div>
            </div>
        </div>
    </body>
</html>
