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
                  outlined
                  dense
                  class="mt-1"
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
                ></v-text-field>
              </div>
              
            </v-card-text>

            <v-card-text
              class="pa-0"
            >
              <span>
                Mobile number or email address
              </span>
              <v-text-field
                outlined
                dense
                class="mt-1"
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
              ></v-text-field>
            </v-card-text>

            <v-card-text
              class="pa-0"
            >
              <span>
                Address
              </span>
              <v-text-field
                outlined
                dense
                class="mt-1"
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
                    v-model="date"
                    label="Birthday date"
                    prepend-icon="mdi-calendar"
                    readonly
                    v-bind="attrs"
                    v-on="on"
                  ></v-text-field>
                </template>
                <v-date-picker
                  v-model="date"
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
                <v-radio-group v-model="radioGroup" row class="mt-0">
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
              >
                Sign Up
              </v-btn>
            </v-card-text>
            
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
      date: null,
      menu: false,
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
    },

  }
</script>