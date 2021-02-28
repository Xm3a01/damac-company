<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ header }}</div>

                    <div class="card-body">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:{
           header : String 
        },
        data() {
            return {
            }
        }
    }
</script>

<style>
 @import 'vuetify/dist/vuetify.min.css';
</style>