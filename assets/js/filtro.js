const filtroCard = document.querySelectorAll(".product__contenido");

const filtroBtn = document.querySelectorAll(".filtro-btn");

filtroBtn.forEach((btn) => { 
  btn.addEventListener("click", () => { 
    mostrarContenido(btn);  
  })
})


function mostrarContenido(btn) { 
  filtroCard.forEach((card) => { 
    if(card.classList.contains(btn.id)) {
      resetEstilosBtn()
      btn.classList.add("active-btn-filtro")
      card.style.display = "block";
    }else { 
      card.style.display = "none"
    }
  })
}

function resetEstilosBtn() { 
  filtroBtn.forEach((btn) => { 
    btn.classList.remove("active-btn-filtro")
  })
}

window.addEventListener("DOMContentLoaded", () => { 
  filtroBtn[0].classList.add("active-btn-filtro")
})

