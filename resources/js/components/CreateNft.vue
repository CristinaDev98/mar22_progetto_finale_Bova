<script>
import axios from 'axios';

    export default {
        data() {
             return {
                nfts: [],
                name: "",
                floor_price: "",
                image: ""} 
            },
        methods: {
        createNft() {
            console.log(this.name)
            console.log(this.floor_price)
            console.log(this.image)
            axios.post(
            '/api/nfts',{name: this.name, floor_price: this.floor_price, image: this.image}
            ).then((response) => {
                console.log("done")
            this.$emit('create-nft', true)
            }).catch((err) => {
                console.log(err.response.data)
            })
        }
        }
    }
</script>

<template>
    <div class="row">
    <div class="container-form">
        <div class="container">
  <div class="row row-cols-3">
    <div class="col">
        <label for="name" class="p-0 mt-3 label-form">Name:</label>
        <input type="text" class="input-form" id="name" v-model="name">
    </div>
    <div class="col">
        <label for="floor_price" class="p-0 mt-3 label-form">Floor Price:</label>
    <input type="number" class="input-form" v-model="floor_price" id="floor_price">
    </div>
    <div class="col">
        <label for="image" class="p-0 mt-3 label-form">Image Url:</label>
        <input type="text" class="input-form" id="image" v-model="image">
    </div>
  </div>
  <button class="button-29 float-end" @click="createNft">Create</button>
</div>
</div>
</div>
</template>

