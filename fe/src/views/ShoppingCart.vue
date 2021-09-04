<template>
  <div
    class="bod"
  >
    <shopcart-navbarcart></shopcart-navbarcart>
    
    <shopcart-shopcartbody></shopcart-shopcartbody>

    <shopcart-footercart></shopcart-footercart>
  </div>
</template>

<script>
  import NavBarCart from '../components/NavBarCart.vue'
  import Footer2 from '../components/Footer2.vue'
  import ShopCartBody from '../components/ShopCartBody.vue'

  export default {
    name: 'ShoppingCart',

    components: {
      'shopcart-navbarcart': NavBarCart,
      'shopcart-footercart': Footer2,
      'shopcart-shopcartbody': ShopCartBody,
    },

  }
</script>

<style>
  .bod {
    background-color: #ECEFF1;
  }
</style>
