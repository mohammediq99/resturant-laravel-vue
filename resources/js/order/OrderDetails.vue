<template>
    <div>
        <ul class="list-group">
            <li class="list-group-item" v-for="(item, key) in items" :key="key">
            {{item.name}} <span class="float-right">{{item.price}}</span>
       </li>
        
    </ul>


    </div>
</template>
<script>
export default {
    props:['items'],

}
</script>