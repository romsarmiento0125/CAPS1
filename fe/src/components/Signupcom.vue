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
            <v-form
              ref="form"
              v-model="valid"
              lazy-validation
            >
              <v-card-title
                class="font-weight-black pt-0"
              >
                Create an Account
              </v-card-title>
              <v-card-subtitle
                class=""
              >
                It's quick and easy
              </v-card-subtitle>
              
              <v-divider></v-divider>
              
              <v-card-text
                class="d-flex pa-0 mt-5"
              >
                <div>
                  <span>
                    First name
                  </span>
                  <v-text-field
                    v-model="clientinfo.First_Name"
                    outlined
                    dense
                    class="mt-1"
                    :rules="fnameRules"
                    required
                  ></v-text-field>
                </div>
                
                <v-spacer></v-spacer>

                <div>
                  <span>
                    Surname
                  </span>
                  <v-text-field
                    v-model="clientinfo.Last_Name"
                    outlined
                    dense
                    class="mt-1"
                    :rules="snameRules"
                    required
                  ></v-text-field>
                </div>
                
              </v-card-text>

              <v-card-text
                class="pa-0"
              >
                <span>
                  Email Address
                </span>
                <v-text-field
                  v-model="clientinfo.Email"
                  outlined
                  dense
                  class="mt-1"
                  :rules="emailRules"
                  required
                ></v-text-field>
              </v-card-text>

              <v-card-text
                class="pa-0"
              >
                <span>
                  Mobile Number
                </span>
                <v-text-field
                  v-model="clientinfo.Mobile_Number"
                  outlined
                  dense
                  class="mt-1"
                  :counter="11"
                  :rules="mobileNumRules"
                  required
                ></v-text-field>
              </v-card-text>

              <v-card-text
                class="pa-0"
              >
                <span>
                  Home Adress
                </span>
                <v-text-field
                  v-model="clientinfo.Home_Adress"
                  outlined
                  dense
                  class="mt-1"
                  :counter="80"
                  :rules="homeRules"
                  required
                ></v-text-field>
              </v-card-text>

              <v-card-text
                class="pa-0"
              >
                <span>
                  City
                </span>
                <v-text-field
                  v-model="clientinfo.City_Adress"
                  outlined
                  dense
                  class="mt-1"
                  :counter="20"
                  :rules="cityRules"
                  required
                ></v-text-field>
              </v-card-text>

              <v-card-text
                class="pa-0"
              >
                <span>
                  Province
                </span>
                <v-text-field
                  v-model="clientinfo.Province_Adress"
                  outlined
                  dense
                  class="mt-1"
                  :counter="20"
                  :rules="provinceRules"
                  required
                ></v-text-field>
              </v-card-text>

              <v-card-text
                class="pa-0"
              >
                <span>
                  New Password
                </span>
                <v-text-field
                  v-model="clientinfo.Password"
                  type="password"
                  outlined
                  dense
                  class="mt-1"
                  :rules="passRules"
                  required
                ></v-text-field>
              </v-card-text>

              <v-card-text
                class="pa-0"
              >
                <span>
                  Confirm Password
                </span>
                <v-text-field
                  v-model="confirmPass"
                  type="password"
                  outlined
                  dense
                  class="mt-1"
                  :rules="passRules"
                  required
                ></v-text-field>
              </v-card-text>

              <div>
                <span>
                  Birthday
                </span>
                <v-menu
                  ref="menu"
                  v-model="menu"
                  :close-on-content-click="false"
                  transition="scale-transition"
                  offset-y
                  min-width="auto"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-text-field
                      v-model="clientinfo.Birthday"
                      label="Birthday date"
                      prepend-icon="mdi-calendar"
                      readonly
                      v-bind="attrs"
                      v-on="on"
                    ></v-text-field>
                  </template>
                  <v-date-picker
                    v-model="clientinfo.Birthday"
                    :active-picker.sync="activePicker"
                    :max="(new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10)"
                    min="1950-01-01"
                    @change="save"
                  ></v-date-picker>
                </v-menu>
              </div>

              <v-card-text
                class="d-flex justify-center pb-0"
              >
                <v-btn
                  color="blue darken-4"
                  dark
                  class="rounded-lg"
                  @click="register()"
                  
                >
                  Sign Up
                </v-btn>
              </v-card-text>
            </v-form>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>

<script>

  export default {
    data: () => ({
      activePicker: null,
      menu: false,
      confirmPass: "",

      clientinfo: {
          First_Name: "",
          Last_Name: "",
          Mobile_Number: "",
          Email: "",
          Home_Adress: "",
          City_Adress: "",
          Province_Adress: "",
          Birthday: "",
          Tag: "Customer",
          Password: "",
          id: "",
        },
      clients: {},
      emailValidation: {},

      valid: true,
      fnameRules: [
        v => !!v || 'First name is required',
        v => (v && v.length <= 100) || 'Your name is too long',
      ],
      snameRules: [
        v => !!v || 'Surname is required',
        v => (v && v.length <= 100) || 'Your surname is too long',
      ],
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      mobileNumRules: [
        v => !!v || 'Mobile umber is required',
        v => (v && v.length == 11) || 'Mobile number is invalid',
      ],
      homeRules: [
        v => !!v || 'Address is required',
        v => (v && v.length <= 80) || 'Your address is too long',
      ],
      cityRules: [
        v => !!v || 'City is required',
        v => (v && v.length <= 20) || 'Your city name is too long',
      ],
      provinceRules: [
        v => !!v || 'Province is required',
        v => (v && v.length <= 20) || 'Your province name is too long',
      ],
      passRules: [
        v => !!v || 'Password is required',
        v => (v && v.length >= 8) || 'Your password is too short',
        v => (v && v.length <= 64) || 'Your password is too long',
      ],
    }),
    watch: {
      menu (val) {
        val && setTimeout(() => (this.activePicker = 'YEAR'))
      },
    },
    methods: {
      save (date) {
        this.$refs.menu.save(date)
      },
      register() {
        this.$refs.form.validate()

        if( this.clientinfo.Birthday === ""){
          alert("Birthday is required");
        }
        else{
          console.log("gg");
          if( this.clientinfo.First_Name != "" && this.clientinfo.Last_Name != "" && this.clientinfo.Email != "" && this.clientinfo.Mobile_Number.length == 11
            && this.clientinfo.Home_Adress != "" && this.clientinfo.City_Adress != "" && this.clientinfo.Province_Adress != ""
            && this.clientinfo.Birthday != "" && this.clientinfo.Password.length >= 8
          ){
            if( this.clientinfo.First_Name.length <= 15 && this.clientinfo.Last_Name.length <= 15 && this.clientinfo.Home_Adress.length <= 80
              && this.clientinfo.City_Adress.length <= 20 && this.clientinfo.Province_Adress.length <= 20
              && this.clientinfo.Password.length <= 64
            ){
              if( this.clientinfo.Password == this.confirmPass){
                console.log("Validation start.");
                axios.get('http://127.0.0.1:8000/api/clients')
                .then(res => this.emailDuplicationChecking(res.data))
                .catch(err => console.error(err));
              }
              else{
                alert("Password does not match.");
              }
            }
            else{
              alert("Check your inputs.");
            }
          }
          else{
            alert("Check your inputs.");
          }
        }
      },
      emailDuplicationChecking(data) {
        console.log('duplication checking');
        this.emailValidation = JSON.parse(JSON.stringify(data));
        console.log(this.emailValidation.length);
        var tf = true;
        for(var i = 0; i < this.emailValidation.length; i++){
          if(this.clientinfo.Email == this.emailValidation[i]['Email']){
            alert("Email already exist.");
            tf = false;
            i = this.emailValidation.length + 1;
          }
        }
        if(tf){
          this.axiosFire();
        }
      },
      axiosFire() {
        axios.post('http://127.0.0.1:8000/api/clients/store',{
          register: this.clientinfo
        })
        .then(res => this.goingHome(res.data))
        .catch(err => console.error(err));
      },
      goingHome(data) {
        this.clients = data;
        console.log(this.clients);
        alert("Account created successfully");
        //window.location.href = "http://localhost:8080/Login";
        this.$router.push({path: '/'});
      }
    },

  }
</script>