<template>
  <div class="row">
    <div class="small-12 columns">
      {{total}} €
    </div>
    <div class="small-12 columns">
      <div v-if="products.length">
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
        total: 0,
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

    methods: {
      addToCart(newVal){
        //Put to session cart by axios:post
        this.products.push(newVal);
        this.total = parseFloat(newVal.price) + parseFloat(this.total);
      }
    },

    mounted() {
        axios.get('/cart')
          .then((response) => {
            console.log(response)
            this.products = response.data.products;
            this.total = response.data.total;
          })
          .catch((error) => {
            console.log(error)
          });
    }
  }

</script>
