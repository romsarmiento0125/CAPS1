<template>
  <div>
    <nav>
        <v-app-bar
          color="lightblue darken-1"
          class="m-y-5"
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

      <!-- This where body is....!-->
      <!-- <Dash-Home></Dash-Home> -->
      <!-- <Dash-Inv></Dash-Inv>    -->
      <!-- <Dash-Sale></Dash-Sale> -->
      <!-- <Dash-Receive></Dash-Receive> -->
      <!-- <Dash-Categ> </Dash-Categ> -->
      <!-- <Dash-PList></Dash-PList>   -->
      <!-- <Dash-SList></Dash-SList> -->
      <!-- <Dash-CList></Dash-CList> -->
      <Dash-Users></Dash-Users>
      <v-card
      tile     
      >
        <v-navigation-drawer 
          v-model="drawer" 
          class="blue-grey lighten-5" 
          app   
            >
            <v-list>
              <v-list-item link>
                <v-list-item-content>
                  <v-list-item-title>
                    <router-link to="/">
                      <v-img
                      contain
                      src="../assets/3.png"
                      max-height="70px"
                      max-width="70px"
                      class="text-uppercase"
                      ></v-img>
                    </router-link>               
                  </v-list-item-title>

                  <v-list-item-title class="mt-1 text-uppercase"> Welcome</v-list-item-title>
                  <v-list-item-subtitle class="mt-2">Administrator</v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>
            </v-list>

              <v-divider></v-divider>
            <v-list
              nav
              dense
              >                          
              <v-list-item v-for="link in links" :key="link.text">
                <v-list-item-action>
                    <v-icon>{{link.icon}}</v-icon>
                </v-list-item-action>

                <v-list-item-content>
                <v-list-item-title>{{link.text}}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-list>
        </v-navigation-drawer>
      </v-card>  
    </nav>
</div>    
</template>

<script>

// import DashBoardHome from '../components/DashBoardHome.vue'
// import DashBoardInv from '../components/DashBoardInv.vue'
// import DashBoardSale from '../components/DashBoardSale.vue'
// import DashBoardReceive from '../components/DashBoardReceive.vue'
// import DashBoardCategory from '../components/DashBoardCategory.vue'
// import DashBoardPList from '../components/DashBoardPList.vue'
// import DashBoardSList from '../components/DashBoardSList.vue'
// import DashBoardCList from '../components/DashBoardCList.vue'
import DashBoardUsers from '../components/DashBoardUsers.vue'

export default {
     name: 'Admin',
    data(){
      return{
        drawer: false,
        links: [
          {icon: 'mdi-home-variant', text:'Home',},
          {icon: 'mdi-format-list-bulleted-square', text:'Inventory',},
          {icon: 'mdi-finance', text:'Sales',},
          {icon: 'mdi-package-down', text:'Receiving',},
          {icon: 'mdi-shape', text:'Category',},
          {icon: 'mdi-clipboard-list', text:'Product List',},
          {icon: 'mdi-account-arrow-left', text:'Supplier List',},
          {icon: 'mdi-account-supervisor', text:'Customer List',},
          {icon: 'mdi-account-group', text:'Users',},
        ],

      }
    },
    components: {
      // 'Dash-Home': DashBoardHome,
      // 'Dash-Inv': DashBoardInv,
      // 'Dash-Sale' : DashBoardSale,
      // 'Dash-Receive' : DashBoardReceive,
      // 'Dash-Categ': DashBoardCategory,
      // 'Dash-PList' : DashBoardPList,   
      // 'Dash-SList' : DashBoardSList,
      // 'Dash-CList': DashBoardCList,
      'Dash-Users' : DashBoardUsers,
     
    }
}
</script>
