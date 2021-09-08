<template>
  <div>
    <nav>
      <v-app-bar
      color="lightblue darken-1"
      height="a"
      style="
        background: #039BE5;
        background: -webkit-linear-gradient(to right, #1F5CD5, #63ABE8);
        background: linear-gradient(to right, #1F5CD5, #63ABE8);"
      >

      <v-app-bar-nav-icon class="white--text" @click="drawer = !drawer"></v-app-bar-nav-icon>

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

      </v-app-bar>
      

      <v-card>
        <v-navigation-drawer 
          v-model="drawer" 
          class="blue-grey lighten-5"    
          >
            <v-list>
              <v-list-item link>
                <v-list-item-content>
                  <v-list-item-title>
                     <router-link to="/">
                        <v-img
                        contain
                        src="../assets/3.png"
                        max-height="50px"
                        max-width="50px"
                        class="text-uppercase"
                        ></v-img>
                     </router-link>               
                     Hello...
                  </v-list-item-title>
                  <v-list-item-subtitle>Admin</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>
            </v-list>

            <v-divider></v-divider>

            <v-list
              nav
              dense
            >
              <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-home-variant</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Home</v-list-item-title>
              </v-list-item>

              <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-format-list-bulleted-square</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Inventory</v-list-item-title>
              </v-list-item>
              <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-finance</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Sales</v-list-item-title>
              </v-list-item>
              <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-package-down</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Receiving</v-list-item-title>
              </v-list-item>
               <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-shape</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Category</v-list-item-title>
              </v-list-item>
               <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-clipboard-list</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Product List</v-list-item-title>
              </v-list-item>
               <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-account-arrow-left</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Supplier List</v-list-item-title>
              </v-list-item>
               <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-account-supervisor</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Customer List</v-list-item-title>
              </v-list-item>
               <v-list-item link>
                <v-list-item-icon>
                  <v-icon>mdi-account-group</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Users</v-list-item-title>
              </v-list-item>
            </v-list>

        </v-navigation-drawer>
      </v-card>
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
