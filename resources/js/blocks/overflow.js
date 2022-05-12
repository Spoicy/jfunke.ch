document.querySelectorAll('.overflow-hidden').forEach(item => {
    new ResizeObserver(overflowUpdate).observe(item);
    item.addEventListener('load', overflowUpdate);
});

function overflowUpdate(e) {
    var parentwidth = e[0].target.clientWidth;
    var child = e[0].target.childNodes[1];
    var height = child.clientHeight;
    var width = child.clientWidth;
    if (child.complete && child.naturalHeight !== 0) {
        if (child.name == "offset-img" || child.name == "subheading-img") {
            var heightCheck = 250;
            if (window.innerWidth < 768) {
                heightCheck = 150;
            }
        } else {
            var heightCheck = 500;
            if (window.innerWidth < 768) {
                heightCheck = 400;
            }
        }
        if (child.classList.contains("center-y") && height < heightCheck) {
            child.classList.remove("center-y");
            child.classList.add("center-x");
            console.log("updated to x");
        } else if (child.classList.contains("center-x") && width < parentwidth) {
            child.classList.remove("center-x");
            child.classList.add("center-y");
            console.log("updated to y");
        }
    }
}