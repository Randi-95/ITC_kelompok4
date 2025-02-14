const buttonDropdown = document.querySelector('.dropdown-button')
const topikForum = document.querySelector('.topik-forum')

buttonDropdown.addEventListener('click', function(){
    topikForum.classList.toggle('active')
})
