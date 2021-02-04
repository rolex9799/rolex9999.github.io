
// MODAL Construction
const btns = document.querySelectorAll(".btn-hockey");
const modal = document.querySelector("#modal");
const close = document.querySelector(".close");
const teamName = document.querySelector(".team-title");
const modalImage = document.querySelector(".modal-image");


const showTeamInfo = (event) => {

  const btnSiblings = event.target.parentNode.children;
  const image = btnSiblings[0];
  const imageSrc = image.getAttribute("src");
  const nameToBeDisplayed = btnSiblings[1].children[0].innerHTML;
 
  modalImage.insertAdjacentHTML("afterbegin", `<img class="team-img" src="${imageSrc}" alt="servette">`);


  teamName.innerHTML = nameToBeDisplayed;
}


// SHOW MODAL

btns.forEach((btn) => {
  btn.addEventListener("click", (event) => {

    event.preventDefault();
    modal.classList.add("modal-show");
    showTeamInfo(event);
  });
})

const clearModalData = () =>{
  teamName.innerHTML = "";
  modalImage.innerHTML = "";
}

// REMOVE MODAL
close.addEventListener("click", () => {

  modal.classList.remove("modal-show");
  clearModalData();
})

document.addEventListener("keydown", (event)=> {

  if(event.key == "Escape"){

    modal.classList.remove("modal-show");
    clearModalData();
  }

})


// EXTRA overflow CBJ

const disabledCard = document.querySelector(".club-disabled");

disabledCard.addEventListener("mouseenter", ()=>{
  disabledCard.classList.add("overflow");
})

disabledCard.addEventListener("mouseleave", ()=>{
  disabledCard.classList.remove("overflow");
})


//Navbar responsive


const navSlide = () => {

  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-items');

  const navLinks = document.querySelectorAll('.nav-item');

  burger.addEventListener('click', () => {

    nav.classList.toggle('nav-active');

    navLinks.forEach((link, index) => {

      if(link.style.animation){
        link.style.animation = '';
      }
      // else{
      //   link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1.1}s`;
      // }
    })

    burger.classList.toggle('toggle');
  })

}

navSlide();