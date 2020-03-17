/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRoute = require('vue-router');
import VueLazyload from 'vue-lazyload';

import 'vue2-toast/lib/toast.css';
import Toast from 'vue2-toast';
Vue.use(Toast, {
    type: 'center',
    duration: 3000,
    wordWrap: true,
    width: '90%'
});

Vue.use(VueLazyload);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('latest-product-component', require('./components/LatestProductComponent.vue').default);
Vue.component('flash-sale-component', require('./components/FlashSaleProductComponent.vue').default);
Vue.component('sale-component', require('./components/SaleComponent.vue').default);
Vue.component('best-seller-component', require('./components/BestSellerComponent.vue').default);
Vue.component('attributes-component', require('./components/AttributeComponent.vue').default);
<<<<<<< HEAD
Vue.component('relate-product-component', require('./components/RelateProductComponent.vue').default);
=======
Vue.component('cart-number-component', require('./components/CartComponent.vue').default);
>>>>>>> 59727cb1390fb6262641839c3a0ca1f19a7b7624

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
