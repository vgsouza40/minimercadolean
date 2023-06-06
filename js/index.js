const botaoAlterarTema = document.getElementById("botao-alterar-tema");
const imgBotaoTrocaDeTema = document.querySelector(".imagem-botao");
const body = document.querySelector("body");


    botaoAlterarTema.addEventListener("click", () => {
        
    
    const modoEscuroAtivo = body.classList.contains("modo-escuro");

    if(modoEscuroAtivo) {

        body.classList.remove("modo-escuro");
        imgBotaoTrocaDeTema.setAttribute("src", "./img/sun.png");
        
    }else{

        body.classList.add("modo-escuro");

        imgBotaoTrocaDeTema.setAttribute("src", "./img/moon.png");
    }
});