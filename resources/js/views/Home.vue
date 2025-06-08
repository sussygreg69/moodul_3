<template>
  <section id="hero" :style="{ backgroundImage: `url(${vihulabg})` }"
    class="flex flex-col items-start content-start gap-8 justify-center w-full h-screen  bg-cover bg-top-left z-0 pl-32">
    <div class="flex flex-col gap-4">
      <h1 class="text-6xl font-quiche text-beez">Vihula Tuulik — Ajatu rahu ja<br>looduse ilu kohtumispaik</h1>
      <p class="font-poppins text-beez">Tule avasta tuuliku vaikuses peituv ajalugu, tegevused ja<br>meened, mis
        kannavad endas Eesti pärandit.</p>
    </div>
    <div class="flex flex-row gap-6">
      <button @click="scrollToSection"
        class="pl-12 pr-12 pt-2 pb-2 bg-sinine hover:bg-hele-roheline transition-colors rounded-full text-beez">Uuri
        lähemalt</button>
      <router-link to="/donation"><button class="pl-12 pr-12 pt-2 pb-2 border-2 border-beez transition-colors rounded-full text-beez">Toeta
        meid</button></router-link>
    </div>
  </section>




  <section ref="ajalugu" class="flex flex-col pl-32 pt-32 pr-32 pb-32">
    <h1  class="text-4xl font-quiche text-sinine pb-20">Minevikust tänaseni</h1>
    <div class="flex flex-col gap-8">
      <img src="./img/ajalugu.png" class="pl-20 pr-20">
      <div class="flex flex-row font-poppins text-sinine text-center gap-20">
        <p>Vihula mõisapere rajab kivist tuuliku, et jahvatada kohalikku vilja. Esimesed tiivad keerlevad puhta töö ja
          toidulaua nimel.</p>
        <p>Tuulikust saab oluline külaelu süda – siit käiakse läbi, uudised liiguvad ja jahvatus käib täistuuridel.</p>
        <p>Tööstusajastu võtab oma – tuulik jääb tummaks. Aastakümneteks jääb ta looduse ja unustuse hooleks.</p>
        <p>Tänaseks on tuulik restaureeritud. Siin kohtuvad ajalugu, käsitöö ja kogukond — avatud kõigile avastamiseks.
        </p>
      </div>
    </div>
  </section>




  <section :style="{ backgroundImage: `url(${tuntud})` }"
    class="w-full min-h-[300px] md:min-h-svh bg-sinine bg-no-repeat bg-top bg-contain overflow-x-hidden"></section>





  <section class="text-sinine py-16 px-4 sm:px-8 lg:px-32">
    <h2 class="text-4xl font-quiche text-center mb-12">Ajakava & tegemised</h2>
    <div class="space-y-6">
      <div
        class="flex flex-col md:flex-row md:gap-6 items-start md:items-center bg-roheline text-beez rounded-xl p-4 pl-8">
        <div class="flex flex-col text-xl font-poppins items-center text-center">K – P<br>
          <span class="text-2xl font-quiche">10:00 – 13:30</span>
        </div>
        <div class="pl-4 border-l border-beez md:w-full">
          <h3 class="font-quiche text-2xl">Tuuliku ekskursioonid</h3>
          <p class="text-sm mt-1">
            Giidiga ringkäik, kus tutvustatakse tuuliku ajalugu, mehhanikat ja kohalikke legende.
          </p>
        </div>
      </div>

      <div
        class="flex flex-col md:flex-row md:gap-6 items-start md:items-center bg-roheline text-beez rounded-xl p-4 pl-8">
        <div class="flex flex-col text-xl font-poppins items-center text-center">T – N<br>
          <span class="text-2xl font-quiche">10:00 – 13:30</span>
        </div>
        <div class="pl-4 border-l border-beez md:w-full">
          <h3 class="font-quiche text-2xl">Käsitöö töötuba</h3>
          <p class="text-sm mt-1">
            Osale savikausi voolimisel, kangastelgede proovimisel või villast viltimisel. Vajalik eelregistreerimine.
          </p>
        </div>
      </div>

      <div
        class="flex flex-col md:flex-row md:gap-6 items-start md:items-center bg-roheline text-beez rounded-xl p-4 pl-8">
        <div class="flex flex-col text-xl font-poppins items-center text-center">Laupäev<br>
          <span class="text-2xl font-quiche">10:00 – 13:30</span>
        </div>
        <div class="pl-4 border-l border-beez md:w-full">
          <h3 class="font-quiche text-2xl">Tuulikukohvik ja meeneturg</h3>
          <p class="text-sm mt-1">
            Avatud pop-up kohvik ning väike turg kohalike käsitöö ja maiustustega.
          </p>
        </div>
      </div>

      <div
        class="flex flex-col md:flex-row md:gap-6 items-start md:items-center bg-roheline text-beez rounded-xl p-4 pl-8">
        <div class="flex flex-col text-xl font-poppins items-center text-center">Pühapäev<br>
          <span class="text-2xl font-quiche">10:00 – 13:30</span>
        </div>
        <div class="pl-4 border-l border-beez md:w-full">
          <h3 class="font-quiche text-2xl">Veskikivide äratamine</h3>
          <p class="text-sm mt-1">
            Näidatakse, kuidas veskikivid tööle pannakse – koos jutustusega tuule ja vilja kohtumisest.
          </p>
        </div>
      </div>
    </div>
  </section>

</template>

<script>

export default {

  name: 'Home',
}


</script>
<script setup>



import vihulabg from './img/vihula_bg1.png'
import tuntud from './img/tuntud.png'

import { ref } from 'vue'

const ajalugu = ref(null)

function scrollToSection() {
  ajalugu.value?.scrollIntoView({ behavior: 'smooth' })
};
</script>