<template>
  <div>
    <v-container
      fluid
      class="px-0 mt-3"
    >
      <v-card>
        <v-row>
          <v-col
            offset="1"
            cols="8"
          >
            <div
              class="my-2 py-2"
            >
              <h4>Delivery Address</h4>
              <p
                class="ma-0"
              >{{customerInfos.Home_Adress}} {{customerInfos.City_Adress}} {{customerInfos.Province_Adress}}</p>
            </div>
          </v-col>
          <v-col
            cols="3"
            class="d-flex align-center"
          >
            <v-btn
              color="primary"
            >
              Change Adress
            </v-btn>
          </v-col>
        </v-row>
      </v-card>
    </v-container>

    <v-container
      fluid
      class="px-0 my-7"
    >
      <v-card
        style="
        background: #039BE5;
        background: -webkit-linear-gradient(to right, #1F5CD5, #63ABE8);
        background: linear-gradient(to right, #1F5CD5, #63ABE8);
      "
      >
        <v-row>
          <v-col
            offset="5"
            cols="7"
          >
            <div
              class="uqta d-flex"
            >
              <p>Unit Price</p>
              <p>Quantity</p>
              <p>Total Price</p>
              <p>Actions</p>
            </div>
          </v-col>
        </v-row>
      </v-card>
    </v-container>

    <v-container
      fluid
      class="px-0"
    >
      <div>
        <v-list>
          <v-list-item-group
            color="primary"
          >
            <v-list-item
              v-for="item in items"
              :key="item.name"
            >
              <v-list-item-content
                class="border ma-2 rounded-lg"
              >
                <v-row
                >
                  <v-col
                    offset="1"
                    cols="4"
                  >
                    <div
                      class="d-flex align-center"
                    >
                      <v-checkbox

                      ></v-checkbox>
                      <v-img
                        height="120px"
                        width="120px"
                        contain
                        :src="require('../assets/items/'+item.item_image)"
                      ></v-img>
                      <v-list-item-title>{{item.item_name}} <br> {{item.item_name}}</v-list-item-title>
                    </div>
                  </v-col>
                  <v-col
                    cols="7"
                    class="d-flex align-center"
                  >
                    <div
                      class="d-flex align-center"
                    >
                      <div
                        class="up my-0 d-flex align-center justify-center"
                      >
                        <v-icon>
                          mdi-currency-php
                        </v-icon>
                        <span>{{item.item_price}}</span>
                      </div>

                      <div
                        class="qtt d-flex align-center justify-center"
                      >
                        <v-btn
                          depressed
                          color="transparent"
                          class=""
                        >
                          <v-icon
                            x-large
                          >
                            mdi-minus-box-outline
                          </v-icon>
                        </v-btn>
                        <p
                          class=" my-0"
                        >0</p>
                        <v-btn
                          depressed
                          color="transparent"
                        >
                          <v-icon
                            x-large
                          >
                            mdi-plus-box-outline
                          </v-icon>
                        </v-btn>
                      </div>

                      <div
                        class="tp my-0 d-flex align-center justify-center"
                      >
                        <v-icon>
                          mdi-currency-php
                        </v-icon>
                        <span>{{item.item_price}}</span>
                      </div>

                      <v-btn
                        class="act justify-center"
                        color="primary"
                        plain
                      >
                        Delete
                      </v-btn>
                      
                    </div>
                  </v-col>
                </v-row>
              </v-list-item-content>
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </div>
    </v-container>

    <v-container
      fluid
      class="px-0 mt-3"
    >
      <v-card>
        <v-row>
          <v-col
            offset="1"
            cols="5"
            class=""
          >
            <div
              class="d-flex align-center"
            >
              <v-checkbox

              ></v-checkbox>
              <p class="my-0">Select All</p>
            </div>
          </v-col>
          <v-col
            cols="5"
            class="d-flex align-center"
          >
            <div
              class="d-flex align-center"
            >
              <div
                class="d-flex"
              >
                <p class="my-0">Total</p>
                <p class="my-0">(0 Item):</p>
              </div>
              
              <div
                class="mx-1 my-0 d-flex align-center justify-center"
              >
                <v-icon
                  color="#0D47A1"
                >
                  mdi-currency-php
                </v-icon>
                <h3
                  class="totalprice"
                >99999</h3>
              </div>
              <v-btn
                class="act justify-center"
                color="primary"
              >
                Check Out
              </v-btn>
            </div>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
    
  </div>
</template>

<script>
  export default {
    name: "shopcart",

    data: () => ({
      items: [
        {item_name: "Koko Crunch", item_price: 156.50, item_image: 'kokokrunch.jpg'},
        {item_name: "Pancake Plus", item_price: 79.95, item_image: 'pancake.jpg'},
        {item_name: "Gardenia", item_price: 67.50, item_image: 'gardenia.png'},
      ],
    }),

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      }
    },
  }
</script>

<style>
  .uqta p{
    margin: 0px 50px;
    font-size: 1.10rem;
    color: white;
  }
  .border {
    border: grey solid 2px;
  }
  .up{
    width: 155px;
  }
  .qtt{
    width: 195px;
  }
  .tp{
    width: 160px;
  }
  .act{
    width: 180px;
  }
  .totalprice{
    color: #0D47A1;
  }
  p{
    color: black;
  }
</style>