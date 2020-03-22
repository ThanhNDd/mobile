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
            <form @submit="checkForm">
                <ul v-if="errors.length">
                    <li v-for="error in errors">
                        <p style="font-size: 14px;color: red;">{{ error }}</p>
                    </li>
                </ul>
                <div class="form-group">
<!--                    <label for="email">Email address:</label>-->
                    <input type="text" placeholder="Họ tên" class="form-control" v-model="name">
                </div>
                <div class="form-group">
<!--                    <label for="pwd">Password:</label>-->
                    <input type="text" placeholder="Số điện thoại" class="form-control" v-model="phone">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control" v-model="email">
                </div>
                <v-select :options="city" :reduce="city => city.id" placeholder="Select city" label="text"></v-select>
                <button type="submit"  class="button primary-button">
                    <i class="fas fa-shopping-bag"></i>Thực hiện thanh toán
                </button>
            </form>
<!--            <form class="list" @submit="checkForm">-->
<!--                <ul v-if="errors.length">-->
<!--                    <li v-for="error in errors">-->
<!--                        <p style="font-size: 14px;color: red;">{{ error }}</p>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <ul>-->
<!--                    <li class="item-content item-input">-->
<!--                        <div class="item-inner">-->
<!--                            <div class="item-input-wrap">-->
<!--                                <input type="text" placeholder="Họ tên" v-model="name">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="item-content item-input">-->
<!--                        <div class="item-inner">-->
<!--                            <div class="item-input-wrap">-->
<!--                                <input type="text" placeholder="Số điện thoại" v-model="phone">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="item-content item-input">-->
<!--                        <div class="item-inner">-->
<!--                            <div class="item-input-wrap">-->
<!--                                <input type="email" placeholder="Email" v-model="email">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <v-select :options="city" :reduce="city => city.id" label="text"></v-select>-->
<!--                    </li>-->
<!--&lt;!&ndash;                    <li class="item-content item-input">&ndash;&gt;-->
<!--&lt;!&ndash;                        <div class="item-inner">&ndash;&gt;-->
<!--&lt;!&ndash;                            <div class="item-input-wrap input-dropdown-wrap">&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                <select placeholder="Select city" v-model="city_id" id="select_city">&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                    <option v-for="option in city" v-bind:value="option.id">&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                        {{ option.text }}&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                    </option>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                </select>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                <select placeholder="Select city" id="select_city">&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                    <option v-for="option in city" v-bind:value="option.id">&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                        {{ option.text }}&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                    </option>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;&lt;!&ndash;                                </select>&ndash;&gt;&ndash;&gt;-->

<!--&lt;!&ndash;&lt;!&ndash;                                <v-select :options="city" :reduce="city => city.id" label="text"></v-select>&ndash;&gt;&ndash;&gt;-->
<!--&lt;!&ndash;                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                        </div>&ndash;&gt;-->
<!--&lt;!&ndash;                    </li>&ndash;&gt;-->
<!--                    <li class="item-content item-input">-->
<!--                        <div class="item-inner">-->
<!--                            <div class="item-input-wrap">-->
<!--                                <button type="submit"  class="button primary-button">-->
<!--                                    <i class="fas fa-shopping-bag"></i>Thực hiện thanh toán-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <p style="font-size:13px;font-style: italic;">* Free ship khu vực Hà Nội với đơn hàng > 300k.</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <p style="font-size:13px;font-style: italic;">* Free ship toàn quốc với đơn hàng > 500k.</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <p style="font-size:13px;font-style: italic;">* Ship khu vực Hà Nội 20k, toàn quốc 30k.</p>-->
<!--                    </li>-->
<!--                </ul>-->

<!--            </form>-->
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
                city_id: '',
                
            }
        },
        created() {
            axios.get('/api/carts')
                .then(response => {
                    this.carts = response.data
                });
            axios.get('/api/zone/city')
                .then(response => {
                    this.city = JSON.parse(response.data).results;
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
                e.preventDefault();
                if (this.name && this.phone && this.address) {
                    return true;
                }
                this.errors = [];
                if (!this.name) {
                    this.errors.push('Bạn chưa nhập tên.');
                    return;
                }
                if (!this.phone) {
                    this.errors.push('Bạn chưa nhập số điện thoại.');
                    return;
                }
                if (!this.address) {
                    this.errors.push('Bạn chưa nhập địa chỉ.');
                }
            },
            myChangeEvent(val) {
                console.log(val);
            },
            mySelectEvent({id, text}) {
                console.log({id, text})
            }
        },
    }

</script>
