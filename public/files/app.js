

var hrefapp = document.getElementsByTagName('a');
var local = location.pathname.replace('/', '');

for (let items = 0; items < hrefapp.length; items++) {
    if (hrefapp[items].classList.contains('sidebaritems')) {
        if (hrefapp[items].innerText.toLowerCase() == local || local.indexOf(removeAccents(hrefapp[items].innerText
            .toLowerCase())) != -
            1) {
            hrefapp[items].parentElement.classList.add('active');
        }
    }
}

checksTheme();

document.getElementById('hrefTheme').addEventListener('click', function () {
    let theme = this.childNodes.item('i').classList.contains('fa-sun');

    localStorage.setItem('theme', theme ? 'light' : 'dark');

    checksTheme();
})

function checksTheme() {
    var _theme = localStorage.getItem('theme');

    if (_theme == 'dark') {
        if (document.body.classList.contains('white-content')) {
            document.body.classList.remove('white-content');
        }
    } else {
        document.body.classList.add('white-content');
    }

    document.getElementById('hrefTheme').innerHTML =
        `<i class="fa fa-${localStorage.getItem('theme') == 'dark' ? 'sun' : 'moon'}"></i>`;

    var modal = document.getElementsByClassName('modal')

    for (let m = 0; m < modal.length; m++) {
        if (_theme == 'dark') {
            if (!modal[m].classList.contains('modal-black')) {
                modal[m].classList.add('modal-black')
            }
        } else {
            if (modal[m].classList.contains('modal-black')) {
                modal[m].classList.remove('modal-black')
            }
        }
    }

    var dropdown = document.getElementsByClassName('dropdown-menu')

    for (let d = 0; d < dropdown.length; d++) {
        if (_theme == 'dark') {
            if (!dropdown[d].classList.contains('dropdown-black')) {
                dropdown[d].classList.add('dropdown-black')
            }
        } else {
            if (dropdown[d].classList.contains('dropdown-black')) {
                dropdown[d].classList.remove('dropdown-black')
            }
        }
    }
}

function removeAccents(s) {
    return s.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
}

