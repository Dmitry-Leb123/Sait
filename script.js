document.getElementById(gallery).onclick = function(event) {
    if(event.target.classList.containts(min-image)) {
    showBig(event.target.getAttribute('src')).event.target.getAttributeById('id');
    }
    }
    document.getElementById
    function showBig(src) {
    let image = document.createElement("img");
    image.setAttribute("src", src);
    let showBlock = document.getElementById("big-image-box");
    image.setAttribute = ("id", "big.image");
    image.setAttribute('picture_id');
    showBlock.innerHTML = " ";
    showBlock.append(image);
    document.getElementById('buttons').style.display="flex";
    }
    function next (){
    alert('right');
    let pictureId = Number(document.getElementById("big-image").getAttribute("picture_id"));
    if(pictureId == 8) {
    pictureId = 1;
    } else {
    pictureId++;
    }
    let picture = document.getElementById(pictureId);
    let pictureSrc = picture.getAttribute('src');
    }
    function prev () {
    alert('left');
    
    }