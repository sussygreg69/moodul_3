<template>
  <section id="hero" class="grid lg:grid-cols-2 gap-8 px-4 sm:px-12 lg:px-32 pt-20">
    <img src="./img/s2rk.png" class="aspect-video w-full rounded-2xl object-cover">
    <div class="flex flex-col justify-between mt-8 mb-8">
      <div class="flex flex-col gap-4">
        <h1 class="font-quiche text-4xl lg:text-5xl">T-Särk “Tuuliku armastus”</h1>
        <p class="text-base leading-relaxed">
          Mõni lugu ei vaja palju sõnu. See särk kannab endas vaikset sõnumit —<br>
          et tuul, mis on liikumises olnud ammu enne meid, jutustab ikka veel.<br><br>
          Ta meenutab, et aeg ei pea kiirustama ja ilu võib leida lihtsuses...
        </p>
      </div>
      <div class="flex flex-col items-start gap-2 mt-8">
        <h2 class="font-quiche text-4xl">15€</h2>
        <router-link
          to="/product"
          class="pl-8 pr-8 pt-2 pb-2 bg-roheline hover:bg-hele-roheline transition-colors rounded-full text-beez"
        >
          Uuri lähemalt
        </router-link>
      </div>
    </div>
  </section>

  <section class="flex flex-col lg:flex-row gap-8 px-4 sm:px-12 lg:px-32 pt-24">
    <div class="lg:w-[25%] flex flex-col gap-8">
      <div class="bg-roheline p-4 rounded-2xl">
        <label for="kategooria" class="text-beez block mb-2">Toote kategooria:</label>
        <div class="bg-beez rounded-2xl">
          <select v-model="selectedCategory" class="w-full p-4 text-slate-800 rounded-2xl">
            <option value="Kõik">Kõik</option>
            <option>Savinõud</option>
            <option>Postkaardid</option>
            <option>Magnetid</option>
            <option>Riided</option>
          </select>
        </div>
      </div>

      <div class="bg-roheline p-4 rounded-2xl">
        <label for="hind" class="text-beez block mb-2">Hinna järgi:</label>
        <div class="bg-beez rounded-2xl">
          <select v-model="sortOrder" class="w-full p-4 text-slate-800 rounded-2xl">
            <option value="asc">Madalamast kõrgemani</option>
            <option value="desc">Kõrgemast madalani</option>
          </select>
        </div>
      </div>
    </div>

    <div class="flex-1">
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-8">
        <div
          v-for="item in filteredItems"
          :key="item.id"
          class="flex flex-col gap-4 w-full rounded-4xl p-4 bg-sinine text-beez hover:shadow-lg transition"
        >
          <img :src="getFirstImage(item.image)" class="aspect-square object-cover rounded-4xl w-full" :alt="item.name" />
          <div class="flex flex-col gap-1 mt-4">
            <h1 class="font-quiche text-xl">{{ item.name }}</h1>
            <h2 class="font-quiche text-lg">{{ item.price }}€</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Store',
  data() {
    return {
      selectedCategory: 'Kõik',
      sortOrder: 'desc',
      items: [], // ← will be filled from API
    };
  },
  computed: {
    filteredItems() {
      let result = [...this.items]; // ← always copy before sorting

      if (this.selectedCategory !== 'Kõik') {
        result = result.filter(item => item.category === this.selectedCategory);
      }

      if (this.sortOrder === 'asc') {
        result.sort((a, b) => a.price - b.price);
      } else {
        result.sort((a, b) => b.price - a.price);
      }

      return result;
    },
  },

  methods: {
  getFirstImage(imageField) {
    try {
      const images = JSON.parse(imageField);
      return Array.isArray(images) && images.length > 0 ? images[0] : '/placeholder.jpg';
    } catch {
      return '/placeholder.jpg';
    }
  }
},

  mounted() {
    fetch('/api/products')
      .then(res => res.json())
      .then(data => {
        this.items = data;
      })
      .catch(err => {
        console.error('Failed to fetch products:', err);
      });
  }
};


</script>
