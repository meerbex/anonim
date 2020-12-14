

// Slider starts here
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
if (carousel){
  var slides = document.getElementsByClassName('carousel-cell');
  var flkty = new Flickity(carousel, options);

  flkty.on('scroll', function () {
    flkty.slides.forEach(function (slide, i) {
      var image = slides[i];
      var x = (slide.target + flkty.x) * -1/3;
      image.style.backgroundPosition = x + 'px';
    });
  });
}

// Slider ends here


// Ajax like post function starts here
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
// Ajax like function ends here

// Ajax likeComment function starts here
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


// This function checks if the user filled the fields in email Form correctly
function validatePostForm() {  
  document.getElementById('errorTitle').innerHTML = "";
  document.getElementById('errText').innerHTML = "";
  var text = document.getElementById('post_title').value;
  var error = 0;
  if (text.length <= 5) {
    document.getElementById('errorTitle').innerHTML = "<span style='color: red'>Your text should have at least 5 characters</span>";
    error++;
  }

  var text = document.getElementById('post_text').value;
  if (text.length <= 10) {
    document.getElementById('errText').innerHTML = "<span style='color: red'>Your text should have at least 10 characters</span>";
    error++;
  }

  if (error){
    return false;
  }else {
    return true
  }


  
}  


// This function checks if the user filled the fields in post Form correctly

function validateEmailForm() {  
  document.getElementById('errEmail').innerHTML = "";
  document.getElementById('errText').innerHTML = "";
  var emailValue = document.getElementById('receiver_email').value;
  var atpos=emailValue.indexOf("@");
  var dotpos=emailValue.lastIndexOf(".");
  error = 0;

  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailValue.length){
    document.getElementById('errEmail').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";
    error++;
  }
  
  var text = document.getElementById('text_for_receiver').value;
  if (text.length <= 10) {
    document.getElementById('errText').innerHTML = "<span style='color: red'>Your text should have at least 10 characters</span>";
    error++;
  }

  if (error){
    return false;
  }else {
    return true
  }


  
}  