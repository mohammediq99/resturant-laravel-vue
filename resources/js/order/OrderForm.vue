<template>
    <div class="">
                <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" class="form-control" id="name" 
                        placeholder=" Name"
                        v-model="customer.name"
                        >
                    </div>
                <div class="form-group">
                        <label for="Phone"> Phone</label>
                        <input type="text" class="form-control" id="Phone"
                        v-model='customer.phone'                          >
                    </div>
                    <div class="form-group">
                        <label for="address"> Address</label>
                        <input type="text" class="form-control" id="address" 
                        v-model="customer.address"
                        >
                    </div>
                          <div class="form-group">
                       <button >Submit</button>
                             </div>
    </div>
</template>
<script>
export default {
    data(){
        return{ 
            customer: this.emptyCustimer()
        }
    },
    methods:{
        emptyCustimer : function () {
            return { name : '' , phone: '' , address: '' }
        }
    }
}
</script>