const navbar = document.querySelector('.navbar-nav')

navbar.addEventListener('click', e => {
    console.log(e.target.tagName);
    console.log(e.target.classList);
    if (e.target.tagName === "SPAN") {
        const activelink = document.querySelector('.activelink');
        activelink.classList.remove('activelink');
        e.target.parentElement.parentElement.classList.add('activelink');
    } else if (e.target.classList.contains('nav-link')) {
        const activelink = document.querySelector('.activelink');
        activelink.classList.remove('activelink');
        e.target.parentElement.classList.add('activelink');
    }
})