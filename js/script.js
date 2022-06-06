function imagefun() {
        var Image_Id = document.getElementById('imgClickAndChange');
        if (Image_Id.src.match("img/photoID.jpg")) {
            Image_Id.src = "img/noir.jpg";
        }
        else {
            Image_Id.src = "img/photoID.jpg";
        }
    }   
