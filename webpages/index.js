var burger = document.querySelector(".hamburger");
var sidebar = document.querySelector(".sidebar-mobile");

var upbtn = document.querySelector(".upbtn");

function showSidebar(){
    sidebar.style.display ="block";
    sidebar.style.position ="absolute";
}

function hideSidebar(){
    sidebar.style.display ="none";
    sidebar.style.position ="static";
}