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
    document.querySelectorAll("input, select, textarea, .centerCircle, .darkmodebtn, .motdefin, .profilEquipe h1, footer, section > h2, .shopText, .mainPageAccueil").forEach (element => {
        element.classList.toggle("darkmode");
    }) 
});

const messageFR_Contact =
  "Merci d'avoir soumis votre demande. \nL'équipe Bobo Coffee y répondra très prochainement";

function messageFRContact(){
    alert(messageFR_Contact);
} 

  const messageEN_Contact =
  "Thank you for submitting your request.\nThe Bobo Coffee crew will respond shortly.";

  function messageENContact(){
    alert(messageEN_Contact);
} 


const messageFR_Reservation =
  "Merci d'avoir réservé chez nous.";

function messageFRReservation(){
    alert(messageFR_Reservation);
} 

  const messageEN_Reservation =
  "Thanks for your reservation.";

  function messageENResevation(){
    alert(messageEN_Reservation);
}