<template>
  <div>
    <us-navbaruser></us-navbaruser>

    <us-useraccbody></us-useraccbody>
    
    <us-footer2></us-footer2>
  </div>
</template>

<script>
  import Footer2 from '../components/Footer2.vue'
  import NavBarUser from '../components/NavBarUser.vue'
  import UserAccountBody from '../components/UserAccountBody.vue'

  export default {
    name: 'UserAccount',

    components: {
      'us-footer2': Footer2,
      'us-navbaruser': NavBarUser,
      'us-useraccbody': UserAccountBody,
    },

    data: () => ({
      cards: ['Today', 'Yesterday'],
      drawer: null,
      links: [
        ['mdi-inbox-arrow-down', 'Inbox'],
        ['mdi-send', 'Send'],
        ['mdi-delete', 'Trash'],
        ['mdi-alert-octagon', 'Spam'],
      ],
    }),
    
    created() {
      this.navTitle = this.$route.params.ut;
    }
    
  }
</script>

<style>

</style>