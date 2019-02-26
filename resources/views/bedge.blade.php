<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Modelagem de Crachar</title>
        <style>
            .box-title{
                font-size: 18px;
                color: #a1cbef;
                padding: 10px;
                width: 300px;
                height: 50px;
            }
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
        <div class="container-fluid">
            <div class="row">
                <div class="form-group col-12" style="margin-top: 50px">
                    <p class="text-center" style="font-size: 16px"><br>Saiba como e por que fazer crachás para eventos! <a href="https://blog.even3.com.br/crachas-para-eventos-academicos/"> Clique aqui <br></a></p>
                </div>
                <div class="form-group  col-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-12 col-md-4">
                                <div class="box-title">
                                    <span>1 - CRIAR MODELO</span>
                                </div>
                                <div class="card rounded " style="min-height: 50vh;">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="card-body col-12">
                                                <input type="file" class="form-control-file border btn-sm" style="font-size: 12px;">
                                            </div>
                                            <div class="card-body col-12" >
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="form-group col-12 col-md-6">
                                                            <img id="image" src="https://img.elo7.com.br/product/zoom/1E1459C/cracha-identificacao.jpg" width="200px" height="300px">
<!--                                                            <label id="texto">Meu nome</label>-->
                                                        </div >
                                                        <div class="form-group col-12 col-md-6">
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-success btn-sm col-12">ADD TAG</button>
                                                            </div>
                                                            <div class="form-group">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=" form-group col-12 col-md-8">
                                <div class="box-title">
                                    <span >2 - IMPORTA PARTICIPANTES </span>
                                </div>
                                <div class="card rounded" style="min-height: 50vh;">
                                    <div class="card-body ">
                                        <textarea id="planilha" name="description" placeholder="Copie o conteudo da planilha do excel, incluido o cabecalho e cole aqui: " class="form-control" rows="16"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center col-12">
                                <div class="form-group">
                                    <button type="submit" class="rounded btn btn-success btn-sm col-12 col-md-2">BAIXAR CRACHAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer bg-info text-center to-fix-footer text-warning">
            <div class="container">
                <p>By Raylison Nunes dos Santos.</p>
            </div>
        </footer>
        <script src="../js/app.js"></script>
    </body>
</html>
