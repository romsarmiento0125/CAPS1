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
            cols="2"
            class="d-flex align-center justify-end"
          >
            <v-btn
              color="primary"
            >
              Change Address
            </v-btn>
          </v-col>
        </v-row>
      </v-card>
    </v-container>

    <v-container>
      <div>
        <v-list>
          <v-list-item-group
            color="primary"
          >
            <v-list-item
              v-for="item in items"
              :key="item.id"
            >
              <v-list-item-content
                class="border ma-2 rounded-lg"
              >
                <v-row>
                  <v-col
                    cols="2"
                  >
                    <div>
                      <v-img
                        height="120px"
                        width="120px"
                        contain
                        :src="require('../assets/items/'+item.item_image)"
                      ></v-img>
                    </div>
                  </v-col>
                  <v-col
                    cols="9"
                  >
                    <div>
                      <p>{{item.item_name}}</p>
                      <p>{{item.item_desc}}</p>
                      <p>{{item.item_price}}</p>
                    </div>
                  </v-col>
                  <v-col
                    cols="1"
                  >
                    <div>
                      <p>{{item.item_count}}</p>
                    </div>
                  </v-col>
                </v-row>
              </v-list-item-content>
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </div>
    </v-container>

    <v-container>
      <div>
        <v-row>
          <v-col>
            <div>
              <h2>Xxxxxx Options</h2>
            </div>
          </v-col>
        </v-row>

        <v-divider></v-divider>

        <v-row>
          <v-col>
            <h3>Home Delivery</h3>
            <p>Receive by Xxxxxx</p>
            <p></p>
          </v-col>
          <v-col>

          </v-col>
        </v-row>
      </div>
    </v-container>
  </div>
</template>

<script>
  export default {
    name: "shopcart",

    data: () => ({
      items: [
        {id: 0, item_name: "Koko Crunch", item_desc: "Masarap na masarap", item_price: 156.50, item_count: 4, item_image: 'kokokrunch.jpg'},
        {id: 1, item_name: "Clover", item_desc: "Masarap na masarap", item_price: 15, item_count: 2, item_image: 'clover.jpg'},
        {id: 2, item_name: "Chippy", item_desc: "Masarap na masarap", item_price: 12, item_count: 1, item_image: 'chippy.jpg'},
      ],
    }),

    methods: {
      
    },
    
    beforeMount(){
      
    },

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      },
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