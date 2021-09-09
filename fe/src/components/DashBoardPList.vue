<template>
  <div class="ProductList">
    <!-- <v-container class="d-flex"> -->
      <v-row no-gutters>
<!-- column product form -->
        <v-col cols="3 pa-0">
          <v-container fluid>
            <v-row>
              <v-col>
                <v-card class="pb-3">
                  <v-card-title class="justify-center"> Product Form</v-card-title>
                      <v-spacer></v-spacer>
                      <v-divider></v-divider>
                  <v-form
                    class="pa-3"
                    
                    >
                    <div>
                      <span>
                        SKU:
                      </span>

                      <v-text-field
                        outlined
                        dense
                        class="mt-1"
                        required
                      ></v-text-field>
                    </div>

                    <div>
                      <span>
                        Category:
                      </span>

                      <v-autocomplete
                        outlined
                        dense
                        required
                        cache-items
                        class="mt-1"
                      ></v-autocomplete>

                    </div>

                    <div>
                      <span>
                        Product Name:
                      </span>

                      <v-text-field
                        outlined
                        dense
                        class="mt-1"
                        required
                      ></v-text-field>
                    </div>

                    <div>
                      <span>
                        Description:
                      </span>

                      <v-text-field
                        outlined
                        dense
                        class="mt-1"
                        required
                        height="100"
                      ></v-text-field>
                    </div>

                    <div>
                      <span>
                        Product Price:
                      </span>

                      <v-text-field
                        outlined
                        dense
                        class="mt-1"
                        required
                      ></v-text-field>
                    </div>

                    <div class="d-flex justify-center">
                      <v-btn 
                      color="light-blue darken-4"
                      dark
                      class="mx-1 px-2"
                      >
                        <v-card-subtitle>Save</v-card-subtitle>
                      </v-btn>
                      <v-btn
                      color="grey darken-2"
                      dark
                      class="mx-1 px-1"
                      >
                        <v-card-subtitle>Cancel</v-card-subtitle>
                      </v-btn>
                    </div>
                  </v-form>
                </v-card>
              </v-col>
            </v-row> 
          </v-container>
        </v-col>
<!-- closing column product form -->

<!-- column Show and Search and Items -->
        <v-col cols="9"
          class="pr-2 py-0 "
          >
<!-- Show and Search -->
          <v-container fluid class="px-0 py-6">
            <v-card>
              <v-container fluid container>
                <v-row>
                  <v-col
                  cols="2"
                  >
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
                <v-spacer></v-spacer>
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
                </v-row>
              </v-container>
<!-- closing container show and search -->
              <v-divider></v-divider>
<!-- container for table and button below -->
               <v-container fluid container>
                <v-row>
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
<!-- button next and prev -->
                <div 
                class="d-flex 
                justify-end 
                align-center
                pr-3
                ">
                  <v-btn
                    depressed
                    color="white" 
                    text-center
                    >
                    <v-icon>mdi-chevron-left</v-icon>
                  </v-btn>
                    <span>1</span>
                  <v-btn
                    depressed
                    color="white"
                    >
                    <v-icon>mdi-chevron-right</v-icon>
                  </v-btn>
                </div>
<!--closing button next and prev -->
              </v-container>
            </v-card>
          </v-container>
        </v-col>
<!-- closing column show search and items-->
      </v-row>
  </div>
</template>