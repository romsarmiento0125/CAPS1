<template>
  <v-footer
    color="light-blue darken-1"
    height="auto"
    style="
      background: #039BE5;
      background: -webkit-linear-gradient(to right, #1F5CD5, #63ABE8);
      background: linear-gradient(to right, #1F5CD5, #63ABE8);"
    
  >
    <v-container
      class="my-15"
    >
      <v-row>
        <v-col
          cols="3"
        >
          <div
            class="d-flex flex-column mt-5"
          >
            <h4
              class="d-flex justify-center white--text"
            >
              ABOUT BAM
            </h4>
            <v-btn
              plain
              dark
              to="/about"
            >
              Terms & Condition
            </v-btn>
            
            <v-btn
              plain
              dark
              to="/about"
            >
              Privacy Policy
            </v-btn>

            <v-btn
              plain
              dark
              to="/about"
            >
              Cookie Policy
            </v-btn>
          </div>
        </v-col>

        <v-col
          cols="3"
        >
          <div
            class="d-flex flex-column justify-center mt-5"
          >
            <h4
              class="d-flex justify-center white--text"
            >
              Help & Information
            </h4>
            <v-btn
              plain
              dark
            >
              FAQs
            </v-btn>

            <v-btn
              plain
              dark
            >
              Contact Us
            </v-btn>
          </div>
        </v-col>

        <v-col
          cols="3"
        >
          <div
            class="d-flex flex-column justify-center mt-5"
          >
            <h4
              class="d-flex justify-center white--text"
            >
              Payment Options
            </h4>
            <v-btn
              plain
              dark
            >
              Cash On Delivery
            </v-btn>
            <v-btn
              plain
              dark
              to="/tg"
            >
              Test Ground
            </v-btn>
            <v-btn
              plain
              dark
              to="/tg1"
            >
              Test Ground 1
            </v-btn>
          </div>
        </v-col>

        <v-col
          cols="3"
        >
          <h4
            class="d-flex justify-center white--text"
          >
            BAM APP DOWNLOAD
          </h4>
          <div
            class="d-flex justify-center my-3"
          >
            <v-img
              contain
              src="../assets/3w.png"
              max-height="100px"
              max-width="100px"
            >
            </v-img>
          </div>
        
          <div
            class="d-flex justify-center"
          >
            <v-btn
              plain
              dark
            >
              Google Play
            </v-btn>
            <v-btn
              plain
              dark
            >
              App Store
            </v-btn>
          </div>
          
        </v-col>
      </v-row>
    </v-container>
  </v-footer>
</template>
