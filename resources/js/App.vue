<template>
  <div class="font-poppins text-sinine">
    <!-- HEADER -->
    <header class="flex items-center justify-between w-full px-6 py-4 bg-orange-100">
      <div class="flex items-center gap-2">
        <router-link to="/">
          <img src="./logo_must.png" class="h-12" alt="Vihula Tuulik" />
        </router-link>
      </div>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex gap-8 font-poppins">
        <router-link to="/store">E - Pood</router-link>
        <router-link to="/contact">Kontakt</router-link>
        <router-link to="/donation">Annetused</router-link>
      </nav>

      <div class="hidden lg:block">
        <router-link to="/contact">
          <button class="px-6 py-2 bg-roheline hover:bg-hele-roheline transition-colors rounded-full text-beez">Võta Ühendust</button>
        </router-link>
      </div>

      <!-- Mobile Hamburger -->
      <button @click="toggleMenu" class="lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Mobile Menu Drawer -->
      <div v-if="menuOpen" class="fixed inset-0 z-50 bg-white flex flex-col items-center justify-center gap-6">
        <button @click="toggleMenu" class="absolute top-4 right-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        <router-link to="/store" @click="toggleMenu">E - Pood</router-link>
        <router-link to="/contact" @click="toggleMenu">Kontakt</router-link>
        <router-link to="/donation" @click="toggleMenu">Annetused</router-link>
        <router-link to="/admin" class="bg-roheline text-beez px-6 py-2 rounded-full" @click="toggleMenu">
          Logi sisse
        </router-link>
      </div>
    </header>

    <!-- PAGE CONTENT -->
    <router-view />

    <!-- FOOTER -->
    <footer :style="{ backgroundImage: `url(${footer})` }" class="flex items-center pt-100 bg-cover bg-top bg-no-repeat w-full min-h-screen">
      <div class="w-full max-w-screen-xl px-6 py-16 mx-auto flex flex-col gap-16 lg:flex-row lg:justify-between lg:items-start">
        <div class="flex flex-col items-center gap-6 lg:items-start">
          <img src="./logo_must.png" class="h-12" alt="Vihula Tuulik logo" />
          <div class="flex flex-col gap-2 items-center lg:items-start">
            <router-link to="/contact">
              <button class="pl-8 pr-8 pt-2 pb-2 border-2 border-beez transition-colors rounded-full text-beez">
                Võta Ühendust
              </button>
            </router-link>
            <router-link to="/donation">
              <button class="pl-8 pr-8 pt-2 pb-2 bg-sinine hover:bg-hele-roheline transition-colors rounded-full text-beez">
                Toeta meid
              </button>
            </router-link>
          </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8 text-left w-full lg:w-auto">
          <div>
            <p class="font-quiche border-b-2 text-xl">Avaleht</p>
            <ul class="mt-3 space-y-4 text-sm">
              <li><a href="#" class="hover:opacity-75">Ajalugu</a></li>
              <li><a href="#" class="hover:opacity-75">Tuntud näod</a></li>
              <li><a href="#" class="hover:opacity-75">Tegevuste ajakava</a></li>
              <li><a href="#" class="hover:opacity-75">Meened</a></li>
            </ul>
          </div>

          <div>
            <p class="font-quiche border-b-2 text-xl">E - Pood</p>
            <ul class="mt-3 space-y-4 text-sm">
              <li><a href="#" class="hover:opacity-75">Tooted</a></li>
              <li><a href="#" class="hover:opacity-75">Kategooriad</a></li>
            </ul>
          </div>

          <div>
            <p class="font-quiche border-b-2 text-xl">Kontaktid</p>
            <ul class="mt-3 space-y-4 text-sm">
              <li><a href="#" class="hover:opacity-75">Kirjuta meile!</a></li>
            </ul>
          </div>

          <div>
            <p class="font-quiche border-b-2 text-xl">Annetused</p>
            <ul class="mt-3 space-y-4 text-sm">
              <li><a href="#" class="hover:opacity-75">Info</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import footer from './footer_bg.png'
const menuOpen = ref(false)
const toggleMenu = () => {
  menuOpen.value = !menuOpen.value
}
</script>

<script>
export default {
  name: 'App',
}
</script>
