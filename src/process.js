const navbar = document.querySelector('.navbar-nav');
const nvcolor = document.querySelector('.navbar');
const maxalphnav = 0.7;
if (scrollY !== 0) {
    let aval = scrollY/640 * maxalphnav;
    nvcolor.setAttribute('style', `background: rgba(0,0,0,${aval < maxalphnav ? aval : maxalphnav});`)
}
let param = document.querySelector('#info').getBoundingClientRect().y;
if (param > -841 && param <= 0) {
    document.querySelector('#infonav').parentElement.classList.add('activelink');
} else if(param > 0) {
    document.querySelector('#nav').parentElement.classList.add('activelink');
} else {
    document.querySelector('#tautannav').parentElement.classList.add('activelink');
}
window.addEventListener('scroll', () => {
    param = document.querySelector('#info').getBoundingClientRect().y;
    if (scrollY !== 0) {
        let aval = scrollY/640 * maxalphnav;
        nvcolor.setAttribute('style', `background: rgba(0,0,0,${aval < maxalphnav ? aval : maxalphnav});`)
    } else {
        nvcolor.setAttribute('style', 'background: rgba(0,0,0,0);')
    }
    if (param > -841 && param <= 0) {
        const activelink = document.querySelector('.activelink');
        activelink.classList.remove('activelink');
        document.querySelector('#infonav').parentElement.classList.add('activelink');
    } else if(param > 0) {
        const activelink = document.querySelector('.activelink');
        activelink.classList.remove('activelink');
        document.querySelector('#nav').parentElement.classList.add('activelink');
    } else {
        const activelink = document.querySelector('.activelink');
        activelink.classList.remove('activelink');
        document.querySelector('#tautannav').parentElement.classList.add('activelink');
    }
});