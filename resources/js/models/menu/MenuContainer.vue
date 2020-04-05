<template v-if="loading == true">
    <div class="wrapper  menu__container">
<div class="row">
    <div class="col-md-8">
                <card-component>
                    <template slot="title">my card title </template>
                    <template slot="body"> 
                        <div class="section">
                            <multiselect :options="categories" v-model="menu"></multiselect> 
                        </div>
                            <menu-group v-bind:items="curentMenuItems"></menu-group>  
                        </template>
                </card-component>

    </div>
     <div class="col-md-4">
            <card-component>
                        <template slot="title"> Add Items

                        </template>
                        <template slot="body">
                            <menu-add-form v-bind:categories="categories" v-bind:resto="resto" v-on:newMenuItemAddes="newMenuItemAddes"></menu-add-form> 
                        </template>
            </card-component>


    </div>
</div>                   
                </div>
</template>

<script>

import _ from 'lodash';

import Multiselect from 'vue-multiselect';
import MenuGroup from './MenuGroups.vue';
import MenuAddForm from './MenuAddFrom.vue';
import axios from 'axios';
    export default { 
props:['items'],
components:{
    Multiselect,MenuGroup,MenuAddForm
},
data (){
    return{
        localItems:'',
        menu:'',
    categories:[],
    resto:1
    }
},
created(){
    _.forEach(this.items , (item ,key)=>{
        this.categories.push(key);
    });
    this.menu = this.categories[0];
    this.localItems = this.items;
},
computed:{
    curentMenuItems() {
        return this.localItems[this.menu];
    }
},
methods:{
newMenuItemAddes(item , category ){
this.localItems[category].unshift(item);
}
}





    }
</script>
