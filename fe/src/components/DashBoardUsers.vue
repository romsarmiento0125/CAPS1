<template>
  <div class="Sales">
    <div class=" d-flex justify-end">
      <v-btn 
        class="mx-5 my-5"
        depressed
        dark
        color="light-blue darken-4"
      >
       <v-icon left>mdi-plus</v-icon>  
       <span>New Users</span>
      </v-btn>
    </div>
    
    <v-card class="my-5 mx-5 oa-2">
      <v-card-title class="text-uppercase grey--text text--darken-3">
        Users</v-card-title>

      <v-divider class="pa-2"></v-divider>


      <v-container fluid container>
        <v-row class="grey--text text--darken-1 ">
          <v-col col-2>
            <v-card-title>
              #
            </v-card-title>
          </v-col>
          
          <v-col col-2>
            <v-card-title>
              Name
            </v-card-title>
          </v-col>

          <v-col col-2  >
            <v-card-title>
              Action
            </v-card-title>
          </v-col>  
        </v-row>
      </v-container>
    </v-card>
  </div>
</template
