//Função para fixar o menu sidebar ao fazer scroll na página principal

const getScrollPos = () => {
   const scroll = window.scrollY;
   let sidebar = document.getElementById("sidebar");
   if (scroll > 500) {
       sidebar.style.position = "fixed";
       sidebar.style.top = "-50px";
   } else {
       sidebar.style.position = "static";
   }
};