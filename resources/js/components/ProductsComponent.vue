<template>
    <div class="container">
        <div class="row mb-5"></div>

        <div class="row">
            <div v-for="product in productsData['data']" class="col-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ product.name }}</h5>
                        <p v-html="product.description" class="card-text"></p>
                        <p v-html="product.price" class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>

        <pagination
            :data="productsData"
            :limit="2"
            @pagination-change-page="getResults"
        />
    </div>
</template>

<script>

import axios from 'axios';

export default {
    data() {
        return {
            productsData: {}
        }
    },
    mounted() {
        this.getResults();
    },
    methods: {
        async getResults(page) {
            if (typeof page === 'undefined') {
                page = 1;
            }

            const response = await axios.get(`/api/products?page=${page}`);
            this.productsData = response['data'];
        }
    }
}
</script>
