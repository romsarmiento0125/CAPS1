<template>
  <div>
    <nav-contact></nav-contact>

    
    <about-footer2></about-footer2>
  </div>
</template>

<script>
import ContactUs from '../components/NavBarContact.vue'
import Footer2 from '../components/Footer2.vue'
  
  export default{
    name: 'about',

    components: {
      'nav-contact': ContactUs,
      'about-footer2': Footer2
    }
  }
</script>