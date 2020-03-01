<template>
    <div class="row">
        <div class="col-50" v-for="product in products">
            <div class="content content-shadow-product">
                <a v-bind:href="'/product-details/' + product.id">
                    <div class="image">
                        <img v-bind:src="product.image" alt="">
                    </div>
                    <div class="text">
                        <p class="title-product title-product-center" v-text="product.name"></p>
                        <p class="price" v-text="formatPrice(product.retail) + ' đ'"></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                products: []
            }
        },
        created() {
            axios.get('./api/products')
                .then(response => {
                    this.products = response.data
                });
        },
        methods: {
            formatPrice(value) {
                let val = (value/1).toFixed(0).replace('.', ',');
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        }
    }
</script>
