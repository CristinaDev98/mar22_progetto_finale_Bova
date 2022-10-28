<script>
import axios from 'axios';

    export default {
        data() {
             return { nfts: []} 
            },
        mounted() {
             this.getNfts() 
            },
        methods: {
        deleteNft(e) {
             this.nfts = this.nfts.filter( o => o.id !== e); 
            },
        getNfts() {
            axios.get('/api/nfts').then((response) => {
            this.nfts = response.data;
            })
        }
        }
    }
</script>

<template>
    <div>
        <create-nft @create-nft="getNfts"></create-nft>
        <nft
        v-for="nft in nfts"
        :key="nft.id"
        :name="nft.name"
        :floorPrice="nft.floor_price"
        :image="nft.image"
        :nft="nft.id"
        @delete-nft="deleteNft"
        ></nft>
    </div>
</template>