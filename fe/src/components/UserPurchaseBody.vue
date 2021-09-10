<template>
  <div>
    <v-container
      fluid
      class="px-0 mb-1"
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
          >
            <div
            >
              <v-tabs
                dark
                background-color="transparent"
                grow
              >
                <v-tab>All</v-tab>
                <v-tab
                  @click="getOrder"
                >To Pack</v-tab>
                <v-tab>To Receive</v-tab>
                <v-tab>To Pickup</v-tab>
                <v-tab>Complete</v-tab>
                <v-tab>Cancelled</v-tab>
              </v-tabs>
            </div>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
    <v-container
      fluid
      class="pa-0 ma-0"
    >
      <v-sheet
        rounded="lg"
      >
        <div>
          <v-list
            class=""
          >
            <v-list-item-group
              class=""
            >
              <v-list-item
                v-for="order in items"
                :key="order.id"
              >
                <v-list-item-content
                  class="border ma-2 rounded-lg"
                >
                  <v-row
                    class="white"
                  >
                    <v-col
                      cols="2"
                    >
                      <div
                        class="d-flex justify-end"
                      >
                        <v-img
                          height="120px"
                          width="120px"
                          contain
                          :src="require('../assets/items/'+order.item_image)"
                        ></v-img>
                      </div>
                    </v-col>
                    <v-col
                      cols="6"
                      class="d-flex align-center"
                    >
                      <div>
                        <h3>{{order.item_name}}</h3>
                        <p
                          class="mb-2"
                        >{{order.item_desc}}</p>
                        <div
                          class="d-flex align-center"
                        >
    
                          <v-icon
                            color="black"
                          >
                            mdi-currency-php
                          </v-icon>
                          <h4>{{order.item_price}}</h4>

                          <h4
                            class="pl-1"
                          >x {{order.item_count}}</h4>
                        </div>
                        <div
                        class="d-flex pt-1 align-end"
                      >
                        <h3>Total: </h3>
                        <v-icon
                          color="blue darken-3"
                        >
                            mdi-currency-php
                        </v-icon>
                        <h3
                          class="ma-0 blue--text text--darken-3"
                        >
                          {{order.item_price * order.item_count}}
                        </h3>
                      </div>
                      </div>
                    </v-col>
                    <v-col
                      cols="4"
                      class="d-flex align-center justify-center blue darken-1"
                    >
                      <div
                        class=""
                      >
                        <h1
                          class="white--text pa-4"
                        >{{order.orderTag}}</h1>
                      </div>
                      
                    </v-col>
                  </v-row>
                </v-list-item-content>
              </v-list-item>
            </v-list-item-group>
          </v-list>
        </div>
      </v-sheet>
    </v-container>
  </div>
</template>

<script>
  export default {
    data: () => ({
      items: [
        {id: 0, item_name: "", item_desc: "", item_price: 0, item_count: 0, item_image: '', orderTag: ''},
        // {id: 1, item_name: "Clover", item_desc: "Masarap na masarap", item_price: 15, item_count: 2, item_image: 'clover.jpg', orderTag: 'To Pack'},
        // {id: 2, item_name: "Chippy", item_desc: "Masarap na masarap", item_price: 12, item_count: 1, item_image: 'chippy.jpg', orderTag: 'Complete'},
        // {id: 3, item_name: "Pancake Plus", item_desc: "Masarap na masarap", item_price: 79.95, item_count: 1, item_image: 'pancake.jpg', orderTag: 'Complete'},
        // {id: 4, item_name: "Tang", item_desc: "Masarap na masarap", item_price: 17, item_count: 10, item_image: 'tang.jpg', orderTag: 'To Receive'},
        // {id: 5, item_name: "Yakult", item_desc: "Masarap na masarap", item_price: 45, item_count: 1, item_image: 'yakult.jpg', orderTag: 'To Pickup'},
      ],
      orders: {},
      customerOrders: {},
      customerEmail: "",
    }),

    methods: {
      getOrder(){
        console.log("Get Order");
        axios.get('http://127.0.0.1:8000/api/additems')
        .then(res => this.saveOrders(res.data))
        .catch(err => console.error(err));
      },
      saveOrders(data){
        this.customerEmail = this.customerInfos.Email;
        this.orders = data;
        console.log(this.customerEmail);
        console.log(this.orders);
        console.log(this.orders.length);
        for(var i = 0; i < this.orders.length; i++){
          console.log("-----loop-----");
          if(this.customerEmail == this.orders[i]["Customer_Email"]){
            console.log("save items");
            this.customerOrders[i] = {};
            this.customerOrders[i].id = i;
            this.customerOrders[i].customer_email = this.orders[i]["Customer_Email"];
            this.customerOrders[i].item_name = this.orders[i]["Product_Name"];
            this.customerOrders[i].item_desc = this.orders[i]["Product_Desc"];
            this.customerOrders[i].item_price = this.orders[i]["Product_Price"];
            this.customerOrders[i].item_count = this.orders[i]["Product_Count"];
            this.customerOrders[i].item_tprice = this.orders[i]["Product_TPrice"];
            this.customerOrders[i].item_image = this.orders[i]["Product_Image"];
            this.customerOrders[i].orderTag = this.orders[i]["OrderTag"];
          }
        }
        console.log("This is customer orders");
        console.log(this.customerOrders);
        this.items = this.customerOrders;
      }
    },

    beforeMount() {
      this.getOrder();
    },

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      }
    },
  }
</script>

<style scoped>
  .border {
    border: grey solid 2px;
  }
</style>