<template>
  <div>
    <v-app-bar
      color="light-blue darken-1"
      height="auto"
      style="
        background: #039BE5;
        background: -webkit-linear-gradient(to right, #1F5CD5, #63ABE8);
        background: linear-gradient(to right, #1F5CD5, #63ABE8);"
    >
      <v-container fluid>
        <v-row class="">
          <v-col
            offset-lg="1"
            lg="1"
            sm="2"

          >
            <router-link to="/">
              <v-img
                contain
                src="../assets/3w.png"
                max-height="100px"
                max-width="100px"
              ></v-img>
            </router-link>
          </v-col>

          <v-col
            lg="9"
            sm="10"

          >
            <v-row justify="end" class="mr-2 mt-0 nav">
              <v-btn
                dark
                text
              >
                <v-icon>mdi-bell-outline</v-icon>
                <span>Notifications</span>
              </v-btn>

              <v-btn
                dark
                text
              >
                <v-icon>mdi-help-circle-outline</v-icon>
                <span>Help</span>
              </v-btn>

              <v-menu
                offset-y
                transition="slide-y-transition"
                bottom
              >
                <template v-slot:activator="{ on, attrs }">
                  <v-btn
                    dark
                    text
                    v-bind="attrs"
                    v-on="on"
                    class=""
                  >
                    <v-icon>mdi-account</v-icon>
                    <h4>{{customerInfos.First_Name}} {{customerInfos.Last_Name}}</h4>
                  </v-btn>
                </template>

                <v-list dense>
                  <v-list-item-group
                    v-model="selectedItem"
                    color="primary"
                    
                  >
                    <v-list-item
                      v-for="(item, n) in items"
                      :key="n"
                    >
                      <v-list-item-icon>
                        <v-icon v-text="item.icon"></v-icon>
                      </v-list-item-icon>
                      <v-list-item-content>
                        <v-list-item-title v-text="item.text" @click="accountButton(item.to)"></v-list-item-title>
                      </v-list-item-content>
                    </v-list-item>
                  </v-list-item-group>
                </v-list>
              </v-menu>
            </v-row>
            
            <v-row class="mr-4 mt-3">
              <v-container class="d-flex">
                <v-text-field
                  append-icon="mdi-magnify"
                  hide-details=""
                  outlined
                  dense
                  height="small"
                  background-color="white"
                  placeholder="Search for entire store here.."
                >
                </v-text-field>
                <v-btn
                  height="auto"
                  dark
                  text
                  to="/cart"
                >
                  <v-icon
                    large
                  >
                    mdi-cart-outline
                  </v-icon>
                  <span
                    class="white--text"
                  >
                    {{itemCounter}}
                  </span>
                </v-btn>
              </v-container>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
    </v-app-bar>
  </div>
</template>


<script>
  export default {
    data: () => ({
      selectedItem: 0,
      items: [
        { title: "Account", text: 'My Account', icon: 'mdi-account', to: "account"  },
        { title: "Purchase", text: 'My Purchase', icon: 'mdi-cart', to: "account"  },
      ],
    }),

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      },
      itemCounter() {
        return this.$store.state.itemCounter;
      },
    },
    
    methods: {
      accountButton(cond) {
        if(cond == "account"){
          this.$router.push({path: '/user'});
        }
        else if(cond == "admin"){
          console.log("Admin");
          alert("Admin");
        }
        else if(cond == "logout"){
          console.log("Logout");
          window.location.href = "http://localhost:8080/";
        }
      },
    },

    beforeMount(){
      var ob1 = { title: "Admin", text: 'Admin', icon: 'mdi-cog-outline', to: "admin" };
      var ob2 = { title: "Logout", text: 'Logout', icon: 'mdi-logout', to: "logout"  };
      if(this.customerInfos.Tag == "Admin"){
        this.items.push(ob1);
        this.items.push(ob2);
      }
      else{
        this.items.push(ob2);
      }
    },

    
  }
</script>

<style scoped>
  .nav span{
    font-size: 90%;
  }
</style>
