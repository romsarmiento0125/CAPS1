<template>
  <div>
    <v-container
      class="pa-16"
    >
      <v-row>
        <v-col
          offset-xl="4"
          offset-lg="4"
          offset-md="3"
          offset-sm="2"
          xl="4"
          lg="4"
          md="6"
          sm="8"
        >
          <v-card
            class="rounded-xl pa-12"
          >
            <v-card-title
              class="font-weight-black pt-0"
            >
              Registered Customer
            </v-card-title>
            <v-card-subtitle
              class=""
            >
              If you have an account, sign in with your email address
            </v-card-subtitle>
            
            <v-divider></v-divider>
            
            <v-card-text
              class="pa-0 mt-5"
            >
              <span>
                Email
              </span>
              <v-text-field
                outlined
                dense
                class="mt-1"
                v-model="clientLogin.Email"
              ></v-text-field>
            </v-card-text>

            <v-card-text
              class="pa-0"
            >
              <span>
                Password
              </span>
              <v-text-field
                type="password"
                outlined
                dense
                class="mt-1"
                v-model="clientLogin.Password"
              ></v-text-field>
            </v-card-text>

            <v-card-text
              class="d-flex justify-end py-0 mt-n3"
            >
              <a
                href=""
                class=""
              >
                Forgot Your Password?
              </a>
            </v-card-text>

            <v-btn
              class="rounded-lg"
              color="primary"
              @click="userLogin"
            >
              Sign in
            </v-btn>

            <v-divider
              class="ma-5"
            ></v-divider>

            <v-card-text
              class="d-flex justify-center pb-0"
            >
              <v-btn
                color="blue darken-4"
                dark
                class="rounded-xl"
              >
                LOGIN WITH FACEBOOK
              </v-btn>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
    <!-- <v-list>
      <v-list-item
        v-for="customerInfo in customerInfos"
        :key="customerInfo.id"
      >
        <v-list-item-content>
          <div
            class="d-flex"
          >
            <p>{{customerInfo.First_Name}}</p>
            <p>gg</p>
            <p></p>
          </div>
        </v-list-item-content>
      </v-list-item>
    </v-list> -->
  </div>
</template>

<script>

  export default {
    name: 'Login',
    
    data: () => ({
      clientLogin:{
        Email: 'rom@gmail.com',
        Password: 'admin123',
      },
    }),

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      }
    },

    methods: {
      sendCredentials() {
        console.log('Login');
        axios.post('http://127.0.0.1:8000/api/login/store',{
          clientCred: this.clientLogin
        })
        .then(res => console.log(res.data))
        .catch(err => console.error(err))
      },
      userLogin() {
        console.log("User Login");
        this.$store.dispatch('getData', this.clientLogin);
        setTimeout(this.loginConfirmation, 1000);
      },
      loginConfirmation() {
        console.log('Login Confirmation');
        if(this.customerInfos == "Wrong credentials"){
          alert(this.customerInfos);
        }
        else{
          this.$router.push('/');
        }
      }
    }

  }
</script>