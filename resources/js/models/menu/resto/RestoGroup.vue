<template>
<div class="resto-group__wrapper mb-5">
    <div class="row center">
    <div class="col-md-4 mb-4" v-for="resto in localRestos" :key="resto.id" >
        <card-component>
            <template slot="title">{{resto.name}}      </template>
            <template slot="body">{{resto.location}}   
                <br>
                {{ resto.tables }}
                <br>
                <a v-bind:href="resto.slug">Show Menus</a> 
                 <a v-bind:href="resto.orderslug">Show Orders</a>

                   </template>
        </card-component>

    </div>

    <div class="col-md-4 mb-4"  v-if="showAddForm" >
        <card-component>
            <template slot="title">Add New Resturant  </template>
            <template slot="body"><button v-on:click="showAddModal">+</button>  </template>
        </card-component>
   
        <modal name='add-new-resto' height="52%">
          <div class="container-padding">
                  <div  >
                    <h3>Add New Returant  </h3>
                    <div  >
                    <div class="form-group">
                        <label for="ResturantName">Resturant Name</label>
                        <input type="text" class="form-control" id="ResturantName" 
                        v-model="newresto.name"
                        
                        placeholder="Enter Resturant Name">
                    </div>

                        <div class="form-group">
                        <label for="Location">Resturant Address</label>
                        <input type="text" class="form-control" 
                        v-model="newresto.address"
                         
                        id="location"   placeholder="Enter Resturant Location ">
                            </div>

                    <div class="form-group">
                        <label for="Tables">Tables</label>
                        <input type="number" 
                        v-model="newresto.tables"
                        class="form-control" id="Tables"   placeholder="Enter Resturant Tables ">
                    </div>

            <div class="form-group">
                <button @click="handleformSubmit" class="btn btn-primary">Add</button>
                <button v-on:click="hideAddModal" class="btn btn-danger">Close</button>
            </div>
   
 
</div>
        
        
        </div>
            </div>
        </modal>
        
    </div> 
 </div>
</div>
</template>

<script>
import RestoAddForm from './RestoAddForm';
import axios from 'axios';
export default {
            props:['restos'],
            components:{
                RestoAddForm
            },
            data() {
                return {
                    newresto: this.emptyResto(),
                    localRestos: this.restos
                }
            },
            computed:{
                showAddForm : function(){
                    return this.localRestos.length  <  10 ? true : false ;
                }
            },
            methods:{
                handleformSubmit: function () {
                    console.log(this.newresto);
                    axios.post('api/resto/save' , this.newresto).then(res => {
                        console.log(res);
                        this.localRestos.unshift(res.data);
                        this.hideAddModal();
                    }).catch(err => {
                        console.log(err);
                    })
                },
                showAddModal : function () {
                    this.$modal.show('add-new-resto');
                },
                hideAddModal : function () {
                    this.newresto = this.emptyResto();
                    this.$modal.hide('add-new-resto');
                },
                emptyResto : function() {
                     return { name:"" , address: "" , tables:0 }
                }
            }
}
</script>
<style lang="">
    
</style>