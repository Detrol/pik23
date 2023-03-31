gsap.registerPlugin(ScrollTrigger);


gsap.utils.toArray(".animCounter").forEach(box => {
    var tler =  gsap.from(box, {
        textContent: "0",
        duration: 2,
        ease: "power1.inOut",
        modifiers: {
            textContent: value => formatNumber(value, 0)
        },
        scrollTrigger: {
            trigger: box,
            start: "top 90%",
            end: "bottom 50%+=100px",
        }
    }); })


function formatNumber(value, decimals) {
    let s = (+value).toLocaleString('en-US').split(".");
    return decimals ? s[0] + "." + ((s[1] || "") + "00000000").substr(0, decimals) : s[0];
}
