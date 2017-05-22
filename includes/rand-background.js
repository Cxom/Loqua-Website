var imageURLs = [
    "http://imgur.com/krzoVWV.png",
    "http://imgur.com/ekJjmZc.png",
    "http://imgur.com/oZ4VHdO.png",
    "http://imgur.com/glqGs1Z.png",
    "http://imgur.com/syDMoVR.png",
    "http://imgur.com/PTPvQvc.png",
    "http://imgur.com/dxFNEkH.png",
    "http://imgur.com/TZsUFeB.png"
];
function getRandImage(){
    return "images/backgrounds/" + Math.floor(Math.random() * 20 + 1) + ".png";
}
function getImageTag() {
  var img = '<img src=\"';
  var randomIndex = Math.floor(Math.random() * imageURLs.length);
  img += getRandImage();
  img += '\" alt=\"Loqua!\"/>';
  return img;
}

window.onload = function(){
    document.body.style.backgroundImage = "url(" + getRandImage() + ")";
}
