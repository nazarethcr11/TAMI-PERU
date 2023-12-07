addEventListener("scroll", () => {
    let productos__tituloCatalogo = document.getElementById("productos__tituloCatalogo")
    let altura = window.innerHeight / 1.2
    let distancia = productos__tituloCatalogo.getBoundingClientRect().top
    const rootStyles = document.documentElement.style
    if (distancia <= altura) {
        rootStyles.setProperty("--stop", "running")
    }
})


let m_selladora = document.getElementById("maquina__selladora")
let selladora = document.getElementById("selladora")
let icono2 = document.getElementById("icono2")
m_selladora.addEventListener("click", () => {
    selladora.classList.add("display2")
})

icono2.addEventListener("click", () => {
    selladora.classList.remove("display2")
})

let m_embalaje = document.getElementById("maquina__embalaje")
let embalaje = document.getElementById("embalaje")
let icono3 = document.getElementById("icono3")
m_embalaje.addEventListener("click", () => {
    embalaje.classList.add("display2")
})

icono3.addEventListener("click", () => {
    embalaje.classList.remove("display2")
})

let sellador__vasos = document.getElementById("sellador__vasos")
let SelladorVasos = document.getElementById("SelladorVasos")
let icono4 = document.getElementById("icono4")

sellador__vasos.addEventListener("click", () => {
    SelladorVasos.classList.add("display2")
})

icono4.addEventListener("click", () => {
    SelladorVasos.classList.remove("display2")
})

