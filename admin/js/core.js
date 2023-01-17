$(document).ready(function() {
	$( "#target" ).click(function() {
   var progress = $(".loading-progress").progressTimer({
  timeLimit: 600,
  onFinish: function () {
  //alert('completed!');
}
});
$.ajax({
   url:"/admin/total/parse_tot/"
  }).error(function(){
  progress.progressTimer('error', {
  errorText:'ERROR!',
  onFinish:function(){
    alert('There was an error processing your information!');
  }
});
}).done(function(){
  progress.progressTimer('complete');
});
});
	
//second
$( "#target2" ).click(function() {
   var progress = $(".loading-progress2").progressTimer({
  timeLimit: 600,
  onFinish: function () {
  //alert('completed!');
}
});
$.ajax({
   url:"/admin/total/parse_zel/"
  }).error(function(){
  progress.progressTimer('error', {
  errorText:'ERROR!',
  onFinish:function(){
    alert('There was an error processing your information!');
  }
});
}).done(function(){
  progress.progressTimer('complete');
});
});
// third
$( "#target3" ).click(function() {
   var progress = $(".loading-progress3").progressTimer({
  timeLimit: 600,
  onFinish: function () {
  //alert('completed!');
}
});
$.ajax({
   url:"/admin/total/parse_mit/"
  }).error(function(){
  progress.progressTimer('error', {
  errorText:'ERROR!',
  onFinish:function(){
    alert('There was an error processing your information!');
  }
});
}).done(function(){
  progress.progressTimer('complete');
});
});

//some new stuff



});




