<template>
  <div class="grey lighten-4">
    <v-container>
        <v-row>
          <v-col
            offset-lg="1"
            offset-xl="1"
            cols="12"
            sm="12"
            md="12"
            lg="10"
            xl="10"
          >
            <v-row>
              <v-col
                v-for="item in items"
                :key="item.title"
                cols="6"
                sm="4"
                md="3"
                lg="3"
                xl="2"
              >
                <v-card
                  height="100%"
                >
                  <v-img
                    height="65%"
                    :src="require('../assets/items/'+item.iname)"
                  ></v-img>

                  <v-card-title class="ma-0 pb-0">TEST</v-card-title>

                  <v-card-actions
                    class="ma-0 py-0 pr-0"
                  >
                    <div class="my-4 d-flex">
                      <v-icon
                        color="blue"
                      >
                        mdi-currency-php
                      </v-icon>
                      <span class="blue--text">99999</span>
                    </div>

                    <v-spacer></v-spacer>

                    <v-btn
                      color="#1F5CD5"
                      text
                      x-large
                      class="pr-0"
                    >
                      <v-icon
                        size="60"
                      >mdi-plus-box</v-icon>
                    </v-btn>
                  </v-card-actions>
                </v-card>
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
  </div>
</template>

<script>
export default {
  data: () => ({
      items: [
        { iname: "1.jpg" },
        { iname: "2.jpg" },
        { iname: "3.jpg" },
        { iname: "4.jpg" },
        { iname: "5.jpg" },
        { iname: "6.jpg" },
        { iname: "7.jpg" },
        { iname: "8.jpg" },
        { iname: "9.jpg" },
        { iname: "10.jpg" },
        { iname: "11.jpg" },
        { iname: "12.jpg" },
        { iname: "13.jpg" },
        { iname: "14.jpg" },
        { iname: "15.jpg" },
      ],
    }),
}
</script>

<!--
:src="require('../assets/items/'+ item.name)"
src="../assets/items/Great_taste_100g.png"
-->