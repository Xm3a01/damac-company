<template>
     <div class="wrapper ">

      <!-- side bar -->
            <side-bar />             

    <div class="main-panel">
      <!-- Navbar -->
            <nav-bar />
      
      <!-- End Navbar -->
      <div class="content">

            <slot></slot>
            
      </div>
    </div>
  </div>

</template>

<script>
import navBar from "../Include/Navbar"
import sideBar from "../Include/Sidebar"
    export default {
        components:{
            navBar,
            sideBar
        },
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
</style>