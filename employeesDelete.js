var name;
var role;
var searchWrapper;


$(function(){
  $(document).on('click','.open-popup',function(e){
    e.preventDefault();
    $('.popup-bg').fadeIn(600);
    $('php').addClass('no-scroll');
    $('php').removeClass('disable');
  });
  $('.close-popup').click(function(){
    $('.popup-bg').fadeOut(600);
    $('php').removeClass('no-scroll');
  });
});


$(function(){
  $(document).on('click','.employee',function(e){
    e.preventDefault();
    searchWrapper = e.currentTarget;
    name = searchWrapper.querySelector('h2').textContent;
    role = searchWrapper.querySelector('p').textContent;
  });
});

$(function(){
    $(document).on("click",".up",function(){
        $.ajax({
            cache: false,
            url: '/employees/employeesUp.php',
            type: 'POST',
            data: {
              name: name,
              role: role
            }
          });
        location.reload();
    })
    $(document).on("click",".deup",function(){
        $.ajax({
            cache: false,
            url: '/employees/employeesDeUp.php',
            type: 'POST',
            data: {
              name: name,
              role: role
            }
          });
        location.reload();
    })
})
