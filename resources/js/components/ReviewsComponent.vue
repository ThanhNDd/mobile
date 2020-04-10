<template>
        <div class="product-review segments">
            <div class="row section-title">
                <h3 style="width: 100%;">Đánh giá sản phẩm
                    <span class="see-all-link btn btn-sm btn-warning"
                       style="color: #333;width:auto;" id="rating" @click="writing">
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
            <div class="content">
                <img src="/images/user-buyer2.png" alt="">
                <div class="text">
                    <h6>Rashaad</h6>
                    <ul class="rate-product">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="date">3 min ago</p>
                    <i class="fas fa-thumbs-up like-button"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                        explicabo.</p>
                </div>
            </div>

            <!-- divider -->
            <div class="divider-line-half"></div>
            <!-- end divider -->

            <div class="content">
                <img src="/images/user-buyer1.png" alt="">
                <div class="text">
                    <h6>Aamir</h6>
                    <ul class="rate-product">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="date">3 min ago</p>
                    <i class="fas fa-thumbs-up like-button"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                        explicabo.</p>
                </div>
            </div>

            <!-- divider -->
            <div class="divider-line-half"></div>
            <!-- end divider -->

            <div class="content">
                <img src="/images/user-buyer3.png" alt="">
                <div class="text">
                    <h6>Kemal</h6>
                    <ul class="rate-product">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="date">3 min ago</p>
                    <i class="fas fa-thumbs-up like-button"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto,
                        explicabo.</p>
                </div>
            </div>
            <!-- view all reviews -->
            <div class="view-all-review">
                <a href="/all-reviews/123456">Xem tất cả</a>
            </div>
            <!-- end view all reviews -->
        </div>
</template>

<script>
    export default {
        data() {
            return {
                // products: []
            }
        },
        created() {

        },
        methods: {
        }
    }
    $(function(){
        let ratingsField = $('#ratings-hidden');
        $('.starrr').on('starrr:change', function(e, value){
            ratingsField.val(value);
        });

        $("#rating").click(function () {
            $(".rating-sheet").addClass("modal-in");
            $("html").addClass("with-modal-sheet");
            $(".sheet-close").click(function() {
                $(".rating-sheet").removeClass("modal-in");
                $("html").removeClass("with-modal-sheet");

            });
        });
    });
</script>
