<template>
    <div class="row">
        <div class="col-50" v-for="product in products">
            <div class="content content-shadow-product">
                <a v-bind:href="'/product-details/' + product.id">
                    <div class="image">
                        <img v-lazy="format_image(product.image)" v-bind:alt="product.name">
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
            axios.get('./api/best-seller')
                .then(response => {
                    this.products = response.data
                });
        },
        methods: {
            formatPrice(value) {
                let val = (value/1).toFixed(0).replace('.', ',');
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            },
            format_image(value) {
                let image = JSON.parse(value);
                let src = image[0].src;
                let type = image[0].type;
                if(type === 'upload') {
                    src = 'https://admin.shopmein.vn/dist/uploads/' + src;
                }
                return src;
            }
        }
    }
</script>
