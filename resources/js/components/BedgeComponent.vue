<template>
    <div class="row">
        <div class="form-group col-12" style="margin-top: 50px">
            <p class="text-center" style="font-size: 16px"><br>Saiba como e por que fazer crachás para eventos! <a
                    href="https://blog.even3.com.br/crachas-para-eventos-academicos/"> Clique aqui <br></a></p>
        </div>
        <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-xl-6">
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
                                                <div class="centralizar form-group col-12 col-xl-5">    
                                                    <span v-for="tag in tags" :key="tag.id" >{{tag.value}}</span>
                                                    <img id="image"
                                                            v-bind:src="image_src"
                                                            width="300px" height="400px">                                                                                                                                                                
                                                </div>                                                
                                                <div class="form-group col-12 col-xl-7">
                                                    <div class="centralizar form-group">
                                                        <button type="button" v-on:click='addTags' class="btn btn-success btn-sm col-8 col-xl-12">ADD
                                                            TAG
                                                        </button>
                                                    </div>
                                                    <div class="form-group col 12" v-for="tag in tags" :key="tag.id">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label>TAG</label>
                                                                <input type="text" class="form-control" v-model="tag.value">
                                                            </div>
                                                            <div class=" col-3">
                                                                <label>FONTE</label>
                                                                <select class="form-control"  v-model="selectFonte">
                                                                    <option v-for="fonte in fontes" :key="fonte.id"  :value="fonte.value">{{fonte.fonte}}</option>                                                                                            
                                                                </select>
                                                            </div>
                                                            <div class=" col-3">
                                                                <label>SIZE</label>
                                                                <select class="form-control" v-model="selectSize">
                                                                    <option v-for="size in sizes" :key="size.id" :value="size.value">{{size.size}}</option>                                                              
                                                                </select>
                                                            </div>
                                                            <div class=" col-2">
                                                                <label style="font-size: 10px">POSICAO EX. 1X1</label>
                                                                <input type="text" class="form-control">                                                 
                                                            </div>
                                                            <div class=" col-1">                                                         
                                                                <button class="form-group btn btn-danger btn-sm" v-on:click='rmTags(tag.id)'>x</button>                                                   
                                                            </div>
                                                        </div>                            
                                                    </div>
                                                </div>                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" form-group col-xl-6">
                        <div class="box-title">
                            <span>2 - IMPORTA PARTICIPANTES </span>
                        </div>
                        <div class="card rounded" style="min-height: 50vh;">
                            <div class="card-body ">
                                <textarea v-model="t_area"
                                          placeholder="Copie o conteudo da planilha do excel, incluido o cabecalho e cole aqui: "
                                          class="form-control" rows="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center col-12">
                        <div class="form-group">
                            <button type="submit" class="rounded btn btn-success btn-sm col-12 col-xl-2" v-on:click='addTArea'>BAIXAR
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
                t_area: "",
                image_src:"",
                selectFonte:"",
                selectSize:"",
                tags: [],
                sizes:[
                    {   
                        "value" :'12px',
                        "size"  : 12 
                    },
                    {   
                        "value" :'13px',
                        "size"  : 13 
                    },
                    {   
                        "value" :'14px',
                        "size"  : 14 
                    },
                    {   
                        "value" :'15px',
                        "size"  : 15 
                    },
                    {   
                        "value" :'16px',
                        "size"  : 16 
                    },                
                ],
                fontes:[
                    {   
                        "value" : 'normal',
                        "fonte"  : 'normal'
                    },
                    {   
                        "value" : 'bold',
                        "fonte"  : 'negrito'
                    },
                    {   
                        "value" : 'italic',
                        "fonte"  : 'itálico'
                    },
                ],
                tag_style: [
                    {'fonte_size' : selectSize},
                    {'font_style' : selectFonte}, 
                    {'width'      : ''},
                    {'height'     : ''},
                ],

            }
        },
        methods:{
            addTArea(){
                
            },
            processFile(e) {
                 const file = e.target.files[0];
                 this.image_src = URL.createObjectURL(file);
            },
            addTags() {
                if(this.tags.length < 4)
                {
                    this.tags.push({value: ''});
                    this.tag_style.push(
                        {'fonte_size' : ''},
                        {'font_style' : ''}, 
                        {'width'      : ''},
                        {'height'     : ''});
                }                    
                else
                    alert("numero maximo de tags")
            },
             rmTags(id) {
                this.tags.pop(id) ,
                this.tag_style.pop(id)              
            },
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
        display:  flex;
        display: -webkit-flex;

        justify-content: center;
        align-items: center;
    }
</style>
