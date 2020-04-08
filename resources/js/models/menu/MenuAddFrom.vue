<template>
<div class="add_form_category">
<form action="" v-on:submit.prevent="hadleSubmit"> 

<div class="form-group">
<label for="name"> food name </label>
<input type="text" class="form-control" id="name" v-model="food.item" placeholder="Enter food name"/>
<div class="err-valid" ></div>
</div>



<div class="form-group">
<label for="category">Food Menu</label>
<multiselect id="category"  v-model="food.category" :options="categories"></multiselect>
</div>


<div class="form-group">
<label for="description">description</label>
 <textarea  class="form-control" placeholder="Enter food Description" v-model="food.description"></textarea>
 </div>



<div class="form-group">
<label for="price">Price</label>
<input type="number" v-model="food.price" class="form-control" placeholder="Enter food Price"/>
</div>

<div class="form-group">
 <button type="submit">Save</button>
 </div>
</form>

</div>
</template>
<script>

import Multiselect from 'vue-multiselect'; 
import Validator from './../../validator';
import validator from './../../validator';
import axios from 'axios';
export default {
    data(){
        return{
            food: this.emptyFood(), 
        }
    },
    components:{
        Multiselect
    },
    props:['categories' , 'resto'],
    methods:{
        emptyFood(){
            return {
                item:'',
                category:'',
                price:100,
                description:''
            }
        },
        hadleSubmit(){
            let postData = this.food;
            postData.resto = this.resto;
                console.log(postData);
                axios.post('api/item/save' , postData).then( (response) => {
                    this.$emit('newMenuItemAddes' , response.data , postData.category);
                    this.food =  this.emptyFood();
                console.log(response.data);
                }).catch((error) => {
                    console.log(error.response);
                    if (error.response.status == 422 ) { 
                    }
                ///console.log(error);

                });
        }
    }
         
   
}
</script>