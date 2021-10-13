Vue.config.devtools = true;

const app = new Vue(
    {
        el: 'root',
        data: {
            discs: '',
        },
        created() {
            axios .get('http://localhost/Esercizi/php-ajax-dischi/api/server.php')
            .then ((res) => {
                console.log(res.data);
                this.discs = res.data;
                console.log(this.discs)
            })
        }
    }
)