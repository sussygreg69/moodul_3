
# Vihula Veeb – Laravel + Vue + Tailwind projekt

See projekt on üles ehitatud Laraveliga ja kasutab Vue.js ning Tailwind CSS-i.  
Adminpaneel töötab Backpacki abil. Andmebaas ei ole kasutusel – kogu info hallatakse Laravel + Backpack kaudu.

---

## ⚙️ Kasutatud tehnoloogiad

- **PHP 8+** – serveripoolne keel
- **Laravel 10** – backend ja API
- **Vue 3** – frontend SPA (Single Page Application)
- **Tailwind CSS** – stiilid ja kujundus
- **Vite** – kiire arendusserver ja build-süsteem
- **Backpack for Laravel** – adminpaneel

---

## 📦 Vajalikud sõltuvused

Kui kloonid projekti esimest korda, installi esmalt kõik dependencies.

### PHP (Laravel):
```bash
composer install
```

### JavaScript (Vue ja Vite):
```bash
npm install
```

---

## 🛠 Kohaliku arenduskeskkonna käivitamine

1. Ava terminal ja liigu projekti kausta:
   ```bash
   cd [projekti-kaust]
   ```

2. Käivita Laravel server:
   ```bash
   php artisan serve
   ```

3. Ava uus terminaliaken ja käivita Vite:
   ```bash
   npm run dev
   ```

4. Ava brauseris:
   ```
   http://127.0.0.1:8000
   ```

---

## 🔐 Administreerimisliidese kasutamine

Adminpaneeli avamiseks:
```
http://127.0.0.1:8000/admin
```

Logi sisse kehtivate kasutajaandmetega.

---

### ✏️ Administreerimisliidese funktsioonid

Adminpaneelis saad:

- **Lisada, muuta ja kustutada tooteid** (Products)
- **Vaadata kontaktivormi kaudu saadetud sõnumeid** (nt Contact submissions)

❗ Lehtede sisu (nt “Meist”, “Kontakt”, “Annetused”) tuleb muuta otse koodist Vue komponentide kaudu:  
`resources/js/views/*.vue`

---

## 📝 Sisu muutmine

1. Ava fail `resources/js/views`.
2. Vali fail, mille kaudu soovid lehe sisu muuta (nt `Contact.vue`, `Donation.vue`).
3. Tee muudatused ja salvesta.
4. Veendu, et arendusserver töötab (`npm run dev`) ja leht laeb sisu korrektselt.

---

## 🖼 Tööde / toodete lisamine

1. Ava adminpaneelis **Products**.
2. Kliki **Lisa uus / Add new**.
3. Täida väljad:
   - Nimi
   - Kirjeldus
   - Hind
   - Kategooria (nt `riided`, `magnetid`, `savinõud`, `postkaardid`)
   - Pildid (toetatud: `.jpg`, `.png`, max 2MB)
4. Salvesta – uus toode ilmub poe lehel automaatselt.

---

## 🔍 Filtri- ja sorteerimissüsteem e-poes

Lehel `/store` on võimalik filtreerida tooteid kategooria alusel ning sorteerida hinna järgi.  
Filtri valikud peavad vastama salvestatud `category` väärtustele:

- `riided`
- `magnetid`
- `savinõud`
- `postkaardid`

Valik "Kõik" kuvab kõik tooted.

---

## 🧪 Kasulikud käsud

- Käivita server:
  ```bash
  php artisan serve
  ```

- Arendusvaade (Vue):
  ```bash
  npm run dev
  ```

---

## 📁 Kaustastruktuur (oluline teada)

- Vue vaated: `resources/js/views`
- Laetavad toote pildid: `storage/app/public/`

---

## 📌 Märkused

- Kui tekib probleeme piltide salvestamisel, kontrolli faili suurust ja laiendit (max 2mb)
- Tekstide muutmiseks kasuta Vue faile või adminpaneeli, olenevalt sisust
