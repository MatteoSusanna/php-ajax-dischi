var app = new Vue({
    el: '#app',
    data: {
        risposta: [],
        message: 'Vue'
    },
    created(){
      console.log('ciao')
      axios.get('http://localhost/php-ajax-dischi/seconda_versione/server.php')
      .then( musica =>{
          this.risposta = musica;
          
      })
    }
})