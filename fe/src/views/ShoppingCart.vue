<template>
  <div
    class="bod"
  >
    <shopcart-navbarcart :navName="navBarName"></shopcart-navbarcart>
    
    <shopcart-shopcartbody
      @emitEventCB="shopCartBodyData"
      v-if="bodyPicker"
      ></shopcart-shopcartbody>
    <shopcart-checkout 
      :itemId="propId"
      :itemName="propName"
      :itemDesc="propDesc"
      :itemPrice="propPrice"
      :itemCount="propCount"
      :itemImage="propImage"
      v-else
    ></shopcart-checkout>

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
      bodyPicker: true,
      navBarName: "Shopping Cart",
      propId: [],
      propName: [],
      propDesc: [],
      propPrice: [],
      propCount: [],
      propImage: [],
    }),

    methods: {
      shopCartBodyData(cond, id, name, desc, price, count, image) {
        this.changeNavBarName();
        this.propId = id;
        this.propName = name;
        this.propDesc = desc;
        this.propPrice = price;
        this.propCount = count;
        this.propImage = image;
        this.bodyPicker = cond;

        console.log("This is id" + this.propId);
        console.log("This is name" + this.propName);
        console.log("This is desc" + this.propDesc);
        console.log("This is price" + this.propPrice);
        console.log("This is count" + this.propCount);
        console.log("This is image" + this.propImage);
      },
      changeNavBarName() {
        this.navBarName = "Check Out"
      }
    }

  }
</script>

<style>
  .bod {
    background-color: #E0E0E0;
  }
</style>
