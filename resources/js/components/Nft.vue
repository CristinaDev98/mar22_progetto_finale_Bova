<script>
import axios from 'axios';

    export default {
        props: {
            name: String,
            floorPrice: String,
            image: String,
            nft: Number 
        },
        methods: {
        destroy() {
            axios.delete('api/nfts/' + this.nft)
            .then((response) => { this.$emit('delete-nft', this.nft) })
            }
        }
    }
</script>

<template>
    <div class="card" v-for="nft in nfts">
    <div class="card-header">{{ nft.name }}</div>
    <div class="card-body">
    <img :src=nft.image class="card-img-top img-fluid img-thumbnail w-50 h-50">   
    <p class="card-text">Price: {{ nft.floor_price }} ETH</p>
    <button class="btn float-end" @click="destroy">Delete</button>
    </div>
    </div>
</template>
    