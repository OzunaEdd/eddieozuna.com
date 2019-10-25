const menu = document.querySelector('.menu');
const nav = document.getElementById('nav');
const exit = document.getElementById('exit');
const arrowBtn = document.querySelector('.arrow-btn');
const logo = document.querySelector('.logo');
const instaICon = document.querySelectorAll('.insta-icon');
const linkedIcon = document.querySelectorAll('.linked-icon');
const gitIcon = document.querySelectorAll('.github-icon');
const cardOne = document.querySelectorAll('.btn-one');
const cardTwo = document.querySelectorAll('.btn-two');
// toggle menu
menu.addEventListener('click', e => {
  nav.classList.toggle('hide-mobile');
})
exit.addEventListener('click', e => {
  nav.classList.toggle('hide-mobile');
})
// arrow button
arrowBtn.addEventListener('click', e => {
  window.location.href = '#portfolio';
})
logo.addEventListener('click', e => {
  location.href = 'https://www.eddieozuna.com';
})
cardOne.forEach(element => {element.addEventListener('click', e => {
                  window.open(
                      'https://hackathonmanagement.herokuapp.com/index.php',
                      '_blank');
                })});
cardTwo.forEach(element => {element.addEventListener('click', e => {
                  window.open(
                      'https://devpost.com/software/bmcc-hub-yrfqkm', '_blank');
                })});
instaICon.forEach(element => {element.addEventListener('click', e => {
                    window.open(
                        'https://www.instagram.com/ayogoldo/', '_blank');
                  })});


linkedIcon.forEach(element => {element.addEventListener('click', e => {
                     window.open(
                         'https://www.linkedin.com/in/eddie-ozuna-89b83b186/',
                         '_blank');
                   })});


gitIcon.forEach(element => {element.addEventListener('click', e => {
                  window.open('https://github.com/OzunaEdd', '_blank');
                })});
