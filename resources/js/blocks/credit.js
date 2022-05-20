document.querySelectorAll('.img-inner').forEach(item => {
    var i = false;
    item.childNodes.forEach(element => {
        if (typeof element.classList !== 'undefined' && element.classList.contains('img-credit')) {
            i = true;
        }
    });
    if (i) {
        item.addEventListener('mouseenter', creditUpdate);
        item.addEventListener('mouseleave', creditUpdate);
    }
});

function creditUpdate(e) {
    var child = e.target.childNodes[3];
    if (e.type == 'mouseenter') {
        child.classList.remove('d-none');
        child.classList.add('d-block');
    } else {
        child.classList.remove('d-block');
        child.classList.add('d-none');
    }
}