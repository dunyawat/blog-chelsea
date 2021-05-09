function initMap() {
    var uluru = {lat: 13.551189, lng: 99.966799};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: uluru});
    var marker = new google.maps.Marker({position: uluru, map: map});
  }

  $(window).scroll(function(){
      var scrollTop = $(this).scrollTop();
      if(scrollTop>1){
          $('#navbar').css('padding','5px 25px')
      } else{
          $('#navbar').css('padding','25px')
      }
  })

$('.to-top').click(function(e){
    $('html, body').animate({scrollTop:'0px'},800)
})