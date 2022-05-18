const dark = document.getElementsById('dark')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-moon'
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'light':'dark'
const getCurrentIcon = () => dark.classList.contains(iconTheme) ? 'bx bx-sun':'bx bx-moon'
if(selectedTheme){
    document.body.classList[selectedTheme === 'dark'?'add':'remove'](darkTheme)
    dark.classList[selectedIcon === 'bx-moon'?'add':'remove'](iconTheme)   
}

dark.addEventListener('click',()=>{
    document.body.classList.toggle(darkTheme)
    themeButtton.body.classList.toggle(iconTheme)
    localStorage.setItem('selected-theme',getCurrentTheme())
    localStorage.setItem('selected-icon',getCurrentIcon())
})