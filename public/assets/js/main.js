let btnSort = document.querySelectorAll('button');
let search = document.querySelectorAll('.search'); 
let arrowSort = document.querySelectorAll('i'); 
const filterUrl = 'core/libs/filter.php';
const serchUrl = 'core/libs/search.php';
  
  
btnSort.forEach(e => {
    e.addEventListener('click', function() {
        let arrow = e.querySelector('i');
        let cond = this.id;
        if (this.classList.contains('sort')) {
            removeClass(btnSort);
            removeClass(arrowSort);
            this.classList.add('desc');
            arrow.classList.add('up');
            ajaxBuilder(filterUrl, cond + " DESC");
        } else if (this.classList.contains('desc')) {
            removeClass(btnSort);
            removeClass(arrowSort);
            this.classList.add('sort');
            arrow.classList.add('down');
            ajaxBuilder(filterUrl, cond);
        } else {
            removeClass(btnSort);
            removeClass(arrowSort);
            this.classList.add('sort');
            arrow.classList.add('down');
            ajaxBuilder(filterUrl, cond);
        }
    })
})

search.forEach(e => {
    e.addEventListener('input', function(e) {
        let data = {
            where: this.dataset.search,
            value: this.value
        }
        send = "json=" + JSON.stringify(data);
        ajaxBuilder(serchUrl, send)
    })
})

function removeClass(col) {
    col.forEach(e => {
        e.className = '';
    })
}

function ajaxBuilder(url, cond) {
    fetch(url, {
    method: 'POST',
    body: cond,
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
        .then((response) => {
            return response.text();
        })
        .then((data) => {
            document.querySelector('.users').innerHTML = "";
            document.querySelector('.users').insertAdjacentHTML('afterbegin', data);
        })
}






