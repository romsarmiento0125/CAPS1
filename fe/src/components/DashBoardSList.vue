<template>
  <div class="SupplierList">
      <v-row no-gutters>
<!-- column supplier form -->
        <v-col cols="3 pa-0">
          <v-container fluid>
            <v-row>
              <v-col>
                <v-card class="pb-3">
                  <v-card-title class="justify-center"> Supplier Form</v-card-title>
                      <v-spacer></v-spacer>
                      <v-divider></v-divider>
                  <v-form
                    class="pa-3"
                    >
                    <div>
                      <span>
                        Supplier:
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
                        Contact #:
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
                        Address:
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
<!-- closing column supplier form -->

<!-- column items -->
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
<!-- closing column items -->
      </v-row>
  </div>
</template>