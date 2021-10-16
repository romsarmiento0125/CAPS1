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
          >
            <v-list-item
              v-for="item in customerSaveItems"
              :key="item.id"
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
                        :value="true"
                        v-model="customerSelectedItems[item.id]"
                        :disabled="((item.productCount + itemQuantity[item.id]) <= 0)"
                        @click="itemCheckout(item.id, item.productName, item.productDescription ,item.productPrice, item.productCount, item.productImage)"
                      ></v-checkbox>
                      <v-img
                        height="120px"
                        width="120px"
                        contain
                        :src="require('../assets/items/'+item.productImage)"
                      ></v-img>
                      <v-list-item-title>{{item.productName}} <br> {{item.productDescription}} {{item.productSize}}</v-list-item-title>
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
                        <span>{{item.productPrice}}</span>
                      </div>

                      <div
                        class="qtt d-flex align-center justify-center"
                      >
                        <v-btn
                          depressed
                          color="transparent"
                          class=""
                          :disabled="((item.productCount + itemQuantity[item.id]) <= 0)"
                          @click="minusQuantity(item.id)"
                        >
                          <v-icon
                            x-large
                          >
                            mdi-minus-box-outline
                          </v-icon>
                        </v-btn>
                        <p
                          class=" my-0 px-2"
                        >{{(item.productCount + itemQuantity[item.id])}}</p>
                        <v-btn
                          depressed
                          color="transparent"
                          @click="addQuantity(item.id)"
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
                        <span
                        >{{(item.productPrice * (item.productCount + itemQuantity[item.id]))}}</span>
                      </div>

                      <v-btn
                        class="act justify-center"
                        color="primary"
                        plain
                        disabled
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
                :value="true"
                v-model="selectAllCheckBox"
                @click="checkAllCheckBox"
                disabled
              ></v-checkbox>
              <p class="my-0">Select All</p>
            </div>
          </v-col>
          <v-col
            cols="5"
            class="d-flex align-center justify-end"
          >
            <div
              class="d-flex align-center"
            >
              <div
                class="d-flex"
              >
                <p class="my-0">Total:</p>
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
                >{{totalPrice}}</h3>
              </div>
              <v-btn
                class="act justify-center"
                color="primary"
                @click="checkOutItems"
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
      // items: [
      //   {id: 0, item_name: "Koko Crunch", item_price: 156.50, item_image: 'kokokrunch.jpg'},
      //   {id: 1, item_name: "Pancake Plus", item_price: 79.95, item_image: 'pancake.jpg'},
      //   {id: 2, item_name: "Gardenia", item_price: 67.50, item_image: 'gardenia.png'},
      // ],
      customerSelectedItems: [],
      selectAllCheckBox: false,
      itemQuantity: [],
      itemTotalPrice: 0,
      temporaryStorage: {},
      itemId: [],
      itemName: [],
      itemDesc: [],
      itemPrice: [],
      itemCount: [],
      itemImage: [],
      totalPrice: 0,
    }),

    methods: {
      // getItems() {
      //   console.log("get items");
      //    axios.get('http://127.0.0.1:8000/api/products')
      //   .then(res => this.items = res.data)
      //   .catch(err => console.error(err));
      // },
      // itemCounter(count) {
      //   console.log(count);
      // },
      addQuantity(n) {
        console.log(n);
        this.itemQuantity.splice(n, 1, (this.itemQuantity[n] + 1))
        this.updatingTotalPrice();
      },
      minusQuantity(n) {
        console.log(n);
        this.itemQuantity.splice(n, 1, (this.itemQuantity[n] - 1))
        console.log(this.itemQuantity[n]);
        this.updatingTotalPrice();
        // if(this.itemQuantity[n] == (x * -1)){
        //   console.log('Stop');
        //   this.minusBtnCond = true;
        //   //this.itemQuantity.splice(n, 1, 0);
        // }
      },
      updatingTotalPrice() {
        console.log("Function Updating Total Price");
        console.log("This is item quantity " + this.itemQuantity);
        console.log("This is item price length " + this.itemPrice.length);
        this.totalPrice = 0;
        for(var k = 0; k < this.itemPrice.length; k++){
          if(this.itemName[k] != ""){
            this.totalPrice = this.totalPrice + (this.itemPrice[k] * (this.itemCount[k] + this.itemQuantity[k]));
            console.log("Total Price: " + this.totalPrice);
          }
        }
      },
      // deleteItem(itemId) {
      //   console.log("Delete item");
      //   console.log(itemId);
      //   this.$store.commit('deleteItem', itemId);
      // }
      itemCheckout(id, name, desc, price, count, image) {
        console.log("********************");
        console.log("item checkout " + id + name + price + count);
        console.log(this.customerSelectedItems[id]);
        console.log("This itemQuantity " + this.itemQuantity[id]);
        this.totalPrice = 0;
        this.totalItem = 0;
        if(this.customerSelectedItems[id]) {
          console.log("indexCounter " + this.indexCounter);
          console.log("add item");
          this.itemId.push("");
          this.itemName.push("");
          this.itemDesc.push("");
          this.itemPrice.push("");
          this.itemImage.push("");
          this.itemCount.push("");
          this.itemId.splice(id, 1, id);
          this.itemName.splice(id, 1, name);
          this.itemDesc.splice(id, 1, desc);
          this.itemPrice.splice(id, 1, price);
          this.itemImage.splice(id, 1, image);
          this.itemCount.splice(id, 1, (count + this.itemQuantity[id])); //Item Quantity have a problem
        }
        else{
          //remove item not function well
          //logical error
          console.log("remove item");
          this.itemId.splice(id, 1, "");
          this.itemName.splice(id, 1, "");
          this.itemDesc.splice(id, 1, "");
          this.itemPrice.splice(id, 1, "");
          this.itemImage.splice(id, 1, "");
          this.itemCount.splice(id, 1, "");
          this.totalPrice = 0;
          this.totalItem = 0;
        }
        console.log("The Data " + this.itemId + " " + this.itemName + " " + this.itemPrice + " " + this.itemCount);
        console.log("-----------------");
        console.log("This is item price " + this.itemPrice);
        console.log("This is item count " + this.itemCount);
        console.log("Calling updatingTotalPrice function");
        this.updatingTotalPrice();
        console.log("********************");
      },
      checkAllCheckBox() {
        console.log("Check all");
        if(this.selectAllCheckBox){
          console.log("Check all items");
          for(var i = 0; i < this.$store.state.itemCounter; i++){
            this.customerSelectedItems[i] = true;
          }

        }
        else{
          console.log("Uncheck all items");
          for(var i = 0; i < this.$store.state.itemCounter; i++){
            this.customerSelectedItems[i] = false;
          }
        }
      },
      checkOutItems() {
        console.log("OOOOOOOOOOOOOOOOOOOOOOO");
        console.log("Checkout button");
        var id = this.itemId;
        var name = this.itemName;
        var desc = this.itemDesc;
        var price = this.itemPrice;
        var count = this.itemCount;
        var image = this.itemImage;
        console.log("var id " + id);
        console.log("var name " + name);
        this.itemId = [];
        this.itemName = [];
        this.itemDesc = [];
        this.itemPrice = [];
        this.itemCount = [];
        this.itemImage = [];
        for(var i = 0; i < id.length; i++){
          if(name[i] != ""){
            this.itemId[i] = id[i];
            this.itemName[i] = name[i];
            this.itemDesc[i] = desc[i];
            this.itemPrice[i] = price[i];
            this.itemCount[i] = count[i];
            this.itemImage[i] = image[i];
          }
        }
        console.log("This itemId " + this.itemId);
        console.log("This itemName " + this.itemName);
        console.log("This itemDesc " + this.itemDesc);
        console.log("This itemPrice " + this.itemPrice);
        console.log("This itemCount " + this.itemCount);
        console.log("This itemImage " + this.itemImage);
        this.$emit('emitEventCB', false, this.itemId, this.itemName, this.itemDesc ,this.itemPrice, this.itemCount, this.itemImage);
      }
    },
    
    beforeMount(){
      for(var i = 0; i < 100; i++){
        this.itemQuantity[i] = 0;
      }
    },

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      },
      customerSaveItems() {
        return this.$store.state.customerSaveItems;
      },
      itemCounter() {
        return this.$store.state.itemCounter;
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