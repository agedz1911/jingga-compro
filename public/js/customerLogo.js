var container = document.getElementById("photos");

var myPhoto = [
  "/images/customer/customer-16.png",
  "/images/customer/customer-17.png",
  "/images/customer/customer-18.png",
  "/images/customer/customer-19.png",
  "/images/customer/customer-20.png",
];

for (var i = 0, len = myPhoto.length; i < len; ++i) {
  var img = new Image();
  img.src = myPhoto[i];
  container.appendChild(img);
}