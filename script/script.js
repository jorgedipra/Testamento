$(document).ready(function() {
$("#BtnIngres").click(function () {
      $("#logeo").show();   
});
$("#logeoCerar").click(function () {
      $("#logeo").hide();
});
$("#preguntaCerar").click(function () {
      $("#pregunta").hide();
});
$('li').click(function () {
      $("#pregunta").hide();
});
});
$(document).keyup(function(event){
        if(event.which==27)
        {
            $("#logeo").hide();
        }
 });