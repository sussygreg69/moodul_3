<template>
  <section class="w-full px-4 sm:px-8 lg:px-32 py-16 text-sinine" ref="productPage">
    <div class="flex flex-col lg:flex-row gap-10">

      <div class="flex-1">
        <div class="p-4 rounded-2xl flex justify-center">
          <img :src="activeImage" alt="Product Image" class=" object-contain rounded-4xl transition duration-300">
        </div>
        <div class="flex gap-2 mt-4 justify-center">
          <img
            v-for="(img, index) in product.images"
            :key="index"
            :src="img"
            @click="activeImage = img"
            class="h-16 w-16 object-contain border rounded-md cursor-pointer transition hover:opacity-80"
            :class="{ 'ring-2 ring-slate-800': activeImage === img }"
          />
        </div>
      </div>

      <div class="flex-1 flex flex-col justify-around gap-6">
        <div class="flex flex-col gap-4">
          <h1 class="font-quiche text-3xl lg:text-4xl leading-tight">{{ product.name }}</h1>
          <p class="text-sm text-slate-500 font-semibold">Kategooria: {{ product.category }}</p>
          <p class="text-sm leading-relaxed" v-html="product.description" />

          <div class="text-2xl font-semibold mt-2">{{ product.price }} €</div>

          <div class="flex items-center gap-2">
            <button
              v-for="color in colors"
              :key="color.name"
              class="w-6 h-6 border rounded-full"
              :style="{ backgroundColor: color.hex }"
              @click="selectedColor = color.name"
              :class="{ 'ring-2 ring-slate-800': selectedColor === color.name }"
              :aria-label="color.name"
            ></button>
          </div>

          <div class="flex gap-2 mt-2">
            <button
              v-for="size in sizes"
              :key="size"
              @click="selectedSize = size"
              class="px-2 py-1 border rounded text-sm"
              :class="{ 'bg-slate-800 text-white': selectedSize === size }"
            >
              {{ size }}
            </button>
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 pt-6 text-sm">
          <div>
            <h2 class="font-semibold text-lg mb-2">Tooteinfo:</h2>
            <p><strong>Materjal:</strong> {{ product.material }}</p>
            <p><strong>Mõõdud:</strong> {{ product.dimensions }}</p>
            <p><strong>Kaal:</strong> {{ product.weight }}</p>
            <p><strong>Käsitöö:</strong> {{ product.handmade }}</p>
            <p><strong>Kinnitus:</strong> {{ product.mount }}</p>
          </div>
          <div>
            <h2 class="font-semibold text-lg mb-2">Saadavus:</h2>
            <p><strong>Laoseis:</strong> {{ product.stock }} tk saadaval</p>
            <p><strong>Aadress:</strong> {{ product.location }}</p>
            <p class="mt-2"><strong>Soovid kinkida?</strong><br>Võimalus osta koos kinkepakendiga.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Product',
  data() {
    return {
      activeImage: './img/s2rk.png',
      selectedColor: 'White',
      selectedSize: 'M',
      colors: [
        { name: 'White', hex: '#ffffff' },
        { name: 'Black', hex: '#000000' },
        { name: 'Pink', hex: '#e879f9' },
        { name: 'Blue', hex: '#67e8f9' },
      ],
      sizes: ['S', 'M', 'L', 'XL', 'XXL'],
      product: {
        id: 1,
        name: 'T-Särk “Tuuliku armastus”',
        category: 'Riided',
        price: 15,
        images: [
          './img/s2rk.png',
          './img/s2rk.png',
          './img/magnet.png',
        ],
        description: `
          Rahvajuttude järgi elab Vihula Tuulikus muistne tuulevaim Uku — vaikne valvur ja väsimatu veski­mees, kes hoiab silma peal nii tuulel kui ka inimestel.<br><br>
          See käsitsi valmistatud puidust magnet kannab endas tema kohalolu – justkui vaikne tõotus, et kõik liigub omas ajas ja õigesti.<br><br>
          „Uku valvab“ ei ole lihtsalt suveniir – see on killuke pärimust, väike mälestus Vihula rahust ja tuule laulust. Olgu ta sinu kodus meeldetuletuseks lihtsuses peituvast jõust.
        `,
        material: 'Titaanium',
        dimensions: '15 x 6 cm',
        weight: '~40 g',
        handmade: 'Valmistatud Eestis, Lääne-Virumaa meistrite poolt',
        mount: 'Tugev magnetplaat',
        stock: 12,
        location: 'Vihula Tuulik, Vihula küla, Haljala vald, Lääne-Virumaa, 45402',
      },
    };
  },
};
</script>

<style scoped>
</style>
