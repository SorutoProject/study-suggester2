function welcomeMessage(){
    var modal = $("#modal");
    modal.dialog({
        modal:true,
        title:"Welcome",
        appendTo:"#main"
        /*buttons:{
            "OK":function(){
            $(this).dialog("close");
            }
        }*/
    });
}