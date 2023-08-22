let string = "";
let buttons = document.querySelectorAll('.button');
Array.from(buttons).forEach((button)=>{
    button.addEventListener('click', (e)=>{
        if(e.target.innerHTML == '='){
            string = eval(string);
            document.querySelector('.input1').value = string;
        }
        else if (e.target.innerHTML == 'C'){
            string = "";
            document.querySelector('.input1').value = string;
        }
        else{
            // alert("hello")
            console.log(e.target);
            console.log(e.target.innerHTML);
            string=string + e.target.innerHTML;
            document.querySelector('.input1').value=string;
        }
    })
})