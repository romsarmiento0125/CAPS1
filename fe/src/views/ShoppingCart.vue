<template>
  <div
    class="bod"
  >
    <shopcart-navbarcart></shopcart-navbarcart>
    
    <shopcart-shopcartbody @emitEventCB="shopCartBodyData" v-if="bodyPicker"></shopcart-shopcartbody>
    <shopcart-checkout v-else></shopcart-checkout>

    <shopcart-footercart></shopcart-footercart>
  </div>
</template>

<script>
  import NavBarCart from '../components/NavBarCart.vue'
  import Footer2 from '../components/Footer2.vue'
  import ShopCartBody from '../components/ShopCartBody.vue'
  import CheckOut from '../components/CheckOut.vue'

  export default {
    name: 'ShoppingCart',

    components: {
      'shopcart-navbarcart': NavBarCart,
      'shopcart-footercart': Footer2,
      'shopcart-shopcartbody': ShopCartBody,
      'shopcart-checkout': CheckOut,
    },

    data: () => ({
      bodyPicker: false,
    }),

    methods: {
      shopCartBodyData(cond, id, name, desc, price, count, image) {
        console.log(cond);
        console.log(id);
        console.log(name);
        console.log(desc);
        console.log(price);
        console.log(count);
        console.log(image);
        this.bodyPicker = cond;
      }
    }

  }
</script>

<style>
  .bod {
    background-color: #ECEFF1;
  }
</style>
