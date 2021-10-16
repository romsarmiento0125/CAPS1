import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import vuetify from './plugins/vuetify'
import VueAxios from './plugins/axios'
import mixinTitle from './mixins/title'

Vue.config.productionTip = false
Vue.use(VueAxios)
Vue.mixin(mixinTitle)

new Vue({
  router,
  store,
  vuetify,
  render: h => h(App)
}).$mount('#app')
