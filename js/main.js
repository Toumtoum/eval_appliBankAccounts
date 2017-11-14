// Materialize => menu collapsing on mobile and tablet

$( document ).ready(function(){
  $(".button-collapse").sideNav();
  $('select').material_select();
  setNavigation();
});

// function used to unable header menu to be dynamic in MVC environement

function setNavigation(){
  var path = window.location.pathname;
  path = path.replace(/\/$/,"");
  path = decodeURIComponent(path);


  $(".tabs a").each(function(){
    var href = $(this).attr('href');
    if(path.substring(49,href.lenght) === href){
      $(this).closest('a').addClass('active');
    }
  });
}
