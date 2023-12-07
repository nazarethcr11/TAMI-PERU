addEventListener("scroll", () => {
    let certificaciones = document.getElementById("animado")
    let altura = window.innerHeight / 1.1
    let distancia = certificaciones.getBoundingClientRect().top
    const rootStyles = document.documentElement.style
    if (distancia <= altura) {
        rootStyles.setProperty("--stop4", "running")
    }
})

addEventListener("scroll", () => {
    let certificaciones = document.getElementById("politica__animacion")
    let altura = window.innerHeight / 1.1
    let distancia = certificaciones.getBoundingClientRect().top
    const rootStyles = document.documentElement.style
    if (distancia <= altura) {
        rootStyles.setProperty("--stop7", "running")
    }
})