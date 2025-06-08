import { createRouter, createWebHistory } from 'vue-router'

import Home from '../js/views/Home.vue'
import Store from '../js/views/Store.vue'
import Product from '../js/views/Product.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/store', component: Store },
  { path: '/product/:id', component: Product },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
