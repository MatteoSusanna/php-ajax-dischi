var app = new Vue({
    el: '#app',
    data: {
        risposta: [],
    },
    created(){
      axios.get('http://localhost/php-ajax-dischi/seconda_versione/server.php')
      .then( musica =>{
          this.risposta = musica.data;
          console.log(this.risposta)
      })
    }
})