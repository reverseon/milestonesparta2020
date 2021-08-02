
const navbar = document.querySelector('.navbar-nav');
const nvcolor = document.querySelector('.navbar');
const refbtn = document.querySelector('.btn-refresh');
const corona = new Corona();
const render = new Render();
// initializer
const maxalphnav = 0.7;
if (scrollY !== 0) {
    let aval = scrollY/640 * maxalphnav;
    nvcolor.setAttribute('style', `background: rgba(0,0,0,${aval < maxalphnav ? aval : maxalphnav});`)
}
let param = document.querySelector('#info').getBoundingClientRect().y;
let berandapr = document.querySelector('#beranda').getBoundingClientRect().y;
let tautanpr = document.querySelector('#tautan').getBoundingClientRect().y;
if (param > tautanpr && param <= berandapr) {
    document.querySelector('#infonav').parentElement.classList.add('activelink');
} else if(param > berandapr) {
    document.querySelector('#nav').parentElement.classList.add('activelink');
} else {
    document.querySelector('#tautannav').parentElement.classList.add('activelink');
}
const listprovinsi = document.querySelectorAll('.listprovinsi');
let allProvincedate = null;
let lastProvince = null;

function getTotalData() {
    corona.getTotal().then(dat=>render.updateTotal(dat[0])).catch(e=>console.log(e));
}

function getProvinceData(val) {
    if (val) {
        corona.getAllProvince().then(dat=>{
            allProvincedate = dat;
            updateProvinceData(val);
        }).catch(e=>console.log(e));
    } else {
        corona.getAllProvince().then(dat=>{
            allProvincedate = dat;
            updateProvinceSelect();
        }).catch(e=>console.log(e));
    }
}

function updateProvinceSelect() {
    listprovinsi.forEach(el => {
        allProvincedate.forEach(e => {
            el.innerHTML += `<option value="${e.attributes.Kode_Provi}">${e.attributes.Provinsi}</option>`;
        })
    });
}

function updateProvinceData(val) {
    allProvincedate.forEach(elm => {
        if (elm.attributes.Kode_Provi == val) {
            render.updateProvinsi(elm.attributes);
        }
    })
}

// Initialization
getTotalData();
getProvinceData();

listprovinsi.forEach(e => {
    e.addEventListener('change', el => {
        if (e.value == "69420") {
            lastProvince = null;
            getTotalData();
        }
        else if (e.value !== "Pilih Provinsi") {
            lastProvince = e.value;
        }
        updateProvinceData(lastProvince);
    })
})

refbtn.addEventListener('click', e => {
    e.preventDefault();
    render.updateTotal({
        positif: "refreshing",
        sembuh: "refreshing",
        meninggal: "refreshing"
    })
    if (lastProvince) {
        getProvinceData(lastProvince); 
    } else {
        getTotalData();
    }
});


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