require('./bootstrap');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#add_button').click(function(){
   $.ajax({
      method: 'post',
      url: '/add_movies',
      dataType: 'json',
      data: $('#add_movies').serialize()
   }).always(function(res){
       console.log(res.status);
   });
});

$('#open_modal').click(function(){
    $('#add_movies').fadeToggle();
});