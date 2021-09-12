<template>
  <div>
    <v-app-bar
      color="white"
      height="auto"
    >
      <v-container>
        <v-row>
          <v-col
            cols="1"
          >
            <router-link
              to="/"
            >
              <v-img
              contain
                src="../assets/logoBL.png"
                max-height="100px"
                max-width="100px"
                height="90%"
                width="90%"
              ></v-img>
            </router-link>
          </v-col>
          <v-col
            class="p-0"
            cols="10"
          >
            <div
              class="ali d-flex align-center mb-6"
            >
              <span
                class="navtxt pl-2"
              >
                {{ navTitle }}
              </span>
            </div>
          </v-col>
        </v-row>
      </v-container>
    </v-app-bar>
    
    <div
      class="navbodydiv"
    ></div>

  </div>
</template>

<script>
  export default {
    data: () => ({
      
    }),

    created() {
      this.navTitle = this.$route.params.nt;
    }
  }
</script>

<style scoped>
  .navtxt {
    font-size: 2.5vw;
    border-left: black solid 1px;
  }

  .ali {
    height: 100%;
  }

  .navbodydiv {
    height: 20px;
    background: #039BE5;
    background: -webkit-linear-gradient(to right, #1F5CD5, #63ABE8);
    background: linear-gradient(to right, #1F5CD5, #63ABE8);
  }
</style>