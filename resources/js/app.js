require('./bootstrap');

import PolarisVue from '@eastsideco/polaris-vue/lib/polaris-vue';
import PolarisVueCss from '@eastsideco/polaris-vue/lib/polaris-vue.css';

window.Vue = require('vue');

Vue.component('app-entry', require('./AppEntry.vue').default);
Vue.component('shopify-products', require('./components/ProductsComponent.vue').default);
Vue.use(PolarisVue);

const app = new Vue({
    el: '#app',
});
