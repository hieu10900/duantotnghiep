
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  // captionText.innerHTML = dots[slideIndex-1].alt;
}

// $.ajaxSetup({
//   headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   }
// });
//
// $("#bookings").on('click', function(event) {
//   event.preventDefault();
//   console.log(123);
//   var data_booking = {
//       user_id: $('#user_id').val(),
//       room_id: $('#post_id').val(),
//       email: $('#exampleInputEmail1').val(),
//       name: $('#exampleName').val(),
//       phone: $('#examplePhone').val(),
//       check_in: $('#checkIn').val(),
//       check_out: $('#checkOut').val(),
//       discount: $('#exampleDiscount').val(),
//       services: $('#services').val(),
//       amount_of_people:$('#amount_of_people').val(),
//
//   };
//   console.log(data_booking);
//   $.ajax({
//       type: "post",
//       url: "http://127.0.0.1:8000/booking",
//       data: data_booking,
//       success: function(data) {
//           if (data.status == 200) {
//               swal({
//                   title: "Bạn đã đặt phòng thành Công",
//                   text: "Cộng tác viên của chúng tôi sẽ liên hệ lại với bạn",
//                   icon: "info",
//                   buttons: ["Đồng Ý"],
//                   dangerMode: true,
//               })
//                   .then((willDelete) => {
//                       if (willDelete) {
//                           window.location.reload();
//                       } else {
//                           window.location.reload();
//                       }
//                   });
//           }else if(data.status == 100){
//               swal("Định dạng ngày tháng sai", "Quý khách vui lòng nhập lại");
//           }
//
//       },
//       error: function(data) {
//           var errors = data.responseJSON;
//           if ($.isEmptyObject(errors) == false) {
//               $.each(errors.errors, function(key, value) {
//                   var ErrorID = "#" +key + 'Error';
//                   $(ErrorID).text(value);
//                   console.log(ErrorID);
//               })
//           }
//
//       },
//
//   });
// });
