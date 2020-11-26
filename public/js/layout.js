let burger = document.querySelector('.burger')
let sub_mobile = document.querySelector('.sub_mobile')

burger.addEventListener('click', () => {
    sub_mobile.style.display == "none" || sub_mobile.style.display == "" ? sub_mobile.style.display = "block" : sub_mobile.style.display = "none";
})

window.addEventListener('resize', () => {
    window.innerWidth > 767 ? sub_mobile.style.display = "none": "none";
})
