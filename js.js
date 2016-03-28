//function getVal() {
////$("#getResult").html(10);
////$.get('01.php?id=123',function(data){
////    $("#getResult").html(data);
////});
//    $.post('01.php?id=456', {
//        name: 'cjt'
//    }, function (data) {
//        $("#getResult").html(data);
//    });
//}

function getNext(parent_id, self_id) {
    $.get("add1.php?pid=" + parent_id, '$sid=' + self_id, function (data) {
        $("#abc").css('display', 'block');
        $("#ccc").html(data);
    });
}
getNext(1,12);