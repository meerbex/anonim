

var options = {
  autoplay: true,
  autoplaySpeed: 2000,
  accessibility: true,
  prevNextButtons: true,
  pageDots: true,
  setGallerySize: false,
  arrowShape: {
    x0: 10,
    x1: 60,
    y1: 50,
    x2: 60,
    y2: 45,
    x3: 15
  }
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);

flkty.on('scroll', function () {
  flkty.slides.forEach(function (slide, i) {
    var image = slides[i];
    var x = (slide.target + flkty.x) * -1/3;
    image.style.backgroundPosition = x + 'px';
  });
});

async function like(id,like_type){

  if (like_type=="like"){
    document.getElementById("likeCountID_"+id).innerText = parseInt(document.getElementById("likeCountID_"+id).innerText) + 1
    document.getElementById("likeID_"+id).style.pointerEvents = "none";

  }else {
    document.getElementById("dislikeCountID_"+id).innerText = parseInt(document.getElementById("dislikeCountID_"+id).innerText) + 1
    document.getElementById("dislikeID_"+id).style.pointerEvents = "none";


  }
  let data = {
    post_id: id,
    like_type: like_type
  };
  
  let response = await fetch('/submitLike.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify(data)
  });
  
  let result = await response.json();
  
}

async function likeComment(id,comment_type){

  if (comment_type=="main"){
    document.getElementById("likeMainCommentID_"+id).innerText = parseInt(document.getElementById("likeMainCommentID_"+id).innerText) + 1
    document.getElementById("likeMainCommentID_"+id).style.pointerEvents = "none";

  }else {
    document.getElementById("likeSubCommentID_"+id).innerText = parseInt(document.getElementById("likeSubCommentID_"+id).innerText) + 1
    document.getElementById("likeSubCommentID_"+id).style.pointerEvents = "none";
  }
  let data = {
    comment_id: id,
    comment_type: comment_type
  };
  
  let response = await fetch('/submitCommentLike.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify(data)
  });
  
  let result = await response.json();
  
}