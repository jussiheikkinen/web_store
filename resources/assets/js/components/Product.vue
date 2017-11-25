<template>
  <div id="product" class="row">
    <div class="small-12 columns">
      <h3>{{product.name}}</h3>
    </div>
    <div class="small-12 medium-6 columns">
      <img id="product_photo" class="thumbnail" src="/chili.jpg" alt="product photo" width="100%">
    </div>
    <div class="small-12 medium-2 columns">
      <div class="row product_img">
        <div v-for="image in images" class="small-3 medium-12 columns">
          <img class="thumbnail" src="/chili.jpg" alt="product photo" width="100%">
        </div>
      </div>
    </div>
    <div class="small-12 medium-4 columns">
      <div class="row">
        <div class="small-6 medium-12 columns">
          <h4>{{product.price}} €</h4>
        </div>
        <div class="columns">
          <button class="button">Add to cart</button>
        </div>
      </div>
    </div>
    <div class="small-12 medium-8 columns">
      <p style="word-wrap: break-word;">{{product.description}} €</p>
    </div>
  </div>
</template>

<script>
  export default {
    props: ["product_json"],
    data() {
      return {
        product: {},
        images:[1,2,3,4]
      }
    },
    mounted() {
      this.product = JSON.parse(this.product_json);
      console.log(this.product);
    },

    methods: {
      addToCart(product){
        console.log("Adding to cart");
        console.log(product);
        this.$emit('addproduct', product);
      }
    }
  }
</script>

<style>
  #product {
    margin-top: 15px;
  }

  .product_img {
    max-height: 550px; overflow-y: auto;
  }
</style>
