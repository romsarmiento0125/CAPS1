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

    <!-- <v-container>
      <div>
        <v-list>
          <v-list-item-group
            color="primary"
          >
            <v-list-item
              v-for="item in itemId"
              :key="item"
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
                        :src="require('../assets/items/'+itemImage[item])"
                      ></v-img>
                    </div>
                  </v-col>
                  <v-col
                    cols="9"
                  >
                    <div>
                      <p>{{itemName[item]}}</p>
                      <p>{{itemDesc[item]}}</p>
                      <p>{{itemPrice[item]}}</p>
                    </div>
                  </v-col>
                  <v-col
                    cols="1"
                  >
                    <div>
                      <p>{{itemCount[item]}}</p>
                    </div>
                  </v-col>
                </v-row>
              </v-list-item-content>
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </div>
    </v-container> -->

    <v-container
    >
      <div>
        <v-list
          class="grey lighten-2 "
        >
          <v-list-item-group
            class="grey lighten-2"
          >
            <v-list-item
              v-for="item in itemId"
              :key="item"
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
                        :src="require('../assets/items/'+itemImage[item])"
                      ></v-img>
                    </div>
                  </v-col>
                  <v-col
                    cols="9"
                    class="d-flex align-center"
                  >
                    <div>
                      <h3>{{itemName[item]}}</h3>
                      <p>{{itemDesc[item]}}</p>
                      <div
                        class="d-flex align-center"
                      >
                        <v-icon
                          color="black"
                        >
                          mdi-currency-php
                        </v-icon>
                        <h4>{{itemPrice[item]}}</h4>
                      </div>
                    </div>
                  </v-col>
                  <v-col
                    cols="1"
                    class="d-flex align-end"
                  >
                    <div>
                      <h2
                        class="ma-0"
                      >
                        X{{itemCount[item]}}
                      </h2>
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
      <div
        class="white pa-7"
      >
        <v-row>
          <v-col
            offset="1"
          >
            <div>
              <h2>Service Options</h2>
            </div>
          </v-col>
        </v-row>

        <v-divider></v-divider>

        <v-row>
          <v-col
          offset="1"
            cols="8"
          >
            <div
              class="mt-2"
            >
              <h3
                class="ma-0 pa-0"
              >Home Delivery</h3>
              <p
                class="ma-0 pa-0"
              >Receive by september 18 - 20</p>
              <p
                class="ma-0 pa-0"
              >Time 2:00 Pm - 4:30 Pm</p>
            </div>
          </v-col>
          <v-col
            cols="2"
            class="d-flex align-center justify-end"
          >
            <div

            >
              <v-menu offset-y>
                <template v-slot:activator="{ on, attrs }">
                  <v-btn
                    class="pa-2 "
                    plain
                    color="black"
                    outlined
                    large
                    v-bind="attrs"
                    v-on="on"
                  >
                    <v-icon>
                      mdi-currency-php
                    </v-icon>
                    <h2>70</h2>
                    
                    <v-icon
                      large
                      class="ml-2"
                      color="primary"
                    >
                      mdi-chevron-down
                    </v-icon>
                  </v-btn>
                </template>
                <v-list>
                  <v-list-item
                    v-for="(item, index) in serviceOptions"
                    :key="index"
                  >
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                  </v-list-item>
                </v-list>
              </v-menu>
            </div>
          </v-col>
        </v-row>
      </div>
    </v-container>

    <v-container
      fluid
      class="px-0 mt-3 mb-10"
    >
      <div
        class="white"
      >
        <v-row>
          <v-col
            offset="1"
            cols="7"
          >
            <div
              class="d-flex align-center white pa-5"
            >
              <h1
                class="pr-2"
              >Total Payment:</h1>
              <div
                class="d-flex align-center"
              >
                <v-icon
                  color="#0D47A1"
                >
                  mdi-currency-php
                </v-icon>
                <h1
                  class="blue--text text--darken-4"
                >
                  {{totalPrice}}
                </h1>
              </div>
            </div>
          </v-col>
          <v-col
            cols="3"
            class="d-flex align-center justify-center pa-0"
          >
            
              <v-btn
                height="100%"
                width="100%"
                dark
                color="#1565C0"
                class="rounded-0"
                value=""
                @click="orderFinish(customerInfos.Email)"
              >
                <h1>
                  Place Order
                </h1>
              </v-btn>
       
          </v-col>
        </v-row>
      </div>
    </v-container>
  </div>
</template>

<script>
  export default {
    name: "shopcart",
    props:{
      itemId: Array,
      itemName: Array,
      itemDesc: Array,
      itemPrice: Array,
      itemCount: Array,
      itemImage: Array
    },
    //props: ['itemName'],

    data: () => ({
      // items: [
      //   {id: 0, item_name: "Koko Crunch", item_desc: "Masarap na masarap", item_price: 156.50, item_count: 4, item_image: 'kokokrunch.jpg'},
      //   {id: 1, item_name: "Clover", item_desc: "Masarap na masarap", item_price: 15, item_count: 2, item_image: 'clover.jpg'},
      //   {id: 2, item_name: "Chippy", item_desc: "Masarap na masarap", item_price: 12, item_count: 1, item_image: 'chippy.jpg'},
      // ],
      serviceOptions: [
        { title: 'Home Delivery' },
        { title: 'Pickup' },
      ],
      totalPrice: 0,
    }),

    methods: {
      toObjectArray() {
        console.log("Convert array to object array");
        console.log(this.itemId);
        for(var i = 0; i < this.itemId.length; i++){
          console.log("This is loop");
          this.totalPrice = this.totalPrice + (this.itemPrice[i] * this.itemCount[i]);
        }
      },
      orderFinish(email) {
        console.log("Order Finish");
        var temp = {};
        if(email == null){
          this.$router.push({name: 'LoginSignup', params: { nt: 'Login' }})
        }
        else{
          for(var i = 0; i < this.itemId.length; i++){
            temp[i] = {};
            temp[i].customerEmail = email;
            temp[i].productName = this.itemName[i];
            temp[i].productPrice = this.itemPrice[i];
            temp[i].productCount = this.itemCount[i];
            temp[i].productTotalPrice = (this.itemPrice[i] * this.itemCount[i]);
            temp[i].orderTag = "Unfinish";
            console.log("Fire axios");
            this.saveOrder(temp[i]);
          }
          alert("Order Complete");
          this.$router.push('/user');
        }
        //console.log(temp);
      },
      saveOrder(data) {
        console.log("Save Order");
        console.log(data);
        axios.post('http://127.0.0.1:8000/api/additems/store',{
          register: data
        })
        .then(res => console.log(res.data))
        .catch(err => console.error(err));
      },
    },
    
    beforeMount(){
      this.toObjectArray();
      
    },

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      },
    },
  }
</script>

<style scoped>
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