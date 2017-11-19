<template>
  <div class="row">
    <div class="small-12 columns">
      {{total}}
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
    data(){
      return {
        total: 0,
        products: []
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
