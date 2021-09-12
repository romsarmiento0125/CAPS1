<template>
  <div>
    <v-app-bar
      color="white"
      height="auto"
    >
      <v-container>
        <v-row>
          <v-col
            class=""
            cols="1"
          >
            <router-link
              to="/"
            >
              <v-img
              contain
                src="../assets/3.png"
                max-height="100px"
                max-width="100px"
                height="90%"
                width="90%"
              ></v-img>
            </router-link>
          </v-col>
          
          <v-col
            class="p-0"
            cols="11"
          >
            <div
              class="ali d-flex align-center mb-6"
            >
              <span
                class="navtxt pl-2"
              >
                Cookie Policy
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
  }
</script>

<style scoped>

  .navtxt{
    font-size: 2.0vw;
    color: gray;
    border-left: gray solid 1px;
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

