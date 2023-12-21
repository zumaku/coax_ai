/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        txt: "#272728",
        bgd: "F7F7F7",
        bgd2: "FFFFFF",
        primary: "#242424",
        secondary: "#444444",
        accent: "#3D87FF",
        accent2: "#879DC2",
        accent3: "#CEC265",
        disable: "#A2A2A2",
        success: "#0372D9",
      },
      fontFamily: {
        inter: ["Inter", "sans-serif"],
      },
    },
    screens: {
      xs: "480px",
      ss: "620px",
      sm: "768px",
      sl: "930px",
      md: "1060px",
      lg: "1200px",
      xl: "1700px",
    },
  },
  plugins: [],
}

