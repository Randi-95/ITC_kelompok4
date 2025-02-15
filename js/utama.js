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