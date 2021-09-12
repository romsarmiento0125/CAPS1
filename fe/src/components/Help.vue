<template>
  <div>
    <nav-help></nav-help>

    
    <about-footer2></about-footer2>
  </div>
</template>

<script>
import Help from '../components/NavBarHelp.vue'
import Footer2 from '../components/Footer2.vue'
import NavBarHelpVue from '../components/NavBarHelp.vue'
  
  export default{
    name: 'about',

    components: {
      'nav-help': NavBarHelp,
      'about-footer2': Footer2
    }
  }
</script>