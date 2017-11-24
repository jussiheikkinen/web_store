<template>
  <div class="row" style="margin-top:10px;">
    <div class="small-12 medium-4 large-3 columns" v-for="product in products">
      <div class="card product-card">
        <img v-on:click="loadProduct(product)" class="thumbnail" src="/chili.jpg" alt="product photo" width="100%">
        <div class="card-section">
          <div class="row">
            <div class="small-6 columns">
              <h4>{{product.price}} €</h4>
            </div>
            <div class="small-6 columns text-right">
              <button v-on:click="addToCart(product)" class="button small"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
            </div>
            <div class="small-12 columns text-center">
              <strong>{{product.name}}</strong>
            </div>
            <div class="small-12 columns text-center">
              <small style="word-wrap: break-word;">{{product.description}}</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  props: ["products_json"],
  data(){
    return {
      products: {}
    }
  },
  mounted(){
    this.products = JSON.parse(this.products_json);
    console.log(this.products);
  },
  methods: {
    addToCart(product){
      console.log("Adding to cart");
      console.log(product);
      this.$emit('addproduct', product);
    },

    loadProduct(product){
      if(product.hasOwnProperty('id')){
        window.location = window.location.origin+'/product/'+product.id
      }
    }
  }
}
</script>

<style>
  img {
    cursor: pointer;
  }
</style>
