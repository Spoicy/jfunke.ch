document.querySelectorAll('.overflow-hidden').forEach(item => {
    new ResizeObserver(overflowUpdate).observe(item);
});

function overflowUpdate(e) {
    var parentwidth = e[0].target.clientWidth;
    var child = e[0].target.childNodes[1];
    if (child.complete && child.naturalHeight !== 0) {
        console.log("test")
        var height = child.clientHeight;
        var width = child.clientWidth;
        if (child.name == "offset-img") {
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