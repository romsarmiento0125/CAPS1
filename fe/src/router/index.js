import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About.vue'
import TestGround from '../views/TestGround.vue'
import TestGround1 from '../views/TestGround1.vue'

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
]

const router = new VueRouter({
  routes,
  mode: 'history'
})

export default router
