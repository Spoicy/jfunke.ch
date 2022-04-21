document.querySelectorAll('.overflow-hidden').forEach(item => {
    new ResizeObserver(overflowUpdate).observe(item);
    console.log("item added");
});

function overflowUpdate(e) {
    console.log("test")
    var parentwidth = e[0].target.clientWidth;
    var child = e[0].target.childNodes[1];
    var height = child.clientHeight;
    var width = child.clientWidth;
    if (child.classList.contains("center-y") && height < 250) {
        child.classList.remove("center-y");
        child.classList.add("center-x");
        console.log("updated to x");
    } else if (child.classList.contains("center-x") && width < parentwidth) {
        child.classList.remove("center-x");
        child.classList.add("center-y");
        console.log("updated to y");
    }
}