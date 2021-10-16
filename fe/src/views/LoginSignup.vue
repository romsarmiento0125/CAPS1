<template>
  <div class="bod">
    <ls-navbarov></ls-navbarov>

    <ls-logincom v-if="'Login' === navTitle" @signup="signupTrue"></ls-logincom>

    <ls-signupcom v-else-if="'Sign Up' === navTitle"></ls-signupcom>

    <ls-footer2></ls-footer2>
  </div>
</template>

<script>
  import Logincom from '../components/Logincom.vue'
  import Signupcom from '../components/Signupcom.vue'
  import Footer2 from '../components/Footer2.vue'
  import NavBarOV from '../components/NavBarOV.vue'

  export default {
    name: 'LoginSignup',
    title: 'erich',

    components: {
      'ls-logincom': Logincom,
      'ls-signupcom': Signupcom,
      'ls-footer2': Footer2,
      'ls-navbarov': NavBarOV,
    },

    data: () => ({
      navTitle: "",
    }),
    
    created() {
      if(this.$route.params.nt == "Login"){
        this.navTitle = "Login";
      }
      else{
        this.navTitle = "Sign Up";
      }
    },

    methods: {
      signupTrue() {
        this.navTitle = "Sign Up";
      }
    }
    
  }
</script>

<style>
  .bod {
    background-color: #ECEFF1;
  }
</style>