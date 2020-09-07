require('../bootstrap');

window.Vue = require('vue');

const token = document.getElementById('my-token').getAttribute('content');

const order = new Vue({
    el: '#order',
    data: {
        service: document.getElementById('service_id').value,
        name: '',
        email: '',
        phone: '',
        date: new Date().toISOString().slice(0,10),
        message: ''
    },
    methods: {
        sendOrder: function() {
            let data = {
                service: this.service,
                name: this.name,
                email: this.email,
                phone: this.phone,
                date: this.date,
                message: this.message
            }
            fetch('/order-web', {
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
            this.date = new Date().toISOString().slice(0,10)
            this.message = ''
        },
        alertSuccess: function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Hemos recibido tu pedido, pronto nos comunicaremos contigo',
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
                timer: 5000
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