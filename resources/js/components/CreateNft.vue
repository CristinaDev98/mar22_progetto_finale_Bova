<script>
import axios from 'axios';

    export default {
        data() {
             return {
                name: "",
                floor_price: "",
                image: ""} 
            },
        methods: {
        createNft() {
            axios.nft(
            'api/nfts',{name: this.name, floor_price: this.floor_price}
            ).then((response) => {
            this.$emit('create-nft', true)
            })
        }
        }
    }
</script>

<template>
    <div>
        <label for="name" class="p-0 mt-2">Name</label>
        <input type="text" id="name" v-model="name"><br>
        <label for="floor_price" class="p-0 mt-2">Floor Price</label>
        <input type="number" v-model="floor_price" id="floor_price">
        <label for="image" class="p-0 mt-2">Image</label><br>
        <input type="file" id="file">
        <button class="btn btn-primary float-end" @click="createNft">Create</button>
    </div>
</template>