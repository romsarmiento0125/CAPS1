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
      <v-container>
        <v-row>
          <v-col
            cols="8"
          >
            <v-img
            contain
            src="../assets/3w.png"
            max-height="100px"
            max-width="100px"
          ></v-img>
          </v-col>

          <v-col
            cols="4"
          >
            <v-menu
              offset-y
            >
              <template v-slot:activator="{ on, attrs }">
                <v-btn
                  color="blue darken-4"
                  dark
                  v-bind="attrs"
                  v-on="on"
                  absolute
                  right
                >
                  Login
                </v-btn>
              </template>
              <v-list>
                <v-list-item
                  v-for="(item, index) in items"
                  :key="index"
                >
                  <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item>
              </v-list>
            </v-menu>
          </v-col>
        </v-row>

        <v-row>
          <v-col>
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
              >
                <v-icon
                  large
                >
                  mdi-cart-outline
                </v-icon>
              </v-btn>
            </v-container>
          </v-col>
        </v-row>
      </v-container>
    </v-app-bar>
  </div>
</template>

<script>
  export default {
    data: () => ({
      items: [
        { title: 'Notifications', icons: 'mdi-bell-outline' },
        { title: 'Help', icons: 'mdi-help-circle-outline' },
        { title: 'Sign Up', icons: '' },
        { title: 'Login', icons: '' },
      ],
    }),
  }
</script>

        <!--
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

            <v-btn
              dark
              text
            >
              Sign Up
            </v-btn>

            <v-btn
              dark
              text
              class="rounded-0"
              style="border-left: 2px solid rgba(255, 255, 255, 0.5);"
            >
              Login
            </v-btn>
        -->
          