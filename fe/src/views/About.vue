<template>
  <div>
    <about-navbar1 class="d-none d-sm-flex"></about-navbar1>
    <about-navbar2 class="d-flex d-sm-none"></about-navbar2>

    <about-footer2></about-footer2>
  </div>
</template>

<script>
  import NavBar1 from '../components/NavBar1.vue'
  import NavBar2 from '../components/NavBar2.vue'
  import Footer2 from '../components/Footer2.vue'
  
  export default{
    name: 'about',

    components: {
      'about-navbar1': NavBar1,
      'about-navbar2': NavBar2,
      'about-footer2': Footer2
    }
  }
</script>