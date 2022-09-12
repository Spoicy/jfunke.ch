document.querySelectorAll('.overflow-hidden').forEach(item => {
    new ResizeObserver(overflowUpdate).observe(item);
    item.addEventListener('load', overflowUpdate);
});

function overflowUpdate(e) {
    if (Array.isArray(e)) {
        var parentwidth = e[0].target.clientWidth;
        var child = e[0].target.childNodes[1];
    } else {
        var parentwidth = e.clientWidth;
        var child = e.childNodes[1];
    }
    var height = child.clientHeight;
    var width = child.clientWidth;
    if (child.complete && child.naturalHeight !== 0) {
        if (child.name == "offset-img" || child.name == "subheading-img") {
            var heightCheck = 250;
            if (window.innerWidth < 768) {
                heightCheck = 150;
            } else if (window.innerWidth < 992 && child.name == "offset-img") {
                heightCheck = 300;
            }
        } else {
            var heightCheck = 500;
            if (window.innerWidth < 768) {
                heightCheck = 400;
            }
        }
        if (child.classList.contains("center-3d")) {
            if (height < heightCheck) {
                child.style.height = "100%";
                child.style.width = "auto";
            } else if (width < parentwidth) {
                child.style.width = "100%";
                child.style.height = "auto";
            }
        }
    } else {
        child.addEventListener('load', imageLoad);
    }
}

function imageLoad(e) {
    overflowUpdate(e.target.parentElement);
}