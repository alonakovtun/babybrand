import { ready } from "./utils";
import { initHeaderScripts } from "./header";

function initHomePageScripts() {
    
}

(function () {
    const config = window.js_config;

    ready(() => {
        console.log("ready", { config });

        initHeaderScripts();

        initHomePageScripts();
    });
})();


const miniCart = () => {
    const triggerButton = document.querySelector('.mini-cart-trigger'),
          cart = document.querySelector('.mini-cart'),
          closeButton = document.querySelector('.mini-cart__close');
  
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.mini-cart-trigger')) {
        if (cart.classList.contains('_active')) {
          if (e.target.closest('.mini-cart') == null) {
            cart.classList.remove('_active');
            document.body.classList.remove('mini-cart_active');
          }
        }
      }
    });
  
    triggerButton.addEventListener('click', (e) => {
      e.preventDefault();
  
      cart.classList.add('_active');
      document.body.classList.add('mini-cart_active');
    });
  
    closeButton.addEventListener('click', (e) => {
      e.preventDefault();
  
      cart.classList.remove('_active');
      document.body.classList.remove('mini-cart_active');
    })
  
  
  };

 jQuery(".menu-item").children("a").addClass("link");
 jQuery(".menu-item").addClass("header-list__item");

//  var subMenu = function subMenu() {
//   var parentMenu = document.querySelectorAll('.menu-item-has-children');
//   if (!parentMenu) return;
//   parentMenu.forEach(function (item) {
//     var subMenu = item.querySelector('.sub-menu');
//     var element = document.createElement('ul');
//     (window.innerWidth || document.documentElement.clientWidth) > 720 ? element.classList.add('sub-menu') : element.classList.add('submenu');
//     element.innerHTML = subMenu.innerHTML;
//     subMenu.remove();
//     item.parentNode.insertBefore(element, item.nextElementSibling);
//   });
// };

// var subMenuHover = function subMenuHover() {
//   var parentMenu = document.querySelectorAll('.menu-item-has-children');
//   if (!parentMenu) return;
//   parentMenu.forEach(function (item) {
//     item.addEventListener('mouseenter', function () {
//       item.nextElementSibling.classList.add('_active');
//       item.classList.add('_active');
//     });
//     item.addEventListener('mouseleave', function () {
//       item.nextElementSibling.addEventListener('mouseenter', function () {
//         item.nextElementSibling.classList.add('_active');
//         item.classList.add('_active');
//       });
//       item.nextElementSibling.addEventListener('mouseleave', function () {
//         item.nextElementSibling.classList.remove('_active');
//         item.classList.remove('_active');
//       });
//       item.nextElementSibling.classList.remove('_active');
//       item.classList.remove('_active');
//     });
//   });
// };

  // // subMenu();
  // subMenuHover();
  
  export default miniCart;