<template>
  <div>
    <nav-policy></nav-policy>
    <about-footer2></about-footer2>


  </div>
  

</template>

<script>
import NavBarPolicy from '../components/NavBarPolicy.vue'
import Footer2 from '../components/Footer2.vue'
export default{
    name: 'about',

    components: {
      'nav-policy':NavBarPolicy,
      'about-footer2':Footer2,

    }
  }

</script>