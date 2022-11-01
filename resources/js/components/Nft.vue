<script>
import axios from 'axios';

    export default {
        props: {
            name: String,
            floorPrice: String,
            image: String,
            id: Number 
        },
        methods: {
        destroy() {
            axios.delete('api/nfts/' + this.id)
            .then((response) => { this.$emit('delete-nft', this.id) })
            }
        }
    }
</script>

<template>
    <div class="row">
        <div class="col-md-4">
            <div class="mb-5">
                <div class="card text-center border border-white grey-border position-relative">
                <div class="card-nft">
                    <img :src="image" class="card-img-top img-fluid img-thumbnail w-50 h-50">
                    <div class="card-body">
                        <div>{{ name }}</div>   
                        <p class="card-text">Price: {{ floorPrice }} ETH</p>
                        <button class="btn btn-danger float-end" @click="destroy">X</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>
    