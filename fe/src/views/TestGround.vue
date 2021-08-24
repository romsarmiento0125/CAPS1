<template>
  <div>
    <home-navbar1 class="d-none d-sm-flex"></home-navbar1>
    <home-navbar2 class="d-flex d-sm-none"></home-navbar2>

    <div>
      <v-container
        class="my-10"
      >
        <v-form
          ref="form"
        >
          <v-text-field
            label="Name"
            v-model="test.name"
          ></v-text-field>

          <v-btn
            color="success"
            class="mr-4"
            @click="addItem()"
          >
            Add
          </v-btn>

          <v-btn
            color="error"
            class="mr-4"
          >
            Delete
          </v-btn>

          <v-btn
            color="warning"
          >
            Update
          </v-btn>
        </v-form>
      </v-container>
    </div>

    <home-footer2></home-footer2>
  </div>
</template>

<script>
  import NavBar1 from '../components/NavBar1.vue'
  import NavBar2 from '../components/NavBar2.vue'
  import Footer2 from '../components/Footer2.vue'

  //import { axios } from '@/plugins/axios'
  
  export default{
    name: 'Home',

    components: {
      'home-navbar1': NavBar1,
      'home-navbar2': NavBar2,
      'home-footer2': Footer2
    },

    data: function() {
      return{
        test: {
          name: "",
        }
      }
    },

    // methods: {
    //   addItem() {
    //     if( this.test1.name == "" ) {
    //       return;
    //     }

    //     axios.post('http://127.0.0.1:8000/api/test1/store', {
    //       test1: this.test1
    //     })
    //     .then( response => {
    //       if( response.status == 201 ) {
    //         this.test1.name == "";
    //       }
    //     })
    //     .catch( error => {
    //       console.log(error);
    //     })
    //   }
    // }


    // yung name na test1 dapat ay same doon sa ni rrequest sa store
    // yung name na test ay dapat katulad doon sa v-model
    methods: {
      addItem() {
        console.log(this.test.n2)
          axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/test1/store',
            data: {
              test1: this.test,
            }
        });
      }
    },
  }
</script>