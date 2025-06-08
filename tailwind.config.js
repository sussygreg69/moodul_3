/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './index.html',
    './src/**/*.{vue,js,ts,jsx,tsx}',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.{vue,js}',
  ],
  theme: {
    extend: {
      fontFamily: {
        myfont: ['Quiche Display Medium', 'sans-serif'],
      },
      colors: {
        roheline: '#var(--color-roheline)',
      },
    },
  },
  plugins: [],
}
