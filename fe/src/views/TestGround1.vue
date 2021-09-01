<template>
  <div>
    <home-navbar1 class="d-none d-sm-flex"></home-navbar1>
    <home-navbar2 class="d-flex d-sm-none"></home-navbar2>
    <!-- gago -->
    <!-- gago ka din -->
    <div>
      <v-container
        class="my-10"
      >
        <!-- <h2>{{ filteredProfs }}</h2> -->

        <!-- v-binding with for loop -->

        <v-btn
          @click="hideList"
        >
          <span
            v-if="pakita"
          >
            Hide Books
          </span>
          <span
            v-else
            
          >
            Show Books
          </span>
        </v-btn>

        <v-form
          ref="form"
          v-if="pakita"
        >
          <!-- v-binding example -->
          <v-text-field
            :label="gagi"
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
            class="mr-4"
          >
            Update
          </v-btn>
          
        </v-form>

        <v-list
          v-else
        >
          <!-- v-for="profile in filteredProfs" it is showing the all the profile but filtered -->
          <!-- also adding "peb" in class if the peborit is true -->
          <v-list-item
            v-for="profile in profiles"
            :key="profile.name"
            :class="{ peb: profile.peborit }"
          >
            <v-list-item-content>
              <v-list-item-title v-text="profile.name"></v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>

        <!-- CHANGE CLASS -->
        <div
          class="ma-5"
        >
          <input
            type="text"
            ref="tf"
            placeholder="CHANGE CLASS"
            class="mr-4 blue-grey darken-4 text-center white--text"
          >
          <v-btn
            color="primary"
            @click="changeClass(see)"
          >
            Change Class
          </v-btn>
        </div>
        
      </v-container>
    </div>
    
    <!-- THIS IS DIALOG -->
    <div class="text-center ma-5">
      <v-dialog
        v-model="dialog"
        width="500"
      >
        <template v-slot:activator="{ on, attrs }">
          <v-btn
            color="red lighten-2"
            dark
            v-bind="attrs"
            v-on="on"
          >
            Click Me
          </v-btn>
        </template>

        <v-card>
          <v-card-title class="text-h5 grey lighten-2">
            Privacy Policy
          </v-card-title>

          <v-card-text>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </v-card-text>

          <v-divider></v-divider>

          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn
              color="primary"
              text
              @click="dialog = false"
            >
              I accept
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </div>

    <!-- Sending Props to TestGroundOT.vue "subh"-->
    <!-- Receiving Emits from TestGroundOT.vue "something"-->
    <!-- Sending Slots to TestGroundOT.vue "slot"-->
    <test-groundOT :subh="gagi" @something="hideList" >
      <h1>This is a slot</h1>
      <template v-slot:Links>
          <h2>This is from a named slot</h2>
      </template>
    </test-groundOT>
    <home-footer2></home-footer2>
  </div>
</template>

<script>
  import NavBar1 from '../components/NavBar1.vue'
  import NavBar2 from '../components/NavBar2.vue'
  import Footer2 from '../components/Footer2.vue'
  import TestGroundOT from '../components/TestGroundOT.vue'
  
  export default{
    name: 'Home',

    components: {
      'home-navbar1': NavBar1,
      'home-navbar2': NavBar2,
      'home-footer2': Footer2,
      'test-groundOT': TestGroundOT
    },

    data: () => ({
      see: true,
      gagi: 'Label',
      pakita: true,
      dialog: false,
      profiles: [
        { name: 'rom', peborit: true },
        { name: 'paulo', peborit: true },
        { name: 'sarmiento', peborit: false},
      ]
    }),

    computed: {
      filteredProfs() {
        return this.profiles.filter((profs) => profs.peborit);
      }
    },

    methods: {
      hideList() {
        this.pakita = !this.pakita;
      },
      changeClass(ees) {
        if(ees)
        {
          console.log(this.$refs.tf);
          this.$refs.tf.classList.add('active');
        }
        else
        {
          console.log(this.$refs.tf);
          this.$refs.tf.classList.remove('active');
        }
        this.see = !this.see;
      },
      
    }
  }
</script>

<style>
  .peb{
    background-color: red;
    color: greenyellow !important;
    font-weight: bold;
  }

  .active{
    font-size: x-large;
  }
</style>