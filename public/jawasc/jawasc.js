const body = document.body;
const cardsupport = document.getElementById("support_contact");
const buttonchat = document.getElementById("joki_chat_close");
const button_open = document.getElementById("support_open_but");

const orderggs = document.getElementById('order_gg');
const buttonorder = document.getElementById('pop_jok_button');

const popup = document.getElementById('popup_awal');
const buttonpop = document.getElementById('popup_button');

if (sessionStorage.getItem('popup') == null) {
    body.style.overflowY = "hidden";
    popup.classList.remove("hidden");
    popup.classList.add("flex");
} else {
        popup.classList.remove("flex");
        popup.classList.add("hidden");
        body.style.overflowY = "scroll";
}

buttonpop.addEventListener("click", ()=> {
    if (popup.classList.contains("flex")){
        popup.classList.remove("flex");
        popup.classList.add("hidden");
        body.style.overflowY = "scroll";  
    sessionStorage.setItem('popup', 'gas');
    } else {
        popup.classList.remove("hidden");
        popup.classList.add("flex");
        body.style.overflowY = "hidden";
    }
});

button_open.addEventListener('click', ()=> {
    body.style.overflowY="hidden"; 
    cardsupport.style.display = "flex";
})

buttonchat.addEventListener('click', () => {
cardsupport.style.display = "none";
body.style.overflowY="scroll";
});

buttonorder.addEventListener("click", ()=> {
    body.style.overflowY = "scroll"
    orderggs.classList.remove("flex")
    orderggs.classList.add("hidden")
});


