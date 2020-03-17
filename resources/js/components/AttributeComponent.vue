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
                                    <input type="radio" v-bind:id="attr.color"
                                           name="color" v-bind:value="attr.color">
                                    <label v-bind:for="attr.color"><span v-bind:style="format_color(attr.color)"></span></label>
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
                                    <input type="radio" v-bind:id="attr.size" name="size"
                                           v-bind:value="attr.size">
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
                attributes: []
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
            format_color(value) {
                let color_code = '';
                switch (value) {
                    case 'Trắng':
                        color_code = 'background-color: white';
                        break;
                    case 'Xanh':
                        color_code = 'background-color: lightseagreen';
                        break;
                    case 'Đỏ':
                        color_code = 'background-color: red';
                        break;
                    case 'Tím':
                        color_code = 'background-color: purple';
                        break;
                    case 'Vàng':
                        color_code = 'background-color: yellow';
                        break;
                    case 'Xám':
                        color_code = 'background-color: gray';
                        break;
                    case 'Hồng':
                        color_code = 'background-color: pink';
                        break;
                    case 'Đen':
                        color_code = 'background-color: black';
                        break;
                    case 'Nâu':
                        color_code = 'background-color: brown';
                        break;
                    case 'Kem':
                        color_code = 'background-color: blue';
                        break;
                    case 'Cam':
                        color_code = 'background-color: orange';
                        break;
                    case 'Kẻ':
                        color_code = 'background-image: linear-gradient(90deg, rgba(200,0,0,.5) 50%, transparent 50%), linear-gradient(rgba(200,0,0,.5) 50%, transparent 50%);\n' +
                            '}';
                        break;
                }
                return color_code;
            }
        }
    }
</script>
