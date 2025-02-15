const buttonDropdown = document.querySelector('.dropdown-button')
const topikForum = document.querySelector('.topik-forum')

buttonDropdown.addEventListener('click', function(){
    topikForum.classList.toggle('active')
})

const usernameProfile = document.querySelector('.username-profile')
const isiProfile = document.querySelector('.isi-profile')

usernameProfile.addEventListener('click', function(){
    isiProfile.classList.toggle('hidden')
})

const buttonNotifikasi = document.querySelector('.notifikasi')
const isiNotifikasi = document.querySelector('.isi-notifikasi')

buttonNotifikasi.addEventListener('click', function(){
    isiNotifikasi.classList.toggle('hidden')
})