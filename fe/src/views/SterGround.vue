<template>
    <div>
    <nav>
      <v-toolbar
      color="lightblue darken-1"
      height="a"
      style="
        background: #039BE5;
        background: -webkit-linear-gradient(to right, #1F5CD5, #63ABE8);
        background: linear-gradient(to right, #1F5CD5, #63ABE8);"
      >
      <v-app-bar-nav-icon class="white--text" @click="drawer =!drawer">

      </v-app-bar-nav-icon>

      <v-toolbar-title class="text-uppercase white--text">
        Administrator
      </v-toolbar-title>

        <v-spacer></v-spacer>

      <v-btn dark text>
        <span>Signout</span>
          <v-icon right>
        mdi-logout
          </v-icon>
      </v-btn>

      </v-toolbar>

      <v-navigation-drawer v-model="drawer" class="blue-grey lighten-5">
        <p>test</p>

      </v-navigation-drawer>

    </nav>



    <ster-sg></ster-sg>
    </div>
</template>

<script>
import SterGround1 from '../components/SterGround1.vue'

export default {
     name: 'Ster',
    data(){
      return{
        drawer: false
      }
    },
    components: {
      'ster-sg': SterGround1,
      
    }
}
</script>
