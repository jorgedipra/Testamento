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
$("#BtnRegis").click(function () {
      $("#iFrame_SQL").show();
      $("#iFrameoCerar").show();
      $("#logeo").hide();

});
$('li').click(function () {
      $("#pregunta").hide();
});
$('#iFrameoCerar').click(function () {
     $("#iFrame_SQL").hide();
     $("#iFrameoCerar").hide();
});
});
$(document).keyup(function(event){
        if(event.which==27)
        {
            $("#logeo").hide();
            $("#iFrame_SQL").hide();
            $("#iFrameoCerar").hide();
        }
 });
function fun_iFrameWrite(par_ID_iFrame, par_URL){
            document.getElementById(par_ID_iFrame).src = par_URL;
        }
