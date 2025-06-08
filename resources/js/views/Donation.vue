<template>
  <section class="w-full px-4 sm:px-8 lg:px-32 py-16 text-sinine">
    <div class="flex flex-col lg:flex-row gap-12">
      
      <div class="hidden md:block lg:w-1/2">
        <img
          src="./img/tuulik.png"
          alt="Veski"
          class="rounded-2xl w-full object-cover"
        />
      </div>

      <div class="w-full lg:w-1/2 flex flex-col justify-around gap-8">
        <div>
          <h1 class="font-quiche text-3xl lg:text-5xl leading-tight mb-4">
            Aita hoida tuuliku<br />tiivad liikumas
          </h1>
          <p class="mb-4">
            Vihula Tuulik elab annetuste toel. Iga panus aitab meil säilitada tuuliku lugu,
            korraldada töötubasid ja pakkuda külastajatele elamusi. Aitäh, et oled osa sellest!
          </p>
          <p>
            Iga euro on samm lähemale tuule jõul kestvale kultuurile. Tänu sulle püsivad
            veskitii­vad pöörlemas ka tulevikus.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-semibold mb-3">Annetamisvõimalused:</h2>
            <div class="mb-4">
              <div class="flex items-start gap-2">

                <div>
                  <p class="font-semibold">Panga ülekanne:</p>
                  <p>
                    <strong>Saa­ja:</strong> MTÜ Vihula Tuulik<br />
                    <strong>Konto:</strong> EE12 2200 2210 0001 2345
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="flex items-start gap-2">

                <div>
                  <p class="font-semibold">Telefoniga annetus:</p>
                  <p>Helista numbrile 900 1234 <em>(Kõne hind 5€)</em></p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <h2 class="text-xl font-semibold mb-3">Kuhu sinu toetus läheb?</h2>
            <ul class="list-disc list-inside space-y-1">
              <li>Tuuliku hooldus ja säilitamine</li>
              <li>Harivad töötoad koolinoortele</li>
              <li>Kohalik käsitöö ja kultuuripärandi hoidmine</li>
              <li>Rahvajuttude õhtud ja külastajaelamused</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>


<script>

export default {
  
  name: 'Donation',
}
</script>

