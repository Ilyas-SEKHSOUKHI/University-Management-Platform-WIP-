let Title = "S'inscrire";
console.log(Title);

let Body = document.getElementsByTagName('body')[0];
let DarkMode_Button_Text = document.querySelector('#Dark_Mode_click');

// Dark Mode
let Dark_Mode = false;
function DarkMode(){
    if(Dark_Mode==false){ // Dark Mode configuration
        Body.style.backgroundColor="black";
        DarkMode_Button_Text.innerText = "White Mode";
        Dark_Mode=true;
    }else if(Dark_Mode==true){ // White Mode configuration
        Body.style.backgroundColor="white";
        DarkMode_Button_Text.innerText = "Dark Mode";
        Dark_Mode=false;
    }
}