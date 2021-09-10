<template>
  <div>
    <v-main class="grey lighten-3">
      <v-container
        fluid
      >
        <v-row>
          <v-col
            offset="1"
            cols="2"
          >
            <div>
              <v-sheet
                rounded="lg"
                class="ma-0"
                color="primary"
              >
                <div
                  class="d-flex align-center"
                >
                  <v-avatar
                    class="my-2 ml-2"
                    color="white"
                    size="64"
                  >
                    <span>RS</span>
                  </v-avatar>
                </div>
                <div
                  class="ml-2 mb-2"
                >
                  <h4
                    class="white--text"
                  >{{customerInfos.First_Name}} {{customerInfos.Last_Name}}</h4>
                </div>
                

                <v-divider></v-divider>
                
                <v-list
                  class="rounded-b-lg"
                >
                  <v-list-item
                    v-for="(option, n) in options"
                    :key="n"
                  >
                    <v-list-item-icon>
                      <v-icon v-text="option.icon"></v-icon>
                    </v-list-item-icon>
                    <v-list-item-content>
                      <v-list-item-title>
                        {{option.text}}
                      </v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
              </v-sheet>
            </div>
          </v-col>

          <v-col
            cols="8"
          >
            <us-useraccountacc v-if="false"></us-useraccountacc>
            
            <us-userapurchasebody></us-userapurchasebody>

          </v-col>
        </v-row>
      </v-container>
    </v-main>
    
  </div>
</template>

<script>
  import UserPurchaseBody from '../components/UserPurchaseBody.vue'
  import UserAccountAcc from '../components/UserAccountAcc.vue'

  export default {
    components: {
      'us-userapurchasebody': UserPurchaseBody,
      'us-useraccountacc': UserAccountAcc
    },

    data: () => ({
      options: [
        { title: "Account", text: 'My Account', icon: 'mdi-account'},
        { title: "Purchase", text: 'My Purchase', icon: 'mdi-cart'},
        { title: "Notifications", text: 'Notifications', icon: 'mdi-bell'},
        { title: "Help", text: 'Help', icon: 'mdi-help'},
      ],
    }),

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      }
    },
  }
</script>

