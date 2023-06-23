const formulario = document.getElementById("formulario");
const botao = document.getElementById("botao-enviar");

botao.addEventListener("click", (evento) => {
    evento.preventDefault();
    validacao();
})

function validacao() {
    const nome = document.querySelector('[name="name"]').value;
    const email = document.querySelector('[name="email"]').value;
    const assunto = document.querySelector('[name="assunto"]').value;
    const mensagem = document.querySelector('[name="msg"]').value;

    if (nome.trim() === "") {
        alert("Preencha o nome.");
    } else if (email.trim() === "") {
        alert("Preencha o email.");
    } else if (assunto.trim() === "") {
        alert("Preencha o assunto.");
    } else if (mensagem.trim() === "") {
        alert("Não tem mensagem para enviar!");
    } else {
        formulario.submit();
    }
}
