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

          <v-text-field
            label="Description"
            v-model="test.desc"
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
            class="mr-4"
            @click="getItem()"
          >
            Get
          </v-btn>

          <v-btn
            color="primary"
            @click="validateItem()"
          >
            Validate and Add
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
                <p v-text="data.id + '<>'"></p>
                <p v-text="data.name + '<>'"></p>
                <p v-text="data.desc"></p>
              </div>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-container>
    </div>

    <v-spacer></v-spacer>
    <v-divider></v-divider>
    <v-spacer></v-spacer>

    <div>
      <v-container
        class="my-10"
      >
        <v-form
          ref="form"
        >
          <v-text-field
            label="First Name"
            v-model="clientinfo.First_Name"
          ></v-text-field>

          <v-text-field
            label="Last Name"
            v-model="clientinfo.Last_Name"
          ></v-text-field>

          <v-text-field
            label="Email"
            v-model="clientinfo.Email"
          ></v-text-field>

          <v-text-field
            label="Mobile Number"
            v-model="clientinfo.Mobile_Number"
          ></v-text-field>

          <v-text-field
            label="Adress"
            v-model="clientinfo.Home_Adress"
          ></v-text-field>

          <v-text-field
            label="Postal Code"
            v-model="clientinfo.Postal_code"
          ></v-text-field>

          <v-text-field
            label="City"
            v-model="clientinfo.City_Adress"
          ></v-text-field>

          <v-text-field
            label="Province"
            v-model="clientinfo.Province_Adress"
          ></v-text-field>

          <v-text-field
            label="Birthday"
            v-model="clientinfo.Birthday"
          ></v-text-field>

          <v-text-field
            label="Gender"
            v-model="clientinfo.Gender"
          ></v-text-field>

          <v-text-field
            label="Tag"
            v-model="clientinfo.Tag"
          ></v-text-field>

          <v-text-field
            label="Password"
            v-model="clientinfo.Password"
          ></v-text-field>

          <v-btn
            color="success"
            class="mr-4"
            @click="addItemO()"
          >
            Add
          </v-btn>

          <v-btn
            color="error"
            class="mr-4"
            @click="deleteItemO()"
          >
            Delete
          </v-btn>

          <v-btn
            color="warning"
            class="mr-4"
            @click="updateItemO()"
          >
            Update
          </v-btn>

          <v-btn
            color="primary"
            @click="getItemO()"
          >
            Get
          </v-btn>

          <v-text-field
            label="Id"
            v-model="clientinfo.id"
          ></v-text-field>

        </v-form>
        <v-list>
          <v-list-item
            v-for="client in clients"
            :key="client.id"
          >
            <v-list-item-content>
              <div
                class="font-weight-black"
              >
                <p v-text="'ID: ' + client.id"></p>
                <p v-text="'First Name: ' + client.First_Name"></p>
                <p v-text="'Last Name: ' + client.Last_Name"></p>
                <p v-text="'Email: ' + client.Email"></p>
                <p v-text="'Mobile #: ' + '0' + client.Mobile_Number"></p>
                <p v-text="'Adress: ' + client.Home_Adress"></p>
                <p v-text="'Postal Code: ' + client.Postal_code"></p>
                <p v-text="'City: ' + client.City_Adress"></p>
                <p v-text="'Province: ' + client.Province_Adress"></p>
                <p v-text="'Birthday: ' + client.Birthday"></p>
                <p v-text="'Gender: ' + client.Gender"></p>
                <p v-text="'Tag: ' + client.Tag"></p>
                <p v-text="'Password: ' + client.Password"></p>
              </div>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-container>
    </div>

    <!-- <div>
      <v-container
        class="my-10"
      >
        <v-form
          ref="form"
        >
          <v-text-field
            label="Name"
          ></v-text-field>

          <v-text-field
            label="Description"
          ></v-text-field>

          <v-btn
            color="success"
            class="mr-4"
            @click="addAge"
          >
            Next year age
          </v-btn>

          <v-btn
            color="error"
            class="mr-4"
          >
            Delete
          </v-btn>

          <v-btn
            color="warning"
            class="mr-4"
          >
            Update
          </v-btn>

          <v-btn
            color="primary"
            class="mr-4"
            @click="getData"
          >
            Get
          </v-btn>

          <v-btn
            color="primary"
          >
            Validate and Add
          </v-btn>

          <v-text-field
            label="Id"
          ></v-text-field>

        </v-form>

        
        <v-list>
          <v-list-item
            v-for="customerInfo in customerInfos"
            :key="customerInfo.id"
          >
            <v-list-item-content>
              <div
                class="d-flex"
              >
                <p>{{ customerInfo.name }}</p>
                <p>--</p>
                <p>{{ customerInfo.desc }}</p>
              </div>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-container>
    </div> -->

    <home-footer2></home-footer2>
  </div>
</template>

<script>
  import NavBar1 from '../components/NavBar1.vue'
  import NavBar2 from '../components/NavBar2.vue'
  import Footer2 from '../components/Footer2.vue'

  //import { axios } from '@/plugins/axios'
  
  export default{
    name: 'TestGround',

    components: {
      'home-navbar1': NavBar1,
      'home-navbar2': NavBar2,
      'home-footer2': Footer2
    },

    data: function() {
      return{
        test: {
          name: "",
          desc: "",
          id: ""
        },
        datas: {},
        validate: {},

        clientinfo: {
          First_Name: "",
          Last_Name: "",
          Mobile_Number: "",
          Email: "",
          Home_Adress: "",
          Postal_code: "",
          City_Adress: "",
          Province_Adress: "",
          Birthday: "",
          Gender: "",
          Tag: "",
          Password: "",
          id: "",
        },
        clients: {},

      }
    },

    // yung name na test1 dapat ay same doon sa ni rrequest sa store
    // yung name na test ay dapat katulad doon sa v-model
    methods: {
      addItem() {
        console.log('add item');
        axios.post('http://127.0.0.1:8000/api/name/store',{
          test1: this.test
        })
        .then(res => this.refreshPage(res.data))
        .catch(err => console.error(err));
      },
      getItem() {
        console.log("get item");
        axios.get('http://127.0.0.1:8000/api/name')
        .then(res => this.datas = res.data)
        .catch(err => console.error(err));
      },
      updateItem() {
        console.log("update item");
        axios.put('http://127.0.0.1:8000/api/name/' + this.test.id,{
          test1: this.test
        })
        .then(res => this.datas = res.data)
        .catch(err => console.error(err));
      },
      deleteItem() {
        console.log("delete item");
        axios.delete('http://127.0.0.1:8000/api/name/' + this.test.id)
        .then(res => console.log(res.data))
        .catch(err => console.error(err));
      },
      validateItem() {
        console.log("Validate item");
        axios.get('http://127.0.0.1:8000/api/name')
        .then(res => this.duplicationChecking(res.data))
        //.then(res => console.log(res.data))
        .catch(err => console.error(err));
      },
      duplicationChecking(data) {
        console.log('duplication');
        this.validate = JSON.parse(JSON.stringify(data));
        console.log(this.validate.length);
        var tf = true;
        for(var i = 0; i < this.validate.length; i++){
          if(this.test.name == this.validate[i]['name']){
            alert("name exist dont fire axios end loop");
            tf = false;
            i = this.validate.length + 1;
          }
        }
        if(tf){
          alert("fire axios");
          this.addItem();
        }
      },

      refreshPage(data){
        this.clientinfo = data;
        console.log(this.clientinfo);
        alert("Data added succesfullt");
      },

      getItemO() {
        console.log("get item");
        axios.get('http://127.0.0.1:8000/api/clients')
        //.then(res => console.log(res))
        .then(res => this.clients = res.data)
        .catch(err => console.error(err));
        console.log(this.datas);
      },
      addItemO() {
        console.log('add item');
        axios.post('http://127.0.0.1:8000/api/clients/store',{
          register: this.clientinfo
        })
        .then(res => this.clients = res.data)
        .catch(err => console.error(err));
      },
      updateItemO() {
        console.log("update item");
        axios.put('http://127.0.0.1:8000/api/clients/' + this.clientinfo.id,{
          register: this.clientinfo
        })
        .then(res => this.datas = res.data)
        .catch(err => console.error(err));
      },
      deleteItemO() {
        console.log("delete item");
        axios.delete('http://127.0.0.1:8000/api/clients/' + this.clientinfo.id)
        .then(res => console.log(res.data))
        .catch(err => console.error(err));
      },

      // addAge() {
      //   //this.$store.commit('addAge');
      //   console.log('not working')
      // },
      // getData() {
      //   this.$store.dispatch('getData');
      // }
    },

    // computed: {
    //   customerInfos() {
    //     return this.$store.state.customerInfos;
    //   },
    //   halfAge() {
    //     return this.$store.getters.halfAge;
    //   },
    // },
  }
</script>