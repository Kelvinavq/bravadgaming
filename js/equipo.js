const btn_jugador = document.getElementById("btn_jugador");
const btn_coach = document.getElementById("btn_coach");


btn_jugador.addEventListener("click", (e) =>{
    document.querySelector(".contenedor_equipo").classList.remove("inactive");
    document.querySelector(".contenedor_equipo").classList.add("active");

    document.querySelector(".contenedor_coach").classList.remove("active");
    document.querySelector(".contenedor_coach").classList.add("inactive");

    document.querySelector(".btn_equipo-2").classList.remove("selected");
    document.querySelector(".btn_equipo-1").classList.add("selected");
})


btn_coach.addEventListener("click", (e) =>{
    document.querySelector(".contenedor_equipo").classList.remove("active");
   document.querySelector(".contenedor_equipo").classList.add("inactive");


   document.querySelector(".contenedor_coach").classList.remove("inactive");
    document.querySelector(".contenedor_coach").classList.add("active");

    document.querySelector(".btn_equipo-1").classList.remove("selected");
    document.querySelector(".btn_equipo-2").classList.add("selected");

})