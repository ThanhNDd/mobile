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
                <h2 class="bold padding-bottom-7" style="padding-bottom: 5px;font-size: 40px;">{{ratingAvg}}</h2>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i v-bind:class="ratingAvg >= 1 ? 'fas fa-star' : 'fas fa-star-half-alt'" style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i v-bind:class="ratingAvg > 1 ? (ratingAvg >= 2 ? 'fas fa-star' : 'fas fa-star-half-alt') : 'far fa-star' " style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i v-bind:class="ratingAvg > 2 ? (ratingAvg >= 3 ? 'fas fa-star' : 'fas fa-star-half-alt') : 'far fa-star' " style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                    <i v-bind:class="ratingAvg > 3 ? (ratingAvg >= 4 ? 'fas fa-star' : 'fas fa-star-half-alt') : 'far fa-star' " style="color:#fff;"></i>
                </button>
                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                    <i v-bind:class="ratingAvg > 4 ? (ratingAvg >= 5 ? 'fas fa-star' : 'fas fa-star-half-alt') : 'far fa-star' " style="color:#fff;"></i>
                </button>
            </div>
            <div class="rating-breakdown float-right" style="width: 50%;padding: 0 5px;">
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-success" v-bind:style="{'width':percent_5_star+ '%'}" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">{{ number_5_star }}</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-primary" v-bind:style="{'width':percent_4_star+ '%'}" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">{{ number_4_star }}</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">3 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-info" v-bind:style="{'width':percent_3_star+ '%'}" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">{{ number_3_star }}</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">2 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-warning" v-bind:style="{'width':percent_2_star+ '%'}" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">{{ number_2_star }}</div>
                </div>
                <div class="float-left">
                    <div class="float-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <i class="far fa-star"></i></div>
                    </div>
                    <div class="float-left" style="width:130px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar bg-danger" v-bind:style="{'width':percent_1_star +'%'}" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="float-right" style="margin-left:10px;">{{ number_1_star }}</div>
                </div>
            </div>
        </div>
        <div  v-if="ratingAvg > 0">
            <div v-for="review in reviews">
                <div class="content">
                    <img v-bind:src="url + '/public/images/user-buyer2.png'" alt="">
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
        </div>
        <div v-else>
            <p class="center">Hãy trở thành người đầu tiên đánh giá sản phẩm này.</p>
        </div>
        <!-- end divider -->
        <!-- view all reviews -->
        <div class="view-all-review" v-if="ratingAvg > 0">
            <a v-bind:href="url + '/all-reviews/'+this.product_id">Xem thêm</a>
        </div>
        <!-- end view all reviews -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                reviews: '',
                ratingAvg: 0,
                ratingDetail: '',
                percent_5_star: 0,
                number_5_star: 0,
                percent_4_star: 0,
                number_4_star: 0,
                percent_3_star: 0,
                number_3_star: 0,
                percent_2_star: 0,
                number_2_star:0,
                percent_1_star:0,
                number_1_star:0,
                url: ''
            }
        },
        props: ['product_id'],
        created() {
            this.url = url;
            this.getAllReviews();
            this.getRatingAvg();
            this.getRatingNumberDetail();
        },
        methods: {
            getRatingNumberDetail: function() {
                axios.get(url + '/api/rating-number-detail/'+this.product_id)
                    .then(response => {
                        console.log(response.data);
                        this.ratingDetail = response.data;
                        for(let i=0; i<this.ratingDetail.length; i++) {
                            let obj = this.ratingDetail[i];
                            if(obj.rating === 1) {
                                this.number_1_star = obj.number;
                                this.percent_1_star = obj.percent;
                            } else if(obj.rating === 2) {
                                this.number_2_star = obj.number;
                                this.percent_2_star = obj.percent;
                            } else if(obj.rating === 3) {
                                this.number_3_star = obj.number;
                                this.percent_3_star = obj.percent;
                            } else if(obj.rating === 4) {
                                this.number_4_star = obj.number;
                                this.percent_4_star = obj.percent;
                            } else if(obj.rating === 5) {
                                this.number_5_star = obj.number;
                                this.percent_5_star = obj.percent;
                            }
                        }
                    });
            },
            getRatingAvg: function() {
                axios.get(url + '/api/rating-avg/'+this.product_id)
                    .then(response => {
                        console.log(response.data);
                        if(response.data !== '' && response.data > 0) {
                            this.ratingAvg = response.data;
                        }
                    });
            },
            getAllReviews: function () {
                axios.get(url + '/api/reviews/'+this.product_id)
                    .then(response => {
                        console.log(response.data);
                        this.reviews = response.data;
                    });
            }
        },
    }

</script>
