<template>
    <div class="page-content">
        <div class="cart segments">
            <h5>Danh sách sản phẩm</h5>
            <div class="divider-space-content"></div>
            <div class="container">
                <div class="content" v-for="(cart, index) in carts">
                    <div class="row">
                        <div class="col-20">
                            <div class="content-image">
                                <img v-bind:src="cart['image']" alt="">
                            </div>
                        </div>
                        <div class="col-80">
                            <div class="content-text">
                                <p class="title-product" v-text="cart['name'] +' - '+ cart['color'] +' - '+ cart['size']"></p>
                                <p v-text="displayPrice(cart['price'], cart['qty'])"></p>
                            </div>
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
                    </div>
                </div>
                <!-- end wrap total cart -->
            </div>
        </div>
        <div class="cart segments">
            <h5>Thông tin người nhận</h5>
            <div class="divider-space-content"></div>
            <form class="list" @submit="checkForm">
                <ul v-if="errors.length">
                    <li v-for="error in errors">
                        <p style="font-size: 14px;color: red;">{{ error }}</p>
                    </li>
                </ul>
                <ul>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Họ tên" v-model="name">
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Số điện thoại" v-model="phone">
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="email" placeholder="Email" v-model="email">
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Địa chỉ" v-model="address">
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-input-wrap">
                                <button type="submit"  class="button primary-button">
                                    <i class="fas fa-shopping-bag"></i>Thực hiện thanh toán
                                </button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <p style="font-size:13px;font-style: italic;">* Free ship khu vực Hà Nội với đơn hàng > 300k.</p>
                    </li>
                    <li>
                        <p style="font-size:13px;font-style: italic;">* Free ship toàn quốc với đơn hàng > 500k.</p>
                    </li>
                    <li>
                        <p style="font-size:13px;font-style: italic;">* Ship khu vực Hà Nội 20k, toàn quốc 30k.</p>
                    </li>
                </ul>

            </form>
        </div>
<!--        <div class="content-button">-->
<!--            <a href="/process-checkout" class="button primary-button" style="width: 60%;margin: auto;">-->
<!--                <i class="fas fa-shopping-bag"></i>Thực hiện thanh toán-->
<!--            </a>-->
<!--        </div>-->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                carts: [],
                errors: [],
                name: null,
                phone: null,
                email: null,
                address: null,
                city: [],
            }
        },
        created() {
            axios.get('/api/carts')
                .then(response => {
                    this.carts = response.data
                });
            // axios.get('https://admin.shopmein.vn/src/controller/orders/OrderController.php?orders=loadDataCity', { crossdomain: true }
            // )
            //     .then(response => {
            //         this.city = response.data
            //     });


            axios.get('https://admin.shopmein.vn/src/controller/orders/OrderController.php?orders=loadDataCity',
                {
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Access-Control-Allow-Methods': 'POST, GET, PUT, OPTIONS, DELETE',
                        'Access-Control-Allow-Headers': 'Access-Control-Allow-Methods, Access-Control-Allow-Origin, Origin, Accept, Content-Type',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                }
            ).then(response => {
                this.city = response.data
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
            },
            checkForm: function (e) {
                if (this.name && this.phone && this.address) {
                    return true;
                }
                this.errors = [];
                if (!this.name) {
                    this.errors.push('Bạn chưa nhập tên.');
                }
                if (!this.phone) {
                    this.errors.push('Bạn chưa nhập số điện thoại.');
                }
                if (!this.address) {
                    this.errors.push('Bạn chưa nhập địa chỉ.');
                }
                e.preventDefault();
            },

        }
    }
</script>
