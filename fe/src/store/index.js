import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    customerInfos: {}
  },
  getters:{
  },
  mutations: {
    storeData: (state, payload) => {
      state.customerInfos = payload
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
    }
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
