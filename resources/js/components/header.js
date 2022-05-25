document.getElementById('moButton').addEventListener('click', menuState);
document.getElementById('mcButton').addEventListener('click', menuState);

function menuState() {
    const menu = document.getElementById('mPopout');
    const background = document.getElementById('bDim');
    const menuclose = document.getElementById('mcButton');
    if (menu.className.includes('active')) {
        menu.classList.remove('active');
        background.classList.remove('active');
        menuclose.classList.remove('active');
    } else {
        menu.classList.add('active');
        background.classList.add('active');
        menuclose.classList.add('active');
    }
}