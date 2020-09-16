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
                //console.log(response.status)
                if (response.status == 'success') {
                    this.clearForm()
                    this.alertSuccess()
                } else if (response.status == 'fail-validate') {
                    //console.log(response.errors)
                    this.showErrors(response.errors)
                } else if (response.status == 'fail-send'){
                    //console.log('No se envió el correo')
                    this.alertFail()
                }
            })
            .catch(errors => console.log(errors))
        },
        clearForm: function() {
            this.name = ''
            this.email = ''
            this.phone = ''
            this.company = ''
            this.message = ''
        },
        alertSuccess: function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Excelente' + this.name + 'nos comunicaremos contigo',
                showConfirmButton: false,
                timer: 2000
            })
        },
        showErrors: function (errors) {
            let html = '';
            for (const [key, value] of Object.entries(errors)) {
                html += value[0]+'<br>';
            }
            this.showErrorsAlert(html);
        },
        showErrorsAlert: function (content) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                html: content,
                showConfirmButton: false,
                timer: 3000
            });
        },
        alertFail: function () {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Ha ocurrido un problema, intentelo más tarde.',
            })
        }
    }
});