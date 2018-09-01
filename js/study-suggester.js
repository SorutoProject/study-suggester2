function welcomeMessage(){
    var modal = $("#modal");
    modal.innerHTML = "Study Suggester";
    modal.dialog({
        modal:true,
        title:"Modal",
        appendTo:"#main",
        /*buttons:{
            "OK":function(){
            $(this).dialog("close");
            }*/
        }
    });
}