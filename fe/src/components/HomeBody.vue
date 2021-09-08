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
              v-for="item in productItems"
              :key="item.id"
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
                  :src="require('../assets/items/'+item.Product_Image)"
                ></v-img>

                <v-card-title class="ma-0 pb-0">{{item.Product_Name}}</v-card-title>
                <!-- <v-card-subtitle class="ma-0 pb-0">{{item.Product_Description}}</v-card-subtitle> -->

                <v-card-actions
                  class="ma-0 py-0 pr-0"
                >
                  <div class="my-4 d-flex">
                    <v-icon
                      color="blue"
                    >
                      mdi-currency-php
                    </v-icon>
                    <span class="blue--text">{{item.Product_Price}}</span>
                  </div>

                  <v-spacer></v-spacer>

                  <v-btn
                    color="#1F5CD5"
                    text
                    x-large
                    class="pr-0"
                    to=""
                    @click="itemToCart(item.Product_Name, item.Product_Price, item.Product_Image, item.Product_Description, item.Product_Size, 1)"
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
      // items: [
      //   { iname: "1.jpg" },
      //   { iname: "2.jpg" },
      //   { iname: "3.jpg" },
      //   { iname: "4.jpg" },
      //   { iname: "5.jpg" },
      //   { iname: "6.jpg" },
      //   { iname: "7.jpg" },
      //   { iname: "8.jpg" },
      //   { iname: "9.jpg" },
      //   { iname: "10.jpg" },
      //   { iname: "11.jpg" },
      //   { iname: "12.jpg" },
      //   { iname: "13.jpg" },
      //   { iname: "14.jpg" },
      //   { iname: "15.jpg" },
      // ],
      items: {},
      toBuyItems: {},
      pName: [],
      pPrice: [],
      pImage: [],
      pDescription: [],
      pSize: [],
      pCount: [],
      itemToCartCounter: 0,
      bulCon: false,
    }),

    methods: {
      getItems() {
        console.log("get items");
        //  axios.get('http://127.0.0.1:8000/api/products')
        // .then(res => this.items = res.data)
        // .catch(err => console.error(err));
        this.$store.dispatch('getItems');
        
      },
      itemToCart(Name, Price, Image, Desc, Size, Count) {
        //console.log(pName + pPrice + pImage + pDescription + pSize);
        this.itemToCartCounter++;
        for(var n = 0; n < this.itemToCartCounter; n++){
          if(this.pName[n] == Name){
            console.log("checking if name already exist");
            this.pCount[n]++;
            console.log("This is pCount "+this.pCount[n]);
            this.bulCon = true;
            this.itemToCartCounter = this.itemToCartCounter - 1;
          }
        }
        if(this.bulCon){
          console.log('>> bulcon <<');
          console.log(this.itemToCartCounter);
          for(var m = 0; m < this.itemToCartCounter; m++){
            // this.toBuyItems.push({
            //   productName: this.pName[j],
            //   productPrice: this.pPrice[j],
            //   productImage: this.pImage[j],
            //   productDescription: this.pDescription[j],
            //   productSize: this.pSize[j]
            // });
            console.log("This is m " + m);
            console.log("Adding count");
            this.toBuyItems[m] = {};
            this.toBuyItems[m].id = m;
            this.toBuyItems[m].productName = this.pName[m];
            this.toBuyItems[m].productPrice = this.pPrice[m];
            this.toBuyItems[m].productImage = this.pImage[m];
            this.toBuyItems[m].productDescription = this.pDescription[m];
            this.toBuyItems[m].productSize = this.pSize[m];
            this.toBuyItems[m].productCount = this.pCount[m];
          }
        }
        else{
          console.log(">> bulcon else <<");
          for(var i = 0; i < this.itemToCartCounter; i++){
            console.log(this.itemToCartCounter);
            this.pName[this.itemToCartCounter-1] = Name;
            this.pPrice[this.itemToCartCounter-1] = Price;
            this.pImage[this.itemToCartCounter-1] = Image;
            this.pDescription[this.itemToCartCounter-1] = Desc;
            this.pSize[this.itemToCartCounter-1] = Size;
            this.pCount[this.itemToCartCounter-1] = Count;
            for(var j = 0; j < this.itemToCartCounter; j++){
              // this.toBuyItems.push({
              //   productName: this.pName[j],
              //   productPrice: this.pPrice[j],
              //   productImage: this.pImage[j],
              //   productDescription: this.pDescription[j],
              //   productSize: this.pSize[j]
              // });
              this.toBuyItems[j] = {};
              this.toBuyItems[j].id = j;
              this.toBuyItems[j].productName = this.pName[j];
              this.toBuyItems[j].productPrice = this.pPrice[j];
              this.toBuyItems[j].productImage = this.pImage[j];
              this.toBuyItems[j].productDescription = this.pDescription[j];
              this.toBuyItems[j].productSize = this.pSize[j];
              this.toBuyItems[j].productCount = this.pCount[j];
            }
          }
        }
        this.bulCon = false;
        console.log("Bulcon is false");
        console.log(this.toBuyItems);
        // this.toBuyItems = {
        //   productName: pName,
        //   productPrice: pPrice,
        //   productImage: pImage,
        //   productDescription: pDescription,
        //   productSize: pSize,
        // };
        // console.log(this.toBuyItems);

        console.log("items to cart");
        this.$store.commit('addToCart', this.toBuyItems);
        this.$store.commit('updateCounter', this.itemToCartCounter);
        console.log("------------");
      },
      // addToCart() {
      //   console.log("add to cart");
      //   if(this.customerInfos.Tag == "Customer"){
      //     console.log("login");
      //   }
      //   else{
      //     this.$router.push('/Login');
      //   }
      // },
      
    },

    beforeMount(){
      this.getItems();
    },

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      },
      productItems() {
        return this.$store.state.productItems;
      }
      // customerSaveItems() {
      //   return this.$store.state.customerSaveItems;
      // },
    }
  }
</script>

<!--
:src="require('../assets/items/'+ item.name)"
src="../assets/items/Great_taste_100g.png"
-->