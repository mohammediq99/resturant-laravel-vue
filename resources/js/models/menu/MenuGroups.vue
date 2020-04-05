
<template>
 <div class="section">
<table class="table table-hover table-striped">
<thead>
<tr>
    <th>name &amp; Description</th>
    <th>Price</th>
</tr>
</thead>
<tbody>
    <tr v-for="(item , key) in items" :key="key">
        <td>
            <strong v-text='item.name'></strong>
            <p v-text="item.description"> </p>
            </td>
            <td>
            <strong v-text='item.price'></strong>
        </td>
    </tr>
</tbody>








</table>




    </div>
    </template>
    <script>
 export default { 
     props:['items'],
                     }
    </script>