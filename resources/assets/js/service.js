require('./bootstrap');

window.Vue = require('vue');

let token = document.head.querySelector('meta[name="csrf-token"]');
console.log(token);

const service = new Vue({
    el: '#service',
    data: {
        search: '',
        services: [],
        pagination: {
            'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
        },
        offset: 2,
        //isNotSearching: true
    },
    computed: {
        isNotSearching: function() {
            if (this.search !== '') {
                return false
            } else {
                return true
            }
        },
        isActive: function() {
            return this.pagination.current_page
        },
        pagesNumber: function() {
            if (!this.pagination.to) {
                return []
            }

            let from = this.pagination.current_page - this.offset

            if (from < 1){
                from = 1
            }

            let to = from + (this.offset * 2)

            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page
            }

            let pagesArray = []

            while(from <= to) {
                pagesArray.push(from)
                from++
            }

            return pagesArray
        },
        searchUser: function (){
            return this.services.filter((item) => item.name.toLowerCase().includes(this.search))
        }
    },
    methods: {
        getServices: function(page) {
            fetch('/all-services?page='+page)
            .then(res => res.json())
            .then(response => {
                console.log(response)
                //console.table(response.services)
                //console.table(response.services.data)
                //console.table(response.pagination)
                this.services = response.services.data
                this.pagination = response.pagination
            })
        },
        changePage: function(page) {
            this.pagination.current_page = page
            this.getServices(page)
        },
    },
    created: function() {
        this.getServices()
    }
});