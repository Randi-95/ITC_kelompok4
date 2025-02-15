const buttonDropdown = document.querySelector('.dropdown-button')
const topikForum = document.querySelector('.topik-forum')

buttonDropdown.addEventListener('click', function(){
    topikForum.classList.toggle('active')
})

const usernameProfile = document.querySelector('.username-profile')
const isiProfile = document.querySelector('.isi-profile')

usernameProfile.addEventListener('mouseover', function(){
    isiProfile.classList.remove('hidden')
})

usernameProfile.addEventListener('mouseout', function(){
    isiProfile.classList.add('hidden')
})

isiProfile.addEventListener('mouseover', function(){
    isiProfile.classList.remove('hidden')
})

isiProfile.addEventListener('mouseout', function(){
    isiProfile.classList.add('hidden')
})

const buttonNotifikasi = document.querySelector('.notifikasi')
const isiNotifikasi = document.querySelector('.isi-notifikasi')

buttonNotifikasi.addEventListener('mouseover', function(){
    isiNotifikasi.classList.remove('hidden')
})

buttonNotifikasi.addEventListener('mouseout', function(){
    isiNotifikasi.classList.add('hidden')
})

isiNotifikasi.addEventListener('mouseover', function(){
    isiNotifikasi.classList.remove('hidden')
})

isiNotifikasi.addEventListener('mouseout', function(){
    isiNotifikasi.classList.add('hidden')
})