<script>
import axios from 'axios';

    export default {
        data() {
             return {
                nfts: [],
                name: "",
                floor_price: 0,
                image: ""} 
            },
        methods: {
        createNft() {
            axios.post(
            'api/nfts',{name: this.name, floor_price: this.floor_price, image: this.image}
            ).then((response) => {
            this.$emit('create-nft', true)
            })
        }
        }
    }
</script>

<template>
    <div class="container-form">
        <label for="name" class="p-0 mt-2 label-form">Name:</label>
        <input type="text" class="input-form" id="name" v-model="name"><br>
        <label for="floor_price" class="p-0 mt-2 label-form">Floor Price:</label>
        <input type="number" class="input-form" v-model="floor_price" id="floor_price"><br>
        <label for="image" class="mt-3">Image:</label>
        <input type="file" class="input-form" id="image" name="image">
        <button class="btn btn-primary float-end" @click="createNft">Create</button>
    </div>
</template>