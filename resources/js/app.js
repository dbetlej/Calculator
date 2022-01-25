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
        if(res.status == 1 || res.status == 2){
        // return false
        $('#info_popup').html(res.msg).fadeIn();
        setTimeout(function(){
           $('#info_popup').fadeOut();
        },5000);
       } else {
        // return pass
        $('#info_popup').html(res.msg).fadeIn();
        setTimeout(function(){
           $('#info_popup').fadeOut();
        },5000);
       }
   });
});

$('#open_modal').click(function(){
    $('#add_movies').fadeToggle();
});

$('#edit_modal').click(function(){
    $('#edit_movie').fadeToggle();
});

$('.close').click(function(){
    $('#add_movies').fadeOut();
})


//  Vanilla s
document.addEventListener('click', function(event){
    if(!event.target.matches('.edit_button')) return;
    event.preventDefault();
    
    var favourite = 0;
    var watched = 0;
    if(document.getElementById('favourite').checked){
        favourite = 1;
    }
    if(document.getElementById('watched').checked){
        watched = 1;
    }
    var fd = new FormData();
    fd.append('title', document.getElementById('title').value);
    fd.append('url', document.getElementById('url').value);
    fd.append('favourite', favourite);
    fd.append('watched', watched);
    fd.append('_token', $('meta[name="csrf-token"]').attr('content'));
    var movieId = document.getElementById('movieId').value;
    var req = new XMLHttpRequest();
    req.open('POST', '/movie/'+movieId, true);
    req.send(fd);
    req.onload = function(){
        console.log(req.response);
    }
}, false);
//  Vanilla e