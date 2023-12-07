addEventListener("scroll", () => {
    let productos = document.getElementById("productos")
    let altura = window.innerHeight / 1
    let distancia = productos.getBoundingClientRect().top
    const rootStyles = document.documentElement.style
    if (distancia <= altura) {
        rootStyles.setProperty("--stop", "running")
    }
})

addEventListener("scroll", () => {
    let video = document.getElementById("video")
    let altura1 = window.innerHeight / 1.1
    let distancia1 = video.getBoundingClientRect().top
    const rootStyles1 = document.documentElement.style
    if (distancia1 <= altura1) {
        rootStyles1.setProperty("--stop6", "running")
    }
})