new ResizeObserver(subheadingImgOverflow).observe(document.querySelector('.block-subheading'));
let mode = 0;
let child;
function subheadingImgOverflow() {
    console.log('testsetset');
    if (window.innerWidth < 992 && mode == 0) {
        document.querySelectorAll('.block-subheading .main-img .img-inner').forEach(item => {
            child = item.childNodes[1];
            item.classList.add('overflow-hidden');
            child.classList.add('center-y');
        });
        mode = 1;
    } else if (window.innerWidth >= 992 && mode == 1) {
        document.querySelectorAll('.block-subheading .main-img .img-inner').forEach(item => {
            child = item.childNodes[1];
            item.classList.remove('overflow-hidden');
            child.classList.remove('center-y');
            child.classList.remove('center-x');
        });
        mode = 0;
    }
}