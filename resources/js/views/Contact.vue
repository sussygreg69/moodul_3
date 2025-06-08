<template>
  <section class="w-full px-4 sm:px-12 lg:px-32 py-20 text-sinine">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12  border-sinine pt-12">
      <div class="flex flex-col gap-8">
        <div>
          <h1 class="font-quiche text-3xl lg:text-4xl mb-4">Võta ühendust!</h1>
          <p class="text-base leading-relaxed">
            Kas soovid tulla külla, broneerida ekskursiooni või lihtsalt tervitada? Kirjuta meile ja vastame sulle peagi – aeg liigub siin omas rütmis.
          </p>
        </div>

        <div class="flex flex-col gap-6 text-sm">
          <h2 class="text-xl font-semibold">Kontaktandmed:</h2>

          <div class="flex items-start gap-3">

            <div>
              <p class="font-semibold">Aadress:</p>
              <p>Vihula Tuulik, Vihula küla, Haljala vald, Lääne-Virumaa, 45402</p>
            </div>
          </div>

          <div class="flex items-start gap-3">

            <div>
              <p class="font-semibold">Telefon:</p>
              <p>+372 5555–5555</p>
            </div>
          </div>

          <div class="flex items-start gap-3">

            <div>
              <p class="font-semibold">E-posti aadress:</p>
              <p>info@vihulatuulik.ee</p>
            </div>
          </div>

          <div class="flex items-start gap-3">

            <div>
              <p class="font-semibold">Avatud:</p>
              <p>Teisipäev - Pühapäev<br>10:00 - 17:00</p>
            </div>
          </div>

          <div class="flex items-start gap-3">

            <div>
              <p class="font-semibold">Sotsiaalmeedia:</p>
              <p>Facebook / Instagram – @vihulatuulik</p>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col gap-8">
        <div>
          <h2 class="text-2xl font-semibold">Küsi julgelt</h2>
          <p class="text-base leading-relaxed mt-2">
            Kui sul on küsimusi, soovid broneerida külastust, teha koostööd või jagada head sõna – täida allolev vorm. Meie vastus võib tulla aeglase tuulega, aga tuleb kindlasti.
          </p>
        </div>

        <form @submit.prevent="submitForm" class="flex flex-col gap-6 text-sm">
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div>
      <label class="block mb-1">Nimi:</label>
      <input v-model="form.name" type="string" class="w-full border-b border-sinine bg-transparent focus:outline-none py-1" />
    </div>
    <div>
      <label class="block mb-1">E-posti aadress:</label>
      <input v-model="form.email" type="string" class="w-full border-b border-sinine bg-transparent focus:outline-none py-1" />
    </div>
  </div>
  <div>
    <label class="block mb-1">Teema:</label>
    <input v-model="form.subject" type="string" class="w-full border-b border-sinine bg-transparent focus:outline-none py-1" />
  </div>
  <div>
    <label class="block mb-1">Sõnum:</label>
    <textarea v-model="form.message" type="text" class="w-full border-b border-sinine bg-transparent focus:outline-none py-1" rows="4"></textarea>
  </div>
  <div class="pt-4">
    <button class="bg-roheline hover:bg-hele-roheline text-beez px-8 py-2 rounded-full font-medium transition flex items-center gap-2">
      Saada
      <span>➔</span>
    </button>
  </div>
</form>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const form = ref({
  name: '',
  email: '',
  subject: '',
  message: '',
})

const submitForm = async () => {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/contact', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        Accept: 'application/json',
      },
      body: JSON.stringify({
  name: form.value.name,
  email: form.value.email,
  subject: form.value.subject,
  message: form.value.message,
}),

    })

    const data = await response.json()

    if (!response.ok) {
      // Display validation errors if any
      if (data.errors) {
        const messages = Object.values(data.errors).flat().join('\n')
        alert(`Vigased väljad:\n${messages}`)
      } else {
        alert('Saatmine ebaõnnestus')
      }
      return
    }

    alert('Sõnum saadetud!')
    form.value = { name: '', email: '', subject: '', message: '' }
  } catch (err) {
    console.error(err)
    alert('Saatmine ebaõnnestus')
  }
}

</script>

