const links = document.querySelectorAll("nav li");


icons.addEventListener("click", () => {
    nav.classList.toggle("active");
});

links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    });
});


// test bouton dark mode

const darkmode = document.querySelector(".darkmodebtn");


darkmode.addEventListener("click", function () {
    document.body.classList.toggle("darkmode");
    document.querySelectorAll("input, select, .centerCircle, .darkmodebtn, .motdefin, .profilEquipe h1, footer").forEach (element => {
        element.classList.toggle("darkmode");
    }) 
});

const message =
  "Merci d'avoir soumis votre demande. \nL'équipe Bobo Coffee y répondra très prochainement";

function messageFRContact(){
    alert(message);
} 

  const message_EN =
  "Thank you for submitting your request.\nThe Bobo Coffee crew will respond shortly.";

  function messageENContact(){
    alert(message_EN);
} 


const message =
  "Merci d'avoir réservé chez nous.";

function messageFR(){
    alert(message);
} 

  const message_EN =
  "Thanks for your reservation.";

  function messageENResevation(){
    alert(message_EN);
}