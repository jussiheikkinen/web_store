<template>
  <div class="row">
    <div class="small-12 columns">
      {{total}} €
    </div>
    <div class="small-12 columns">
      <div v-if="total">
        <div v-for="item in products">
          {{ item.name }}
        </div>
      </div>
      <div v-else>
        <p>Cart empty</p>
      </div>
    </div>
  </div>
</template>


<script>
  export default{
    props: ["added"],

    data(){
      return {
        products: []
      }
    },

    watch: {
      added: function(newVal, oldVal) { // watch it
        if(newVal){
          this.addToCart(newVal);
        }
      }
    },

    computed: {
      total: function(){
        //Set total to 0 and calculate again
        let total = 0;
        for(let i in this.products){
          total = parseFloat(this.products[i].price) + parseFloat(total);
        }
        return total;
      }
    },

    methods: {
      addToCart(newVal){
        //Put to session cart by axios:post
        this.products.push(newVal);

        axios.post('/cart', {
          'products': this.products
        }).then((response) => {
          console.log(response)
        })
        .catch((error) => {
          console.log(error)
        });
      }
    },

    mounted() {
        axios.get('/cart')
          .then((response) => {
            console.log(response)
            this.products = response.data.products;
          })
          .catch((error) => {
            console.log(error)
          });
    }
  }

</script>
