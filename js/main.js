var i = 0;
var images = [];
var time = 4000; //4seconde//

images[0] = "./img/logoPizza.webp";
images[1] = "./img/Pizza.jpg";
images[2] = "./img/PizzaChicken.webp";
images[3] = "./img/PizzaSalami.jpeg";
images[4] = "./img/PizzaVegan.jpeg";

function changeImg() {
  document.hasChildNodes.scr = images[i];

  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);

  window.onload = changeImg;
}
