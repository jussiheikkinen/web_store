<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component 111</div>

                    <div class="panel-body">
                      {{plaah}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
            plaah: "hello jussi"
          }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
