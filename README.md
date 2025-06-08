
# Vihula Veeb – Laravel + Vue + Tailwind projekt

See projekt on üles ehitatud Laraveliga ja kasutab Vue.js ning Tailwind CSS-i.  
Adminpaneel töötab Backpacki abil.

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

## 📝 Sisu muutmine

1. Ava adminpaneelis **Pages** või **Lehed**.
2. Vali leht, mida soovid muuta (nt *Meist*, *Kontakt*).
3. Tee muudatused tekstides või sisus.
4. Vajuta **Salvesta**.

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

## 🖼 Piltide kuvamine

Pildid salvestatakse `storage/app/public/uploads` kausta.  
Et need veebis nähtavaks teha:

```bash
php artisan storage:link
```

Pildid muutuvad kättesaadavaks lingi kaudu:
```
/storage/uploads/filename.jpg
```

Vue komponentides kasutatakse pildi kuvamiseks funktsiooni, mis võtab JSON-failinime ja teisendab selle õigeks URL-iks.

---

## 🔍 Filtri- ja sorteerimissüsteem e-poes

Lehel `/store` on võimalik filtreerida tooteid kategooria alusel ning sorteerida hinna järgi.  
Filtri valikud peavad vastama andmebaasis olevatele `category` väärtustele:

- `riided`
- `magnetid`
- `savinõud`
- `postkaardid`

Valik "Kõik" kuvab kõik tooted.

---

## 🧪 Kasulikud käsud

- Laravel link piltidele:
  ```bash
  php artisan storage:link
  ```

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
- Avalikud pildid (nt logo): `public/`
- Laetavad toote pildid: `storage/app/public/uploads`

---

## 📌 Märkused

- Projekt töötab SQLite andmebaasiga (`database/database.sqlite`)
- Kui tekib probleeme piltide salvestamisel, kontrolli faili suurust ja laiendit
- Kõik tekstid on hallatavad läbi adminpaneeli või Vue komponentide kaudu
