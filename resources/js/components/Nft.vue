<script>
import axios from 'axios';

    export default {
        data() {
            return {
            //     previewImage: null,
            //     selectFile: null
            }
        },
        props: {
            name: String,
            floorPrice: String,
            image: String,
            id: Number 
        },
        methods: {
            // selectImage (e) {
            //     this.$refs.fileInput.click()
            //     this.selectFile = e.target.files[0]
            // },
            // pickFile () {
            //     let input = this.$refs.fileInput
            //     let file = input.files
            //     if (file && file[0]) {
            //         let reader = new FileReader
            //         reader.onload = e => {
            //             this.previewImage = e.target.result

            //         }
            //         reader.readAsDataURL(file[0])
            //         this.$emit('input', file[0])
            //     }
            // },
            // onUpload() {
            //     const fd = new FormData();
            //     console.log(this.selectFile);
            //     fd.append('image/img_nft', this.selectFile)
            //     axios.post('/api/nfts', fd, {
            //         onUploadProgress: uploadEvent => {
            //             console.log('Upload Progress: ' + Math.round(uploadEvent.loaded / uploadEvent.total * 100) + '%')
            //         }
            //     })
            // },
        destroy() {
            axios.delete('/api/nfts/' + this.id)
            .then((response) => { this.$emit('delete-nft', this.id) })
            }
        }
    }
</script>

<template>
    <div class="row nftcard">
        <div class="container">
        <div class="col-sm-6 col-lg-4">
            <div class="card-main" style="width: 16rem; margin-bottom: 2em; margin-right: 2em;">
                <div class="card text-center border border-white grey-border position-relative" style="border-radius: 10px;">
                <div class="card-nft">
                    <!--div class="imagePreviewWrapper" :style="{ 'background-image': `url(${previewImage})` }" @click="selectFile"></div-->

                    <div class="imagePreviewWrapper">
                        <img class="imagePreviewWrapper" :src="image" />
                    </div>
                    <div class="card-body">
                        <div><u>Name: {{ name }}</u></div>   
                        <p class="card-text"><u>Price: {{ floorPrice }} ETH</u></p>
                        <!-- <input type="file" ref="fileInput" @input="pickFile">
                        <button @click="onUpload" style="float: left;">Upload</button> -->
                        <button class="btn btn-danger float-end" @click="destroy">x</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<style>
.imagePreviewWrapper {
    background-size: cover;
    height: 250px;
}

input{
    width: -webkit-fill-available;
}
</style>
    