<template>
  <div style="margin-bottom:0;" class="input-group">
    <input class="input-group-field" placeholder="Search" v-model="keyword" v-on:keyup="searchProducts">
    <button type="button" class="button"><i class="fa fa-search" aria-hidden="true"></i></button>
    <div class="search-dropdown" v-show="isSearching">
      <div class="row" v-for="result in results">
        <div class="small-12 columns search-elem" v-on:click="openProduct(result)">
          {{result.name}}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data(){
      return {
        keyword: '',
        results: {},
        isSearching: false
      }
    },

    methods: {
      searchProducts(){
        if(this.keyword.length){
          axios.get('/search/'+this.keyword)
            .then((response) => {
              console.log(response.data)
              this.results = response.data;
              this.isSearching = true;
            })
            .catch((error) => {
              console.log(error)
            });
        }
        else{
        this.results = {};
        this.isSearching = false;
      }
    },

    openProduct(product){
      window.location = window.location.origin+'/product/'+product.id;
    }

  }
}
</script>

<style>
  .search-dropdown {
    position: absolute;
    background-color: white;
    top: 40px;
    width: 300px;
    border: 2px solid lightgray;
  }

  .search-elem {
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .search-elem:hover {
    background-color: rgb(135,253,229);
  }
</style>
