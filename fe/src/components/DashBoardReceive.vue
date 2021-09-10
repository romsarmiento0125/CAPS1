<template>
  <div class="Receive">
<!-- button New Sales -->
    <div>
      <v-btn 
        class="mx-5 my-5"
        depressed
        dark
        color="light-blue darken-4"
      >
        <v-icon left>mdi-plus</v-icon>  
        <span>Receiving</span>
      </v-btn>
    </div>
<!-- closing Button -->
       <v-card class="my-5 mx-5 pa-2">
      <v-card-title class="text-uppercase grey--text text--darken-3">
        Receiving</v-card-title>
       <v-divider class="pa-2"></v-divider>
<!-- container Show and Search -->
      <v-container fluid container>
          <v-row>
<!-- column for show -->
           <v-col
           cols="2">
            <div class="d-flex  align-center">
              <v-card-subtitle>Show:</v-card-subtitle>
              <v-btn 
                depressed
                dense 
                outlined 
                color="grey"
              >
                  <span>1</span>
                  <v-icon right>mdi-chevron-down</v-icon>  
              </v-btn>
            </div>
           </v-col>
<!-- closing column show -->
           <v-spacer></v-spacer>
<!-- column Search -->
            <v-col 
              class=" d-flex 
              align-center
              "
              cols="4"
              >
              
              <v-text-field
                  append-icon="mdi-magnify"
                  hide-details=""
                  outlined
                  dense
                  height="small"
                  background-color="white"
                  placeholder=".."
                  class="pr-3"
                  
                >
                </v-text-field>
            </v-col>
<!-- closing column Search -->
          </v-row>
      </v-container>
<!-- closing container show and search -->

<!-- container product name and button below -->
      <v-container fluid container>
        <v-row class="grey--text text--darken-1">
          <v-col cols="2">
            <v-card-subtitle>
              #
            </v-card-subtitle>
          </v-col>
          
          <v-col cols="3">
            <v-card-subtitle>
              Product Name
            </v-card-subtitle>
          </v-col>

          <v-col cols="2">
            <v-card-subtitle>
              Stock In
            </v-card-subtitle>
          </v-col>

          <v-col cols="2">
            <v-card-subtitle>
              Stock Out
            </v-card-subtitle>
          </v-col>
          
          <v-col cols="3">
            <v-card-subtitle>
              Stock Available
            </v-card-subtitle>
          </v-col>
        </v-row>
<!-- Button Next and Prev -->
        <div 
        class="
        d-flex 
        justify-end 
        align-center
        pr-3
        ">
          <v-btn
            depressed
            color="white" 
            text-center
            >
            <v-icon>
              mdi-chevron-left
            </v-icon>
          </v-btn>
          <span>1</span>
          <v-btn
            depressed
            color="white"
            >
            <v-icon>
              mdi-chevron-right
            </v-icon>
          </v-btn>
        </div>
<!-- closing Button -->
      </v-container>
    </v-card>
  </div>
</template
