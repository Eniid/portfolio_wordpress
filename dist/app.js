!function(e){var t={};function o(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=t,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(r,n,function(t){return e[t]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/",o(o.s=0)}([function(e,t,o){o(1),e.exports=o(2)},function(e,t){document.querySelectorAll(".cta");var o=document.querySelector(".main_section");o.addEventListener("scroll",(function(e){document.querySelectorAll(".child").forEach((function(e){o.scrollLeft>=e.offsetLeft&&(document.body.style.background=e.getAttribute("data-bg"),document.querySelector(".nav_bar").style.background=e.getAttribute("data-bg-2"),document.querySelector(".nav_bar_button").style.background=e.getAttribute("data-bg"))}))}),!1);var r=function(e){var t=o.scrollLeft,r=o.scrollWidth,n=document.querySelector(".nav_bar"),c=document.querySelector(".nav_bar_button");document.querySelectorAll(".child").forEach((function(e,o){var u=e.offsetLeft;e.setAttribute("data-oi",o),t>=u&&t<=u+e.offsetWidth&&(document.body.style.background=e.getAttribute("data-bg"),document.querySelector(".menu").className="menu",document.querySelector(".menu").classList.add(e.getAttribute("data-color")),c.getAttribute("data-i")!=o&&(c.style.left=u/r*n.offsetWidth+"px",c.setAttribute("data-i",o)))}))};r(),o.addEventListener("scroll",(function(e){r(),document.querySelectorAll(".tl_li").forEach((function(e){console.log(e),window.pageYOffset>=e.offsetTop-window.innerHeight-100?e.classList.add("focus-active"):e.classList.remove("focus-active")}))}),!1),document.addEventListener("mousedown",(function(e){var t=e.target;if(t.classList.contains("nav_bar")){var r=t.querySelector(".nav_bar_button");o.scrollLeft=(e.clientX-t.offsetLeft)/t.offsetWidth*o.scrollWidth,setTimeout((function(){var e=document.querySelector("*[data-oi='"+r.getAttribute("data-i")+"']");o.scrollLeft=e.offsetLeft}),10)}}),!1),document.addEventListener("click",(function(e){document.querySelector("input#switch_cb").checked?(document.body.classList.add("dark"),window.localStorage.setItem("darkmode","enable")):(document.body.classList.remove("dark"),window.localStorage.removeItem("darkmode"))}),!1),document.body.onload=function(){window.localStorage.getItem("darkmode")&&(document.querySelector("input#switch_cb").checked=!0,document.body.classList.add("dark"))};var n=document.querySelector(".revers_scrool");n.addEventListener("wheel",(function(e){n.scrollLeft+=e.deltaY}),!0)},function(e,t){}]);