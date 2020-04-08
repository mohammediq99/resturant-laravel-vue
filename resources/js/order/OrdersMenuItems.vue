<template>
<div>
    <h3>Menu</h3>
    <ul class="list-group">
            <li class="list-group-item" v-for="(item, key) in items" :key="key">

        <div class="row">
            <div class="col-md-10">
            {{item.name}} <span class="float-right">{{item.price}}</span>
            <br>
            {{item.category.name}}
      
        </div>
        <div class="col-md-2 sm"><button class="btn btn-primary btn-sm" @click="handleAddButtun(item)">Add</button></div>
        </div>
    </li>
        
    </ul>



</div>
</template>


<script>
export default {
    props:['items'],
    methods:{
        handleAddButtun(item) {
            this.$emit('added' , item);
                    console.log('fire event in orders menu item ' , item);
        }
    }
}
</script>