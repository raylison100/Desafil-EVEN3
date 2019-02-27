<template>
    <div class="row">
        <div class="form-group col-12" style="margin-top: 50px">
            <p class="text-center" style="font-size: 16px"><br>Saiba como e por que fazer crachás para eventos! <a
                    href="https://blog.even3.com.br/crachas-para-eventos-academicos/"> Clique aqui <br></a></p>
        </div>
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
                                        <input type="file" class="form-control-file border btn-sm"
                                               style="font-size: 12px;">
                                    </div>
                                    <div class="card-body col-12">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="form-group col-12 col-md-6">
                                                    <!-- <img id="image"
                                                         src="https://img.elo7.com.br/product/zoom/1E1459C/cracha-identificacao.jpg"
                                                         width="200px" height="300px">
                                                    <label id="texto">Meu nome</label> -->
                                                </div>
                                                <div class="form-group col-12 col-md-6">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-success btn-sm col-12">ADD
                                                            TAG
                                                        </button>
                                                    </div>
                                                    <div id="app" class="form-group">

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
                            <span>2 - IMPORTA PARTICIPANTES </span>
                        </div>
                        <div class="card rounded" style="min-height: 50vh;">
                            <div class="card-body ">
                                <textarea id="planilha" name="description"
                                          placeholder="Copie o conteudo da planilha do excel, incluido o cabecalho e cole aqui: "
                                          class="form-control" rows="16"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center col-12">
                        <div class="form-group">
                            <button type="submit" class="rounded btn btn-success btn-sm col-12 col-md-2">BAIXAR
                                CRACHAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        name: "BedgeComponent"
    }
</script>

<style scoped>
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
