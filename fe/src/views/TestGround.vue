<template>
  <div>
    <home-navbar1 class="d-none d-sm-flex"></home-navbar1>
    <home-navbar2 class="d-flex d-sm-none"></home-navbar2>

    <div>
      <v-container
        class="my-10"
      >
        <v-form
          ref="form"
        >
          <v-text-field
            label="Name"
          ></v-text-field>

          <v-btn
            color="success"
            class="mr-4"
          >
            Add
          </v-btn>

          <v-btn
            color="error"
            class="mr-4"
          >
            Delete
          </v-btn>

          <v-btn
            color="warning"
          >
            Update
          </v-btn>
        </v-form>
      </v-container>
    </div>

    <home-footer2></home-footer2>
  </div>
</template>

<script>
  import NavBar1 from '../components/NavBar1.vue'
  import NavBar2 from '../components/NavBar2.vue'
  import Footer2 from '../components/Footer2.vue'
  
  export default{
    name: 'Home',

    components: {
      'home-navbar1': NavBar1,
      'home-navbar2': NavBar2,
      'home-footer2': Footer2
    },
  }
</script>