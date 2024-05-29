var animacao = document.querySelector('.cursor');
//função para saber onde o mouse estar e fazer com que a bola o siga
document.addEventListener('mousemove', function(m){
    //armazena a localização em tempo real do mouse em variaveis 
    let xpos = m.pageX - 10;
    let ypos = m.pageY -10;
    //console.log(xpos,ypos);
    //muda os tipos typo de localização do mouse para pixel
    animacao.style.left = xpos + 'px';
    animacao.style.top = ypos + 'px';
});

const password = document.querySelector('#senha');
const img = document.querySelector('.img');
//função para alterar o typo de password para text, e adicionar ou remover a imagem  
function typesenha() {
    if(password.type === 'password'){
        password.setAttribute('type','text');
        img.classList.add('senha_oculta');
    } else {
        password.setAttribute('type','password');
        img.classList.remove('senha_oculta');
    }
}