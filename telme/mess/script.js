document.querySelector("#send_msg").addEventListener("click",()=>
{
    let text = document.querySelector("#massage_input").value;;
    if(text != "")
    {
        document.querySelector("#conv_main").innerHTML += `<div class='msg_div_user'>
                <p class='msg'>`+ text + `</p>
            </div>`;
        document.querySelector("#massage_input").value = "";
        setTimeout(() => {
            document.querySelector("#conv_main").innerHTML += `<div class='msg_div'>
                    <p class='msg'>nie</p>
                </div>`;
        }, 3000);
    }
})