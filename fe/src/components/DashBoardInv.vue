<template>
  <div class="Inventory">
    <v-card class="my-5 mx-5 oa-2">
      <v-card-title class="text-uppercase grey--text text--darken-3">
        Inventory</v-card-title>
       <v-divider class="pa-2"></v-divider>

       
         <v-container fluid container>
          <v-row>
           <v-col 
           class="d-flex cols-2"
           >
             <h3 class="pa-1 grey--text text--darken-1">Show: </h3>
              <v-btn
                height="auto"
                depressed
                dense 
                outlined 
                color="grey"
              >
                  <span class="grey--text text--darken-1">1</span>
                  <v-icon right>mdi-chevron-down</v-icon>  
              </v-btn>
            </v-col>
            <v-col>
              <v-text-field
                  append-icon="mdi-magnify"
                  hide-details=""
                  outlined
                  dense
                  height="small"
                  background-color="white"
                  placeholder=".."
                >
                </v-text-field>
            </v-col>
          </v-row>
         </v-container>
       
      <v-container fluid container>
        <v-row class="grey--text text--darken-1">
          <v-col cols-2>
            <v-card-title>
              #
            </v-card-title>
          </v-col>
          
          <v-col cols-2>
            <v-card-title>
              Product Name
            </v-card-title>
          </v-col>

          <v-col cols-2>
            <v-card-title>
              Stock In
            </v-card-title>
          </v-col>

          <v-col cols-2>
            <v-card-title>
              Stock Out
            </v-card-title>
          </v-col>
          
          <v-col cols-2>
            <v-card-title>
              Stock Available
            </v-card-title>
          </v-col>
        </v-row>
        
        <!-- <v-row class="justify-end">
          <v-col cols="2 d-flex">
            <v-btn
            depressed
            >Previous</v-btn>
          </v-col>

          <v-col cols="2">
            <v-btn
            depressed
            >Next</v-btn>
          </v-col> 
        </v-row> -->
        <div class="d-flex justify-end align-self">
          <v-btn
            depressed
            color="white" 
            fab
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
            fab
            >
            <v-icon>
              mdi-chevron-right
            </v-icon>
          </v-btn>

        </div>
      </v-container>
    </v-card>
  </div>
</template
