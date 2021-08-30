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
                    :counter="15"
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
                    outlined
                    dense
                    class="mt-1"
                    :counter="15"
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
                  Postal Code
                </span>
                <v-text-field
                  outlined
                  dense
                  class="mt-1"
                  :counter="4"
                  :rules="posCodeRules"
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
                class="pa-0 mt-1"
              >
                <div>
                  <span>
                    Gender
                  </span>
                  <v-radio-group v-model="radioGender" row class="mt-0">
                    <v-radio
                      label="Female"
                    ></v-radio>
                    <v-radio
                      label="Male"
                    ></v-radio>
                    <v-radio
                      label="Custom"
                    ></v-radio>
                  </v-radio-group>
                </div>
              </v-card-text>

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
      radioGender: 0,
      confirmPass: "",

      clientinfo: {
          First_Name: "",
          Last_Name: "",
          Mobile_Number: "",
          Email: "",
          Home_Adress: "",
          Postal_code: "",
          City_Adress: "",
          Province_Adress: "",
          Birthday: "",
          Gender: "",
          Tag: "",
          Password: "",
          id: "",
        },
      clients: [],

      valid: true,
      fnameRules: [
        v => !!v || 'First name is required',
        v => (v && v.length <= 15) || 'Your name is too long',
      ],
      snameRules: [
        v => !!v || 'Surname is required',
        v => (v && v.length <= 15) || 'Your surname is too long',
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
      posCodeRules: [
        v => !!v || 'Postal code is required',
        v => (v && v.length <= 4) || 'Your postal code is too long',
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
      ],
      passRules: [
        v => !!v || 'Birhtday is required',
        v => (v && v.length >= 8) || 'Your password is too short',
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
        if(this.radioGender == 0){
          this.clientinfo.Gender = "Female";
        }
        else if( this.radioGender == 1){
          this.clientinfo.Gender = "Male";
        }
        else if( this.radioGender == 2){
          this.clientinfo.Gender = "Custom";
        }
        else{
          this.clientinfo.Gender = null;
        }
        if( this.clientinfo.Birthday){
          
        }
        console.log(this.clientinfo.Birthday);
        console.log(this.clientinfo.Gender);
        console.log(this.clientinfo.First_Name);
      }
    },

  }
</script>