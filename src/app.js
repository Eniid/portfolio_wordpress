// Du JS ici <3 

const button = document.querySelectorAll('.cta');

//button.forEach(btn => {
  //  btn.addEventListener('ckick', function(e){
    //    let x = e.clientX - e.target.offsetLeft;
      //  let x = e.clientY - e.target.offsetLeft;

     //   let ripple = document.createElement('span');
       // ripple.style.left = x + 'px'; 
    //    ripple.style.top = y + 'px'; 
      //  this.appendChild(ripples)
   // })
//})





//****  Couleur swirch
const main = document.querySelector(".main_section")
main.addEventListener("scroll", e => { // On fait en sorte que l'action se passe lorsque qu'on scrolle
document.querySelectorAll(".child").forEach(element => { // On boucle sur tous les éléments qui ont la class annim    
    const scrollDeLaPage = main.scrollLeft; // On récupère le scroll de la page
    const positionDeLElement = element.offsetLeft; // Puis la position de l'élément .annim
    if (scrollDeLaPage >= positionDeLElement) { // Si on est plus bas que l'élément en bas + 200px (à modifier si tu veux que l'event se passe plus tôt)
        document.body.style.background = element.getAttribute("data-bg")
    }
})
}, false)






        const setScroll = (e) => {
            const scrollDeLaPage = main.scrollLeft; // On récupère le scroll de la page
            const tailleDeLaPage = main.scrollWidth;
            const scrollbar = document.querySelector(".nav_bar")
            const button = document.querySelector(".nav_bar_button")
            document.querySelectorAll(".child").forEach((element,
            i) => { // On boucle sur tous les éléments qui ont la class annim
                const positionDeLElement = element.offsetLeft; // Puis la position de l'élément .annim
                element.setAttribute("data-oi", i)
                if (scrollDeLaPage >= positionDeLElement -20 && scrollDeLaPage <= positionDeLElement + element
                    .offsetWidth +20 
                    ) { // Si on est plus bas que l'élément en bas + 200px (à modifier si tu veux que l'event se passe plus tôt)
                    document.querySelector(".nav_bar").style.background = element.getAttribute("data-bg-2")
                    document.querySelector(".nav_bar_button").style.background = element.getAttribute("data-bg")
                    document.body.style.background = element.getAttribute("data-bg")
                    document.querySelector(".menu").className = "menu"
                    document.querySelector(".menu").classList.add(element.getAttribute("data-color"))
                    if (button.getAttribute("data-i") != i) {
                        button.style.left = ((positionDeLElement / tailleDeLaPage)) * scrollbar
                            .offsetWidth + "px"
                        button.setAttribute("data-i", i);
                    }
                }
            })
        }
        
        setScroll()
        main.addEventListener("scroll", e => { // On fait en sorte que l'action se passe lorsque qu'on scrolle    
            setScroll(e)
            document.querySelectorAll(".tl_li").forEach(element => { // On boucle sur tous les éléments qui ont la class annim
                console.log(element);
                
                const scrollDeLaPage = window.pageYOffset; // On récupère le scroll de la page
                const positionDeLElement = element.offsetTop; // Puis la position de l'élément .annim
                const tailleDeLaPage = window.innerHeight // et on prend la taille de la page
                if (scrollDeLaPage >= positionDeLElement - tailleDeLaPage - 100) { // Si on est plus bas que l'élément en bas + 200px (à modifier si tu veux que l'event se passe plus tôt)
                    element.classList.add("focus-active"); // on ajoute la class
                }else{
                    element.classList.remove("focus-active");
                }
            })
        }, false)
        document.addEventListener("mousedown", e => {
            const el = e.target;
            if (el.classList.contains("nav_bar")) {
                const button = el.querySelector(".nav_bar_button")
                //button.style.left = e.clientX - el.offsetLeft +"px"
                main.scrollLeft = ((e.clientX - el.offsetLeft) / el.offsetWidth) * main.scrollWidth
                setTimeout(() => {
                    const current = document.querySelector("*[data-oi='" + button.getAttribute(
                        "data-i") + "']")
                    main.scrollLeft = current.offsetLeft
                }, 10)
            }
        }, false)



// darkmode

document.addEventListener("click", e=>{
    const cb = document.querySelector("input#switch_cb")
    if(cb.checked){
        document.body.classList.add("dark")
        window.localStorage.setItem("darkmode", "enable")
    }else{
        document.body.classList.remove("dark")
        window.localStorage.removeItem("darkmode")
    }
}, false)
document.body.onload = ()=>{
const dm = window.localStorage.getItem("darkmode")
if(dm){
    const cb = document.querySelector("input#switch_cb")
    cb.checked = true
    document.body.classList.add("dark")
}
}




const element = document.querySelector(".revers_scrool")
element.addEventListener("wheel", e=>{
    //e.preventDefault()
    element.scrollLeft += e.deltaY
}, true)