let Title = "Espace Etudiant";
console.log(Title);

let Body = document.getElementsByTagName('body')[0];
let Cards = document.querySelectorAll('.card');
let Boxs = document.querySelectorAll('.box');
let DarkMode_Button_Text = document.querySelector('#bt_Dark');

// Dark Mode 
let Dark_Mode = false;
function DarkMode(){
    if(Dark_Mode==false){ // Dark Mode Configuration
        Body.style.backgroundColor="black";

        for(let i=0;i<Cards.length;i++){
            Cards[i].style.backgroundColor="#444342";
            Cards[i].style.color="white";
        }

        for(let i=0;i<Boxs.length;i++){
            Boxs[i].style.backgroundColor = "Black";
        }

        DarkMode_Button_Text.innerText = "White Mode";

        Dark_Mode = true;
    }else if(Dark_Mode==true){ // White Mode Configuration
        Body.style.backgroundColor="white";
        
        for(let i=0;i<Cards.length;i++){
            Cards[i].style.backgroundColor="#d6d0c8";
            Cards[i].style.color="black";
        }

        for(let i=0;i<Boxs.length;i++){
            Boxs[i].style.backgroundColor = "white";
        }

        DarkMode_Button_Text.innerText = "Dark Mode";

        Dark_Mode = false;
    }
}