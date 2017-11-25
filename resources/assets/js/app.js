
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Just keep both ways to import components for example.
import example from './components/ExampleComponent.vue';
//Vue.component('example-component', require('./components/ExampleComponent.vue'));
import cart from './components/Cart.vue';
import searchbox from './components/SearchBox.vue';
import product_list from './components/ProductList.vue';
import product from './components/Product.vue';

const app = new Vue({
    el: '#app',

    //register componens
    components: {
      example, cart, searchbox, product_list, product
    },

    data: {
      add_product: false
    },

    methods: {
      addToCart(product){
        this.add_product = product;
      }
    }
});
