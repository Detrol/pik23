function formatNumber(value, decimals) {
    let s = (+value).toLocaleString('en-US').split(".");
    return decimals ? s[0] + "." + ((s[1] || "") + "00000000").substr(0, decimals) : s[0];
}

const loaderContainer = document.querySelector('.loading-screen');

window.addEventListener('load', () => {
    loaderContainer.style.transition = '.5s';
    loaderContainer.style.opacity = '0';
    loaderContainer.style.visibility = 'hidden';
});

