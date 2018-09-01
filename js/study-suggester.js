function welcomeMessage(){
    var modal = $("#modal");
    modal.dialog({
        modal:true,
        title:"Modal",
        appendTo:"#main"
        /*buttons:{
            "OK":function(){
            $(this).dialog("close");
            }
        }*/
    });
}