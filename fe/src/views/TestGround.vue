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
            @click="deleteItem()"
          >
            Delete
          </v-btn>

          <v-btn
            color="warning"
            class="mr-4"
            @click="updateItem()"
          >
            Update
          </v-btn>

          <v-btn
            color="primary"
            @click="getItem()"
          >
            Get
          </v-btn>

          <v-text-field
            label="Id"
            v-model="test.id"
          ></v-text-field>

        </v-form>
        <v-list>
          <v-list-item
            v-for="data in datas"
            :key="data.id"
          >
            <v-list-item-content>
              <div
                class="d-flex"
              >
                <p v-text="data.id + '-'"></p>
                <p v-text="data.name"></p>
              </div>
            </v-list-item-content>
          </v-list-item>
        </v-list>
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
          id: ""
        },
        datas: []
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
        console.log('add item');
        axios.post('http://127.0.0.1:8000/api/name/store',{
          test1: this.test
        })
        .then(res => this.name = res.data)
        .catch(err => console.error(err))
      },
      getItem() {
        console.log("get item");
        axios.get('http://127.0.0.1:8000/api/name')
        .then(res => this.datas = res.data)
        .catch(err => console.error(err))
        console.log(this.datas);
      },
      updateItem() {
        console.log("update item");
        axios.put('http://127.0.0.1:8000/api/name/' + this.test.id,{
          test1: this.test
        })
        .then(res => this.datas = res.data)
        .catch(err => console.error(err))
      },
      deleteItem() {
        console.log("delete item");
        axios.delete('http://127.0.0.1:8000/api/name/' + this.test.id)
        .then(res => console.log(res.data))
        .catch(err => console.error(err))
      }
    },
  }
</script>