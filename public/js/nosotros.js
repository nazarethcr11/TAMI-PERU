addEventListener("scroll", () => {
  let valores__iconos = document.getElementById("valores__iconos")
  let altura = window.innerHeight / 1.1
  let distancia = valores__iconos.getBoundingClientRect().top
  const rootStyles = document.documentElement.style
  if (distancia <= altura) {
    rootStyles.setProperty("--stop", "running")
  }
})

addEventListener("scroll", () => {
  let certificaciones = document.getElementById("certificaciones_animacion")
  let altura = window.innerHeight / 1.1
  let distancia = certificaciones.getBoundingClientRect().top
  const rootStyles = document.documentElement.style
  if (distancia <= altura) {
    rootStyles.setProperty("--stop1", "running")
  }
})

addEventListener("scroll", () => {
  let certificaciones = document.getElementById("certificaciones__titulo")
  let altura = window.innerHeight / 1.1
  let distancia = certificaciones.getBoundingClientRect().top
  const rootStyles = document.documentElement.style
  if (distancia <= altura) {
    rootStyles.setProperty("--stop3", "running")
  }
})