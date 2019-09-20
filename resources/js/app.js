require('./bootstrap');



/* IMPORT */
import request 		from 'sync-request';
import VueRouter 	from 'vue-router';
import VueAxios 	from 'vue-axios';
import axios 		from 'axios';
import JQuery 		from 'jquery';
/* IMPORT */

/* VARIABLES */
let $ = JQuery;
/* VARIABLES */

/* REQUIRE */
window.Vue		= require('vue');
window.$ 		= require('jquery');
window.JQuery 	= require('jquery');
/* REQUIRE */





/*VUEJS*/

Vue.use(VueRouter, VueAxios, axios, $, JQuery);


Vue.component('main-component', 	require('./components/main-component.vue').default);
Vue.component('nav-component', 		require('./components/nav/nav-component.vue').default);
Vue.component('aside-component', 	require('./components/aside/aside-component.vue').default);
Vue.component('content-component', 	require('./components/content/content-component.vue').default);
	Vue.component('header-page-component', 	require('./components/content/header/header-page-component.vue').default);
	Vue.component('home-page-component', 	require('./components/content/content/home-page-component.vue').default);

const app = new Vue({
    el: '#app'
});

/*VUEJS*/

