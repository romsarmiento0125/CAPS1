<template>
  <div>
    <nav-terms></nav-terms>

    
    <about-footer2></about-footer2>
  </div>
</template>

<script>
import NavBarTerms from '../components/NavBarTerms.vue'
  import Footer2 from '../components/Footer2.vue'
  
  export default{
    name: 'about',

    components: {
      'nav-terms' : NavBarTerms,
      'about-footer2': Footer2
    }
  }
</script>