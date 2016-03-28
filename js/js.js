function $(id){return document.getElementById(id);};
window.onload = function(){
 $("nav").onclick = function(e){
  var src = e?e.target:event.srcElement;
  if(src.tagName === "H2"){
  var next = src.nextElementSibling || src.nextSibling;
   next.style.display = (next.style.display ==="block")?"none":"block";
  }
 };
};
function openOrClose(id_name_str) {
    var id_name = '#' + id_name_str;
    if($(id_name).css('display') == 'block') {
        $(id_name).slideUp("slow");
    } else {
        $(id_name).slideDown("slow");
    }
}
function getVal() {
//$("#getResult").html(10);
//$.get('01.php?id=123',function(data){
//    $("#getResult").html(data);
//});
    $.post('01.php?id=456', {
        name: 'cjt'
    }, function (data) {
        $("#getResult").html(data);
    });
}

function getNext(parent_id) {
    $.get("add1.php?pid=" + parent_id,function(data){
        $("#abc").css('display','block');
        $("#ccc").html(data);
    });
}