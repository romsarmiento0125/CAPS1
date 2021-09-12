<template>
  <div>
    <div>
      <home-navbar1 class="d-none d-sm-flex" v-if="navCondition"></home-navbar1>
      <home-navbarlog class="d-none d-sm-flex" v-else></home-navbarlog>

      <home-navbar2 class="d-flex d-sm-none"></home-navbar2>

      <div
        class="ma-3 d-none d-sm-flex mt-16 pt-16"
      >
        <v-container>
          <v-row>
            <v-col
              cols="12"
            >
              <v-carousel
                v-model="model"
                class="rounded-xl"
                height="26vw"
                hide-delimiters
                hide-delimiter-background
                cycle
                progress
                >
                <v-carousel-item
                  v-for="(item,i) in items"
                  :key="i"
                  :src="item.src"
                  reverse-transition="fade-transition"
                  transition="fade-transition"
                >
                  
                </v-carousel-item>
              </v-carousel>  
            </v-col>
          </v-row>
        </v-container>
      </div>

      <div
        class="ma-5"
      >
        <v-container>
          <v-row>
            <v-col
              v-for="product in products"
              :key="product.pname"
              cols="3"
            >
              <v-card
                height="100%"
                class="rounded-lg"
              >
                <v-img
                  height="100%"
                  width="100%"
                  :src="require('../assets/products/' + product.pname)"
                  gradient="to top right, rgba(100,115,201,.33), rgba(25,32,72,.7)"
                  class="white--text align-end"
                >
                  <v-card-title>
                    {{product.ptitle}}
                  </v-card-title>

                </v-img>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </div>

      <home-body></home-body>
      <home-footer2></home-footer2>
    </div>

  </div>
</template>

<script>
  import NavBar1 from '../components/NavBar1.vue'
  import NavBar2 from '../components/NavBar2.vue'
  import HomeBody from '../components/HomeBody.vue'
  import Footer2 from '../components/Footer2.vue'
  import NavBarLog from '../components/NavBarLog.vue'
  
  export default{
    name: 'Home',

    components: {
      'home-navbar1': NavBar1,
      'home-navbar2': NavBar2,
      'home-body': HomeBody,
      'home-footer2': Footer2,
      'home-navbarlog': NavBarLog,
    },

    data: () => ({
      model: 0,
      items: [
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
        },
      ],
      products: [
        { pname: "Bakery.jpg", ptitle: "NAME" },
        { pname: "Beverage.jpg", ptitle: "NAME" },
        { pname: "Dairy.jpg", ptitle: "NAME" },
        { pname: "Egg.jpg", ptitle: "NAME" },
      ],
      navCondition: true, 
    }),

    methods: {
      navbarPicker() {
        if(this.customerInfos.Tag == "Customer" || this.customerInfos.Tag == "Admin"){
          this.navCondition = false;
        }
      }
    },
    beforeMount(){
        this.navbarPicker();
    },

    computed: {
      customerInfos() {
        return this.$store.state.customerInfos;
      }
    },
    
  }
</script>
