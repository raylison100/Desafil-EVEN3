<template>
    <div class="row">
        <div class="form-group col-12" style="margin-top: 50px">
            <p class="text-center" style="font-size: 16px"><br>Saiba como e por que fazer crachás para eventos! <a
                    href="https://blog.even3.com.br/crachas-para-eventos-academicos/"> Clique aqui <br></a></p>
        </div>
        <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-xl-4">
                        <div class="box-title">
                            <span>1 - CRIAR MODELO</span>
                        </div>
                        <div class="card rounded " style="min-height: 50vh;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="card-body col-12">
                                        <input type="file" class="form-control-file border btn-sm"
                                               style="font-size: 12px;" @change="processFile" multiple>
                                    </div>
                                    <div class="card-body col-12">
                                        <div class="container-fluid">                                            
                                            <div class="row">                                            
                                                <div class="centralizar form-group col-12 col-xl-6">
                                                    <img id="image"
                                                        v-bind:src="image_src"
                                                        width="300px" height="400px"> 
                                                </div>                                                
                                                <div class="form-group col-12 col-xl-6">
                                                    <div class="centralizar form-group">
                                                        <button type="button" class="btn btn-success btn-sm col-8 col-xl-12">ADD
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
                    <div class=" form-group col-xl-8">
                        <div class="box-title">
                            <span>2 - IMPORTA PARTICIPANTES </span>
                        </div>
                        <div class="card rounded" style="min-height: 50vh;">
                            <div class="card-body ">
                                <textarea v-model="t_area" name="description"
                                          placeholder="Copie o conteudo da planilha do excel, incluido o cabecalho e cole aqui: "
                                          class="form-control" rows="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center col-12">
                        <div class="form-group">
                            <button type="submit" class="rounded btn btn-success btn-sm col-12 col-xl-2" v-on:click='teste'>BAIXAR
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
        name: "BedgeComponent",

        data() {    
            return{
                description: "Deu certo",
                t_area: "",
                image_src:"",
            }
        },
        methods:{
            teste(){
                alert(this.description)
            },
            processFile(e) {
                 const file = e.target.files[0];
                 this.image_src = URL.createObjectURL(file);
            }
        }
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
    .centralizar { 
        display:         flex;
        display: -webkit-flex;

        justify-content: center;
        align-items: center;
    }
</style>
