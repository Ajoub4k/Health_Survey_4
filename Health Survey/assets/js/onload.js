window.onload = function() {
    var headerEle = document.getElementsByTagName("header")[0];
    var bodyEle = document.getElementById("main-container");
    var footerEle = document.getElementsByTagName("footer")[0];

    var headAndHeaderHeigh = headerEle.offsetHeight + footerEle.offsetHeight + 96;

    bodyEle.style.minHeight = `calc(100vh - ${headAndHeaderHeigh}px)`;
};