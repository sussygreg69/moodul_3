import { createRouter, createWebHistory } from 'vue-router'

import Home from './views/Home.vue'
import Store from './views/Store.vue'
import Product from './views/Product.vue'
import Contact from './views/Contact.vue'
import Donation from './views/Donation.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/store', component: Store },
  { path: '/product', component: Product },
  { path: '/contact', component: Contact },
  { path: '/donation', component: Donation },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    return { top: 0 }
  }
})

export default router
