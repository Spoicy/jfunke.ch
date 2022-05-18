if (document.querySelector('.block-subheading')) {
    new ResizeObserver(subheadingImgOverflow).observe(document.querySelector('.block-subheading'));
    let mode = 0;
    let child;
    function subheadingImgOverflow() {
        if (window.innerWidth < 992 && mode == 0) {
            document.querySelectorAll('.block-subheading .main-img .img-inner').forEach(item => {
                child = item.childNodes[1];
                item.classList.add('overflow-hidden');
                child.classList.add('center-3d');
            });
            mode = 1;
        } else if (window.innerWidth >= 992 && mode == 1) {
            document.querySelectorAll('.block-subheading .main-img .img-inner').forEach(item => {
                child = item.childNodes[1];
                item.classList.remove('overflow-hidden');
                child.classList.remove('center-3d');
            });
            mode = 0;
        }
    }
}