var num = 15;

var modalBtn = document.querySelector('.open');
var closeBtn = document.querySelector('.close');

var modalContainer = document.querySelector('.modals');
var holdModals = document.createDocumentFragment();

for (var i = 0; i < num; i++) {
  var div = document.createElement('div');
  div.classList.add('modal-drop');
  div.style.top = Math.floor((Math.random() * 100)) + 'vh';
  div.style.left = Math.floor((Math.random() * 100)) + 'vw';
  div.style.transitionDelay = Math.random() + 's';
  holdModals.appendChild(div);
}
console.log();
modalContainer.appendChild(holdModals);

modalBtn.addEventListener('click',function(){
  modalContainer.style.display = 'block';  
  window.setTimeout(function(){
    modalContainer.classList.add('active');
  },0.1);
});

closeBtn.addEventListener('click',function(){
   modalContainer.classList.remove('active');
  
   window.setTimeout(function(){
    modalContainer.style.display = 'none';
  },3000);
});
// const dark = document.getElementsById('dark')
// const darkTheme = 'dark-theme'
// const iconTheme = 'bx-moon'
// const selectedTheme = localStorage.getItem('selected-theme')
// const selectedIcon = localStorage.getItem('selected-icon')
// const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'light':'dark'
// const getCurrentIcon = () => dark.classList.contains(iconTheme) ? 'bx bx-sun':'bx bx-moon'
// if(selectedTheme){
//     document.body.classList[selectedTheme === 'dark'?'add':'remove'](darkTheme)
//     dark.classList[selectedIcon === 'bx-moon'?'add':'remove'](iconTheme)   
// }

// dark.addEventListener('click',()=>{
//     document.body.classList.toggle(darkTheme)
//     themeButtton.body.classList.toggle(iconTheme)
//     localStorage.setItem('selected-theme',getCurrentTheme())
//     localStorage.setItem('selected-icon',getCurrentIcon())
// })