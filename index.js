function login() 
{
  const loginForm = document.querySelector('#loginForm'),
  loginContainer = document.querySelector('#loginContainer');
  loginForm.style.display = 'block';
  setTimeout(function() 
  {
    loginForm.classList.add('active');
    loginContainer.classList.add('scale');
  }, 1);
}

function closeLogin()
{
    const loginForm = document.querySelector('#loginForm'),
    loginContainer = document.querySelector('#loginContainer');
    
    loginForm.classList.remove('active');
    loginContainer.classList.remove('scale');
    setTimeout(function() 
    {
        loginForm.style.display = 'none';
    }, 900);
}

function seePass(seePass, pass) {
  var password = document.getElementById(seePass);
  var passField = document.getElementById(pass);
  var x = password.classList.contains('fa-eye-slash');
  if(x)
  {
    password.classList.replace('fa-eye-slash', 'fa-eye');
    passField.type = 'text';
  }
  else
  {
    password.classList.replace('fa-eye', 'fa-eye-slash');
    passField.type = 'password';
  }
}
function signUp()
{
  const loginForm = document.getElementById('loginForm');
  const loginContainer = document.getElementById('loginContainer');
  const signUpForm = document.getElementById('signUpForm');
  const signUpContainer = document.getElementById('signUpContainer');
  loginForm.classList.remove('active');
  loginContainer.classList.remove('scale');
  setTimeout(()=>{
    loginForm.style.display = 'none';
  }, 900);
  signUpForm.style.display = 'block';
  setTimeout(() => {
    signUpForm.classList.add('active');
    signUpContainer.classList.add('scale');
  }, 1);
}

function closeSignUp()
{
  const signUpForm = document.getElementById('signUpForm');
  const signUpContainer = document.getElementById('signUpContainer');
  signUpForm.classList.remove('active');
  signUpContainer.classList.remove('scale');
  setTimeout(() => {
    signUpForm.style.display = 'none';
  }, 900);
}

function loginAgain()
{
  const signUpForm = document.getElementById('signUpForm');
  const signUpContainer = document.getElementById('signUpContainer');
  const loginForm = document.getElementById('loginForm');
  const loginContainer = document.getElementById('loginContainer');
  signUpForm.classList.remove('active');
  signUpContainer.classList.remove('scale');
  setTimeout(() => {
    signUpForm.style.display = 'none';
  }, 900);
  setTimeout(()=>{
    loginForm.style.display = 'block';
  }, 1);
  setTimeout(() => {
    loginForm.classList.add('active');
    loginContainer.classList.add('scale');
  }, 100);
}

function phone(phone)
{
  const show = document.getElementById(phone);
  show.style.display = 'block';
  setTimeout(() => {
    show.classList.add('phoneActive');
  }, 1);
}

function closePhone(phone)
{
  const close = document.getElementById(phone);
  close.classList.remove('phoneActive');
  setTimeout(()=>{
    close.style.display = 'none';
  }, 1000);
}