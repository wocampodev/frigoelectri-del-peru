require('../bootstrap');

window.Vue = require('vue');

const token = document.getElementById('my-token').getAttribute('content');

const contact = new Vue({
    el: '#contact',
    data: {
        name: '',
        email: '',
        phone: '',
        company: '',
        message: ''
    },
    methods: {
        sendContact: function() {
            let data = {
                name: this.name,
                email: this.email,
                phone: this.phone,
                company: this.company,
                message: this.message
            }
            fetch('/contact-web', {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN':  token
                }
            })
            .then(res => res.json())
            .then(response => {
                console.log(response.status)
                console.log(response.errors)
            })
        } 
    }
});