const counters = document.querySelectorAll('.value');
const speed = 400;

counters.forEach(counter => {
  const animate = () => {
    const value = +counter.getAttribute('akhi');
    const data = +counter.innerText;

    const time = value / speed;
    if (data < value) {
      counter.innerText = Math.ceil(data + time);
      setTimeout(animate, 1);
    } else {
      counter.innerText = value;
    }
  }
  animate();
});

document.addEventListener('DOMContentLoaded', () => {
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(el => {
      el.addEventListener('click', () => {

        const target = el.dataset.target;
        const $target = document.getElementById(target);
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});

/* $(document).ready(function () {
  $(".navbar-burger").click(function () {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").toggleClass("is-active");
  });
}); */

//-------------------------------MENU----------------------------------//
if (document.addEventListener) {
  document.addEventListener("contextmenu", function(e) {
      e.preventDefault();
      return false;
  });
} else { //Versão antiga do "IE"
  document.attachEvent("oncontextmenu", function(e) {
      e = e || window.event;
      e.returnValue = false;
      return false;
  });
}

//-------------------------------BLOCKS----------------------------------//
if (document.addEventListener) {
  document.addEventListener("keydown", bloquearSource);
} else { //Versão antiga do "IE"
  document.attachEvent("onkeydown", bloquearSource);
}
function bloquearSource(e) {
  e = e || window.event;
  var code = e.which || e.keyCode;
  if (
      e.ctrlKey &&
      (code == 83 || code == 85) //83 = S, 85 = U
  ) {
      if (e.preventDefault) {
          e.preventDefault();
      } else {
          e.returnValue = false;
      }
      return false;
  }
}

//-------------------------------BLOCKS----------------------------------//
window.onload = function () {
  document.addEventListener("contextmenu", function (e) {
      e.preventDefault();
  }, false);
  document.addEventListener("keydown", function (e) {
   if (e.keyCode == 123) {
          disabledEvent(e);
         }
  }, false);
  function disabledEvent(e) {
      if (e.stopPropagation) {
          e.stopPropagation();
      } else if (window.event) {
          window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
  }
}
//editar: removido ";" do último "}" devido a um erro de javascript

$(document).ready(function () {
  $(".profile .icon_wrap").click(function () {
    $(this).parent().toggleClass("active");
  });

  $(".close").click(function () {
    $(".popup").hide();
  });
});