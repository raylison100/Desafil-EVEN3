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
                                                    <img id="image"
                                                            v-bind:src="image_src"
                                                            width="300px" height="400px">   
                                                    <span v-for="(tag , index ) in tags" :key="tag.id" :style="tag_style[index]" >{{tag.value}}</span>                                                                                                                                                             
                                                </div>                                                
                                                <div class="form-group col-12 col-xl-7">
                                                    <div class="centralizar form-group">
                                                        <button type="button" v-on:click='addTags' class="btn btn-success btn-sm col-8 col-xl-12">ADD
                                                            TAG
                                                        </button>
                                                    </div>
                                                    <div class="form-group col 12" v-for="(tag,index) in tags" :key="tag.id">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label>TAG</label>
                                                                <input type="text" class="form-control" v-model="tag.value">
                                                            </div>
                                                            <div class=" col-3">
                                                                <label>FONTE</label>
                                                                <select class="form-control"  v-model="selectFonte" @change="addFonte(index)">
                                                                    <option v-for="fonte in fontes" :key="fonte.id"  :value="fonte.value">{{fonte.fonte}}</option>                                                                                            
                                                                </select>
                                                            </div>
                                                            <div class=" col-3">
                                                                <label>SIZE</label>
                                                                <select class="form-control" v-model="selectSize" @change="addSize(index)"> 
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
                image_src: "",
                selectFonte: "",
                selectSize: "",
                tags: [ ],
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
                    {   
                        "value" :'17px',
                        "size"  : 17 
                    }, 
                    {   
                        "value" :'18px',
                        "size"  : 18 
                    }, 
                    {   
                        "value" :'19px',
                        "size"  : 19 
                    }, 
                    {   
                        "value" :'20px',
                        "size"  : 20 
                    }, 
                    {   
                        "value" :'21px',
                        "size"  : 21 
                    }, 
                    {   
                        "value" :'22px',
                        "size"  : 22 
                    }, 
                    {   
                        "value" :'23px',
                        "size"  : 23 
                    },
                    {   
                        "value" :'24px',
                        "size"  : 24 
                    },   
                    {   
                        "value" :'25px',
                        "size"  : 25 
                    },   
                    {   
                        "value" :'26px',
                        "size"  : 26 
                    },   
                    {   
                        "value" :'27px',
                        "size"  : 27 
                    },   
                    {   
                        "value" :'28px',
                        "size"  : 28 
                    },   
                    {   
                        "value" :'29px',
                        "size"  : 29 
                    },   
                    {   
                        "value" :'30px',
                        "size"  : 30 
                    },   
                    {   
                        "value" :'31px',
                        "size"  : 31 
                    },   
                    {   
                        "value" :'32px',
                        "size"  : 32 
                    },   
                    {   
                        "value" :'33px',
                        "size"  : 33 
                    },   
                    {   
                        "value" :'34px',
                        "size"  : 34 
                    },   
                    {   
                        "value" :'35px',
                        "size"  : 35 
                    },   
                    {   
                        "value" :'36px',
                        "size"  : 36 
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
                tag_style: [],
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
                        [
                            {"font-size"  : '23px'},
                            {"font-style"  : 'normal'},
                        ]                        
                    );
                }                    
                else
                    alert("numero maximo de tags");
            },
             rmTags(id) {
                this.tags.pop(id) ,
                this.tag_style.pop(id)              
            },
            addSize(id){
                this.tag_style[id][0] = {'font-size' : this.selectSize};
            },
            addFonte(id){
                if(this.selectFonte == 'bold')
                    this.tag_style[id][1] = {'font-weight' : this.selectFonte};
                else
                    this.tag_style[id][1] = {'font-style' : this.selectFonte};
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
        display:  flex;
        display: -webkit-flex;

        justify-content: center;
        align-items: center;
    }
</style>
