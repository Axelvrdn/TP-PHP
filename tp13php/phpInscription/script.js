//alert('js appelé')
console.log('js appelé')
const monFormulaire = document.getElementById('leForm');
const myRegex = /^[a-zA-Z\-]+$/;
const myPassword = document.getElementById('pwd');
const myRegexPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\W]{12,}$/; 
const inputLogin = document.getElementById('login');

inputLogin.addEventListener('input', function(e) {
  if (inputLogin.value.trim() === '') {
    const errorLogin = document.getElementById('errorLogin');
    errorLogin.innerText = "Le champ login est requis.";
    errorLogin.style.color = 'red';

  }
  else {
    errorLogin.innerText = "";
    if (!myRegex.test(inputLogin.value)) {
    const errorLogin = document.getElementById('errorLogin');
    errorLogin.innerText = "Le login ne peut contenir que des lettres et des traits d'union.";
    errorLogin.style.color = 'red';
    }
  }
});

myPassword.addEventListener('input',function(e){
  if (myPassword.value.trim() === '') {
    const errorPwd = document.getElementById('errorPwd');
    errorPwd.innerText = "Le champ mot de passe est requis.";
    errorPwd.style.color = 'red';
  
  }
  else {
    errorPwd.innerText = ""; 
    if (!myRegexPass.test(myPassword.value)) {
    const errorPwd = document.getElementById('errorPwd');
    errorPwd.innerText = "Le mot de passe doit contenir au moins 12 caractères, une minuscule, une majuscule et un caractère spécial.";
    errorPwd.style.color = 'red';
    }
  }
});

inputLogin.addEventListener('submit', function(e) {
  if (inputLogin.value.trim() === '') {
    const errorLogin = document.getElementById('errorLogin');
    errorLogin.innerText = "Le champ login est requis.";
    errorLogin.style.color = 'red';

  }
});

myPassword.addEventListener('submit',function(e){
  if (myPassword.value.trim() === '') {
    const errorPwd = document.getElementById('errorPwd');
    errorPwd.innerText = "Le champ mot de passe est requis.";
    errorPwd.style.color = 'red';
  
  }
});

monFormulaire.addEventListener('submit', function(e) {
  
});