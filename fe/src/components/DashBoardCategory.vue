<template>
  <div class="d-flex">
    <v-container fluid container>
      <v-row>
        <v-col class="cols-2 
        my-1 "
        >
          <v-card>
            <v-card-title> Product Form</v-card-title>
            <v-spacer></v-spacer>
            <v-card-subtitle> Sku</v-card-subtitle>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
    
    <v-container fluid container>
      <v-row>
        <v-card 
        class="
        d-flex 
        cols-2
        my-4 mx-4
        "
        >
          <v-col cols="3">
            <v-card-subtitle>#</v-card-subtitle>
          </v-col>

          <v-col cols="3">
            <v-card-title>Customer</v-card-title>
          </v-col>

          <v-col cols="3">
            <v-card-title>Action</v-card-title>
          </v-col>

        </v-card>
      </v-row>
    </v-container>
  </div>
</template>