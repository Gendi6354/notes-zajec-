let but1 = document.querySelector("#but1")
let but2 = document.querySelector("#but2")
let but3 = document.querySelector("#but3")

let div1 = document.querySelector("#div1")
let div2 = document.querySelector("#div2")
let div3 = document.querySelector("#div3")


but1.addEventListener("click",
    function() 
    {
        div1.style.display = "block"
        div2.style.display = "none"
        div3.style.display = "none"
    }
)
but2.addEventListener("click",
    function() 
    {
        div1.style.display = "none"
        div2.style.display = "block"
        div3.style.display = "none"
    }
)
but3.addEventListener("click",
    function() 
    {
        div1.style.display = "none"
        div2.style.display = "none"
        div3.style.display = "block"
    }
)