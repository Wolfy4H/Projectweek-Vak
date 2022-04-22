var i = 0;
var images = [];
var time = 4000; //4seconde//

images[0] = "logoPizza.webp";
images[1] = "Pizza.jpg";
images[2] = "PizzaChicken.webp";
images[3] = "PizzaSalami.jpeg";
images[4] = "PizzaVegan.jpeg";

function changeImg() {
  document.hasChildNodes.scr = images[i];

  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);
}
