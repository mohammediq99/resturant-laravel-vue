<template>
<div class="row">
    <div class="col-md-7">
        <h3>Customer Details</h3>
        <order-from></order-from>
        <h3>Order Details <span class="float-right" v-if="finailAmount > 0">{{finailAmount}} $</span></h3>
        <h6 v-if="finailAmount === 0 ">no items selected</h6>
        <order-details :items="orderDeatilItems"></order-details>
         </div>

    <div class="col-md-5">
        <orders-menu-items :items="menus" 
        v-on:added="handleAddButtun"></orders-menu-items>

    </div>

</div>


</template>


<script>
import OrderFrom from './OrderForm';
import OrdersMenuItems from './OrdersMenuItems';
import OrderDetails from './OrderDetails'
import axios from 'axios';
export default {
    props:['resto'],
    components:{
        OrderFrom , OrdersMenuItems,OrderDetails
        },
        data(){
            return{
                orderDeatilItems:[],
                menus:[]
            }
        },
        created(){
            this.loadMenuItems()
        },
        computed:{
            finailAmount(){
                let price = 0;
                this.orderDeatilItems.forEach(order => {
                    price = price + order.price;
                })
                return price;
            }
        },
        methods:{
            handleAddButtun (item){
                console.log('event handled handleAddItem ');
             this.orderDeatilItems.unshift(item)
            },
            loadMenuItems(){
                let postData = {restoId : this.resto.id}
                axios.post('/api/resto/order/menus' , postData).then(response =>{
                    this.menus = response.data;
                    console.log(response);
                })


            }
        }


    
}
</script>