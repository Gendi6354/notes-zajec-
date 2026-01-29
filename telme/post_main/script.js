const post_butt = document.querySelector("#new_post").addEventListener("click",()=>
{
    document.querySelector("#Wstaw").style.display = "block";
    document.querySelector("main").style = "filter: blur(10px);pointer-events: none;user-select: none;";
}
)
const close_butt = document.querySelector("#close_win").addEventListener("click",()=>
{
    document.querySelector("#Wstaw").style.display = "none";
    document.querySelector("main").style = "filter: none);pointer-events: auto;user-select: auto;";
}
)