<template>
  <div>
    <nav-faqs></nav-faqs>

    
    <about-footer2></about-footer2>
  </div>
</template>

<script>
import Footer2 from '../components/Footer2.vue'
import NavBarFaqsVue from './NavBarFaqs.vue'
  
  export default{
    name: 'about',

    components: {
      'nav-faqs':NavBarFaqsVue,
      'about-footer2': Footer2,
    }
  }
</script>