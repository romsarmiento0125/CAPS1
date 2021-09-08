import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    customerInfos: {},
    customerSaveItems: {},
    productItems: {},
    itemCounter: 0,
  },
  getters:{
  },
  mutations: {
    storeData: (state, payload) => {
      state.customerInfos = payload
    },
    addToCart: (state, payload) => {
      state.customerSaveItems = payload
    },
    storeItems: (state, payload) => {
      state.productItems = payload
    },
    updateCounter: (state, payload) => {
      state.itemCounter = payload
    },
    deleteItem: (state, payload) => {
      var i = state.itemCounter
      console.log("This is ic " + i)
      if(i > 0) {
        console.log("This is if")
        while(i > 0){
          console.log("This is While")
          var cur = state.customerSaveItems[i]
          console.log(cur)
          if(cur.id == payload){
            console.log("If inside while")
            state.customerSaveItems.splice(i, 1)
          }
          i--
        }
        
      }
    }
  },
  actions: {
    getData: (context, payload) => {
      axios.post('http://127.0.0.1:8000/api/login/store',{
        clientCred: payload
      })
      .then(res => {
        context.commit('storeData', res.data)
      })
    },
    getItems: (context) => {
      axios.get('http://127.0.0.1:8000/api/products')
        .then(res => {
          context.commit('storeItems', res.data)
        })
    },
  },
  modules: {
  }
})

// export default new Vuex.Store({
//   state: {
//     customerInfos: {}
//   },
//   getters:{
//     halfAge: state => {
//       var halfAge = state.customerInfos.map( customerInfo => {
//         return {
//           fname: customerInfo.fname,
//           sname: customerInfo.sname,
//           age: customerInfo.age / 2
//         }
//       });
//       return halfAge;
//     }
//   },
//   mutations: {
//     addAge: state => {
//       state.customerInfos.forEach( customerInfo => {
//       customerInfo.age++;
//       })
//     },
//     storeData: (state, payload) => {
//       state.customerInfos = payload;
//     }   
//   },
//   actions: {
//     getData: (context) => {
//       axios.get('http://127.0.0.1:8000/api/name')
//         .then(res => {
//             context.commit('storeData', res.data);
//         })
//     }
//   },
//   modules: {
//   }
// })
