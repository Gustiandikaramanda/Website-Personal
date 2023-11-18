let mainSection = document.querySelector("main");
let navSection = document.querySelector("nav");
let navItems = document.querySelectorAll("nav a");

mainSection.classList.toggle("closed");
navSection.classList.toggle("closed");

let navElementsText = [];
let navElementsI = [];

let i = 0;
navItems.forEach((ele)=>{
        navElementsText.push(ele.textContent);
        navElementsI.push(ele.firstElementChild);
        ele.innerHTML = "";
        ele.append(navElementsI[i]);

    i++;
    if (i == navItems.length) {
        i = 0;
    }
});
let footer = navSection.lastElementChild;
navSection.lastElementChild.remove();

let menuBtn = document.createElement("i");
menuBtn.className = "fa-solid fa-bars";
menuBtn.style.cssText = "color: var(--color-two);font-size: 20px;position:absolute;top:50px;cursor:pointer;transition: .6s;left: 32%;transform: translate(0, -50%);"
navSection.prepend(menuBtn);

menuBtn.onclick = ()=>{
    mainSection.classList.toggle("closed");
    navSection.classList.toggle("closed");
    menuBtn.classList.toggle("closed");

    let j = 0;
    if (navSection.classList.contains("closed")) {
        navItems.forEach((ele)=>{
            ele.innerHTML = "";
            ele.append(navElementsI[j]);
            j++;
        });
        j = 0;

        navSection.lastElementChild.remove();
    }else {
        navItems.forEach((ele)=>{
            ele.append(navElementsText[j]);
            j++;
        });
        j = 0;
        
        navSection.append(footer);
    }
    
}