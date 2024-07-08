var date;
var time;
var doctor;
var searchWrapper;

$(function(){
  $(document).on('click','.ticket',function(e){
    e.preventDefault();
    searchWrapper = e.currentTarget;
    date = searchWrapper.querySelector('h3').textContent;
    time = searchWrapper.querySelector('p').textContent;
    doctor = searchWrapper.querySelector('span').textContent;
    $.ajax({
      cache: false,
      url: '/ticketPA/deleteTicketPA.php',
      type: 'POST',
      data: {
        date: date,
        time: time,
        doctor: doctor
      }
    });
    location.reload()
  });
});