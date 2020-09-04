require('./bootstrap');

window.Vue = require('vue');

let token = document.head.querySelector('meta[name="csrf-token"]');
console.log(token);

const service = new Vue({
    el: '#service',
    data: {
        search: '',
        services: [],
    },
    methods: {
        getServices: function() {
            fetch('/all-services')
            .then(res => res.json())
            .then(response => {
                console.table(response.services)
                console.log(response.services.data)
                this.setServicesList(response.services.data);
            })
        },
        setServicesList: function(data) {
            console.log(data)
            this.services = data
            console.log(this.services)
        }
    },
    created: function() {
        this.getServices();
    }
});