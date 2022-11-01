<script>
import axios from 'axios';

    export default {
        data() {
             return { nfts: [], name: "", floor_price: "", image: ""} 
            },
        mounted() {
             this.getNfts()
            },
        methods: {
        deleteNft(e) {
             this.nfts = this.nfts.filter( o => o.id !== e);
              console.log('ciao')
            },
        getNfts() {
            axios.get('/api/nfts').then((response) => {
                //console.log(response)
            this.nfts = response;
            })
        }
        }
    }
</script>

<template>
    <div>
        <create-nft @create-nft="getNfts"></create-nft><br><br>
        <div class="container-card">
            <nft v-for="nft in nfts"
            :key="nft.id"
            :name="nft.name"
            :floorPrice="nft.floor_price"
            :image="nft.image"
            :id="nft.id"
            @delete-nft="deleteNft"
            ></nft>
        </div>
    </div>
</template>