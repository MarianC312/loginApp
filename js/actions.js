function logIn()
{ 
    let form = $("#loginForm");
    let divProcess = form.attr("process");
    let divForm = form.attr("form");
    $.ajax({
        type: "POST",
        url: form.attr("action"),
        timeout: 45000,
        beforeSend: function()
        {
            divSwitchView(divForm);
            divSwitchView(divProcess);
        },
        data: form.serialize(),
        success: function(data)
        {
            $(divProcess).html(data);
        }
    }).fail(function(jqXHR) {
        console.log(jqXHR.statusText);
    });
}

function divSwitchView(div)
{
    if($(div).is(":visible"))
    {
        $(div).hide(150);
    }else{
        $(div).show(150);
    }
}