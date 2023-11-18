let navItems = document.querySelectorAll("nav a");
let menuBtn = document.querySelector(".menuBtn");
navItems.forEach((ele)=>{
    ele.onclick = ()=>{
        navItems.forEach((elem)=>{
            elem.classList.remove("selected");
        });
        ele.classList.add("selected");

    }
});
navItems.forEach((ele)=>{
    if (window.location.pathname.slice(1) == ele.innerText.toLowerCase().trim()) {
        ele.classList.add("selected");
    }else if(window.location.pathname.slice(1) == "" && ele.innerText == "Home") {
        ele.classList.add("selected");
    }
});

let flage = true;
menuBtn.onclick = ()=>{
    if (flage) {
        document.querySelector("nav").style.height = "10%";
        document.querySelector("nav").style.padding = "20px";
        document.querySelector("main").style.height = "90%";
        flage = false;
    }else {
        document.querySelector("nav").setAttribute("style","");
        document.querySelector("main").setAttribute("style","");
        flage = true;
    }
}
