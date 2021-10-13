Vue.config.devtools = true;

const app = new Vue(
    {
        el: '#root',
        data: {
            discs: '',
        },
        created() {
            axios .get('http://localhost/Esercizi/php-ajax-dischi/api/server.php')
            //POTEVO SCRIVERE ANCHE .get('api/server.php') perché la chiamata in realtà parte dall'index e quindi entro direttamente dalla cartella
            .then ((res) => {
                console.log(res.data);
                this.discs = res.data;
                console.log(this.discs)
            })
        }
    }
)