<template>
    <div class="container">
        <div class="content" v-for="(cart, index) in carts">
            <div class="row">
<!--                <div class="col-10">-->
<!--                    <div class="content-checkbox">-->
<!--                        <label class="trash">-->
<!--                            <i class="fa fa-trash-alt" @click="removeItem(cart, index)"></i>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-20">
                    <div class="content-image">
                        <img v-bind:src="cart['image']" alt="">
                    </div>
                </div>
                <div class="col-40">
                    <div class="content-text">
                        <p class="title-product" v-text="cart['name'] +' - '+ cart['color'] +' - '+ cart['size']"></p>
                        <p v-text="displayPrice(cart['price'], cart['qty'])"></p>
                    </div>
                </div>
                <div class="col-30 align-self-center">
<!--                    <div class="number-goods">-->
<!--                        <div class="stepper stepper-small stepper-init">-->
<!--                            <div class="stepper-button-minus" @click="minus(cart)"></div>-->
<!--                            <div class="stepper-input-wrap">-->
<!--                                <input type="text" v-bind:value="cart['qty']" readonly>-->
<!--                            </div>-->
<!--                            <div class="stepper-button-plus" @click="plus(cart)"></div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <!-- divider -->
        <div class="divider-space-content"></div>
        <!-- end divider -->
        <!-- wrap total cart -->
        <div class="wrap-total-cart">
            <div class="container">
                <div class="content-total">
                    <ul>
                        <li>
                            <p>Total</p>
                        </li>
                        <li>
                            <h6>{{Total | formatPrice}}</h6>
                        </li>
                    </ul>
                </div>
                <div class="content-button">
                    <a href="/checkout/" class="button primary-button"><i
                        class="fas fa-shopping-bag"></i>Checkout</a>
                </div>
            </div>
        </div>
        <!-- end wrap total cart -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                carts: []
            }
        },
        created() {
            axios.get('/api/carts')
                .then(response => {
                    this.carts = response.data
                });
        },
        computed: {
            /**
             * @return {number}
             */
            Total() {
                let total = 0;
                this.carts.forEach(cart => {
                    total += cart['price'] * cart['qty'];
                });
                return total;
            }
        },
        methods: {
            process: function(products){
                axios.post("/api/cart/checkout", {
                    body: products
                }).then(response => {
                    this.carts = response.data
                })
            },
            displayPrice: function (price, qty) {
                let val = this.formatPrice(price*qty);
                return this.formatPrice(price) + " x " + qty + " = " + val;
            },
            formatPrice: function(value) {
                let val = (value/1).toFixed(0).replace('.', ',');
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' đ';
            }
        }
    }
</script>
