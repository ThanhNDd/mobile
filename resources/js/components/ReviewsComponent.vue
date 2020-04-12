<template>
    <div class="product-review segments">
        <div class="row section-title">
            <h3 style="width: 100%;">Đánh giá sản phẩm
                <span class="see-all-link btn btn-sm btn-warning"
                   style="color: #333;width:auto;" id="ratingbtn">
                    <i class="fas fa-pen-nib"></i> Viết nhận xét
                </span>
            </h3>
        </div>
        <div class="row col-sm-12" style="margin: 0;display: inline-block;width: 100%;padding:0px 0px 20px 0px;">
            <div class="rating-block float-left" style="padding: 20px 5px;width: 49%;text-align: center;">
                <h2 class="bold padding-bottom-7" style="padding-bottom: 5px;font-size: 40px;">4.0</h2>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i class="fas fa-star" style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i class="fas fa-star" style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i class="fas fa-star" style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i class="fas fa-star" style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                    <i class="fas fa-star" style="color:#fff;"></i>
                </button>
            </div>
            <div class="rating-breakdown float-right" style="width: 50%;padding: 0 5px;">
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">1</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">1</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">3 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">0</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">2 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">0</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">0</div>
                </div>
            </div>
        </div>
        <div v-for="review in reviews">
            <div class="content">
                <img src="/images/user-buyer2.png" alt="">
                <div class="text">
                    <h6>{{ review.name }}</h6>
                    <ul class="rate-product">
                        <li><i v-bind:class="review.rating >= 1 ? 'fas' : 'far'" class="fa-star" ></i></li>
                        <li><i v-bind:class="review.rating >= 2 ? 'fas' : 'far'" class="fa-star" ></i></li>
                        <li><i v-bind:class="review.rating >= 3 ? 'fas' : 'far'" class="fa-star" ></i></li>
                        <li><i v-bind:class="review.rating >= 4 ? 'fas' : 'far'" class="fa-star" ></i></li>
                        <li><i v-bind:class="review.rating >= 5 ? 'fas' : 'far'" class="fa-star" ></i></li>
                    </ul>
                    <p class="date">
                        {{ review.created_date | moment("from", "now") }}
                    </p>
<!--                    <i class="fas fa-thumbs-up like-button"></i>-->
                    <p v-text="review.content"></p>
                </div>
            </div>
            <!-- divider -->
            <div class="divider-line-half"></div>
        </div>
        <!-- end divider -->
        <!-- view all reviews -->
        <div class="view-all-review">
            <a v-bind:href="'/all-reviews/'+this.product_id">Xem tất cả</a>
        </div>
        <!-- end view all reviews -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                reviews: ''
            }
        },
        props: ['product_id'],
        created() {
            this.getAllReviews();
        },
        methods: {
            getAllReviews: function () {
                axios.get('/api/reviews/'+this.product_id)
                    .then(response => {
                        console.log(response.data);
                        this.reviews = response.data;
                    });
            }
        },
        computed: {

        },
    }

</script>
