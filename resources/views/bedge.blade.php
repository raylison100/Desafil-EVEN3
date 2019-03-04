<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Modelagem de Crachar</title>
        <style scoped>
             .to-fix-footer {
            bottom: 0;
            position: fixed;
            width: 100%;
            text-align: center;
            padding: 0;
            }
        </style>
    </head>
    <body class="bg-light">
        <nav class="bg-dark text-center text-white" style="margin-bottom:0; padding: 10px;">
            <div class="container">
                <div class="navbar-header">
                    <h1>Criacao de Crachas</h1>
                </div>
            </div>
        </nav>
        <div id="app" class="container-fluid form-group">
            <bedge-component></bedge-component>
        </div>
        <footer class="footer bg-info text-center to-fix-footer text-warning">
            <div class="container">
                <p>By Raylison Nunes dos Santos.</p>
            </div>
        </footer>
        <script src="../js/app.js"></script>
    </body>
</html>
