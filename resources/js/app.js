window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.Vue = require('vue');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

import VueSwal from 'vue-swal';
import VueApexCharts from 'vue-apexcharts';
import Buefy from 'buefy';
import 'buefy/dist/buefy.css';
import VueSweetalert2 from 'vue-sweetalert2';



Vue.use(Buefy);
Vue.use(VueSweetalert2);


Vue.component('apexchart', VueApexCharts);

Vue.component('stats-chart', require('./components/ExampleComponent.vue').default);
Vue.component('widgets', require('./components/WidgetsComponent.vue').default);
Vue.component('chat-main', require('./components/Chats.vue').default);
Vue.component('my-tasks', require('./components/MyTasksComponent.vue').default);
Vue.component('to-do', require('./components/MyTodoComponent.vue').default);
Vue.component('latest-activity', require('./components/LatestProjectActivityComponent.vue').default);
Vue.component('inprogess-pie', require('./components/InProgressPieChart.vue').default);
Vue.component('create-task-form', require('./components/CreateTaskComponent.vue').default);
Vue.component('completed-task', require('./components/CompletedTaskTableComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    
});
