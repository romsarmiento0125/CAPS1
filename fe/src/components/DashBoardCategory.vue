<template>
  <div class="Category">
    <!-- <v-container class="d-flex"> -->
      <v-row no-gutters>
<!-- column Product Form -->
        <v-col cols="3 pa-0">
          <v-container fluid>
            <v-row>
              <v-col>
                <v-card class="pb-3">
                  <v-card-title class="justify-center"> Customer Form</v-card-title>
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
<!-- closing column Product Form -->

<!-- column item list -->
        <v-col cols="9"
          class="pr-2 py-0 "
          >

          <v-container fluid class="px-0 py-6">
            <v-card>
              <v-row>
                <v-col >
                  <v-card-subtitle>#</v-card-subtitle>
                </v-col>

                <v-col >
                  <v-card-subtitle>Customer</v-card-subtitle>
                </v-col>

                <v-col >
                  <v-card-subtitle>Action</v-card-subtitle>
                </v-col>
              </v-row>
            </v-card>
          </v-container>
        </v-col>
<!-- closing item list -->
      </v-row>
  </div>
</template>