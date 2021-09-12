import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import TestGround from '../views/TestGround.vue'
import TestGround1 from '../views/TestGround1.vue'
import LoginSignup from '../views/LoginSignup.vue'
import AdminDashboard from '../views/AdminDashboard.vue'
import ShoppingCart from '../views/ShoppingCart.vue'
import UserAccount from '../views/UserAccount.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/tg',
    name: 'TestGround',
    component: TestGround
  },
  {
    path: '/tg1',
    name: 'TestGround1',
    component:TestGround1
  },
  {
    path: '/admin',
    name: 'AdminDashboard',
    component:AdminDashboard,
  
  },
  {
    path: '/cart',
    name: 'ShoppingCart',
    component: ShoppingCart,
  },
  {
    path: '/user',
    name: 'UserAccount',
    component: UserAccount,
  },
  {
    path: '/loginsignup/:nt',
    name: 'LoginSignup',
    component:LoginSignup,
  }
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

export default router
