<template>
  <div>
    <v-app-bar
      fixed
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
                src="../assets/LogoWh.png"
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
                to='/help'
              >
                <v-icon>mdi-help-circle-outline</v-icon>
                <span>Help</span>
              </v-btn>

              <v-btn
                dark
                text
                :to="{ name: 'LoginSignup', params: { nt: 'Sign Up'}}"
              >
                Sign Up
              </v-btn>

              <v-btn
                dark
                text
                class="rounded-0"
                style="border-left: 2px solid rgba(255, 255, 255, 0.5);"
                :to="{ name: 'LoginSignup', params: { nt: 'Login'}}"
              >
                Login
              </v-btn>
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

    }),

    computed: {
      itemCounter() {
        return this.$store.state.itemCounter;
      },
    },

  }
</script>

<style scoped>
  .nav span{
    font-size: 90%;
  }
</style>




<!-- <v-tabs
            right
            background-color="transparent"
            color="white"
            optional
            hide-slider
            >
              <v-tab
              class="white--text"
              >
                <v-icon>mdi-bell-outline</v-icon>
                <span>Notifications</span>
              </v-tab>
              <v-tab
              class="white--text"
              >
                Another Selection
              </v-tab>
              <v-tab
              class="white--text"
              >
                Items
              </v-tab>
              <v-tab
              class="white--text"
              >
                Another Screen
              </v-tab>
            </v-tabs> -->