<template>
    <ul>
        <li>
            <a href="#" class="item-link item-content sheet-open">
                <div class="item-inner item-cell">
                    <div class="item-row">
                        <div class="item-cell ">Màu sắc</div>
                        <div class="item-cell">
                            <div class="color-choose">
                                <div v-for="attr in attributes.colors">
                                    <input type="radio" v-bind:id="attr.color" name="color" v-bind:value="attr.color" v-model="color">
                                    <label v-bind:for="attr.color"><span v-bind:style="attr.color | format_color"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item-link item-content sheet-open">
                <div class="item-inner item-cell">
                    <div class="item-row">
                        <div class="item-cell ">Size</div>
                        <div class="item-cell">
                            <div class="size-choose">
                                <div v-for="attr in attributes.size">
                                    <input type="radio" v-bind:id="attr.size" name="size" v-bind:value="attr.size">
                                    <label v-bind:for="attr.size"><span v-text="attr.size"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#" class="item-link item-content sheet-open">
                <div class="item-inner item-cell">
                    <div class="item-row">
                        <div class="item-cell ">Thông tin sản phẩm</div>
                        <div class="item-cell description">Mô tả</div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</template>

<script>

    export default {
        data() {
            return {
                attributes: [],
                color: ''
            }
        },
        created() {
            let id = document.querySelector('#product_id').getAttribute('value');
            axios.get('/api/attributes/'+id)
                .then(response => {
                    this.attributes = response.data
                });
        },
        methods: {
        }
    }
</script>
