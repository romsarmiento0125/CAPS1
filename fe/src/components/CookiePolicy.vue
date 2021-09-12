<template>
  <div>
    <nav-cookie></nav-cookie>

    
    <about-footer2></about-footer2>
  </div>
</template>

<script>
import NavBarCookie from '../components/NavBarCookie.vue'
import Footer2 from '../components/Footer2.vue'
  
  export default{
    name: 'about',

    components: {
      'nav-cookie': NavBarCookie,
      'about-footer2': Footer2
    }
  }
</script>