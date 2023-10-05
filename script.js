const links = document.querySelectorAll("nav li");


icons.addEventListener("click", () => {
    nav.classList.toggle("active");
});

links.forEach((link) => {
    link.addEventListener("click", () => {
        nav.classList.remove("active");
    });
});

const message =
  "Merci d'avoir soumis votre demande. \nL'équipe Bobo Coffee y répondra très prochainement";

function messageFR(){
    alert(message);
} 

  const message_EN =
  "Thank you for submitting your request.\nThe Bobo Coffee crew will respond shortly.";

  function messageEN(){
    alert(message_EN);
} 

