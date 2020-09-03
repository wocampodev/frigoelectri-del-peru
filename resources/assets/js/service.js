require('./bootstrap');

window.Vue = require('vue');

let token = document.head.querySelector('meta[name="csrf-token"]');

const service = new Vue({
    el: '#service',
    data: {
        search: '',
        list: []
    }
});