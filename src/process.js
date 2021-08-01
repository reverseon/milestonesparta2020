const navbar = document.querySelector('.navbar-nav');
const nvcolor = document.querySelector('.navbar');
const maxalphnav = 0.7;
if (scrollY !== 0) {
    let aval = scrollY/640 * maxalphnav;
    nvcolor.setAttribute('style', `background: rgba(0,0,0,${aval < maxalphnav ? aval : maxalphnav});`)
}
const furl = location.href;
const target = `#${furl.split('#')[1]}nav`
const factive = document.querySelector(target);
factive.parentElement.classList.add('activelink');
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

window.addEventListener('scroll', () => {
    if (scrollY !== 0) {
        let aval = scrollY/640 * maxalphnav;
        nvcolor.setAttribute('style', `background: rgba(0,0,0,${aval < maxalphnav ? aval : maxalphnav});`)
    } else {
        nvcolor.setAttribute('style', 'background: rgba(0,0,0,0);')
    }
});