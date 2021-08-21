import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import TestGround from '../views/TestGround.vue'

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
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

export default router
