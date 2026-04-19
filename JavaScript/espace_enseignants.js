let Title = "Espace Enseignants";
if (localStorage.getItem("task") === null) {
    localStorage.setItem("task", JSON.stringify([]));
}
// a fix le nombre de tasks
let Tache_conteur = document.getElementById("Tache_conteur")
function loaddata(){
const TaskUser = JSON.parse(localStorage.getItem("task") || "[]");
const Nouveaux_Task = document.createElement('div');
const cards = document.getElementById("cards")
console.log(Title);
Nouveaux_Task.innerHTML = `
   ${
    TaskUser.map((value)=>(
        `
          <div class="task">
            <input type="checkbox">
            <div>
                <b>${value}</b> 
                <p>${new Date().toLocaleDateString()}</p>
                <button id="SuppTaskButton" onclick="SuppTask(this)">Supp Task Test</button>
            </div>
        </div>`
    ))
   }
`
cards.innerHTML = ""
cards.appendChild(Nouveaux_Task)
}
window.onload = function(){
    loaddata()
}
/**************/
/*chatGpt code*/ 
/**************/

const currentPage = window.location.pathname;
const channel = new BroadcastChannel('annonces_channel');

// Recevoir les annonces
channel.onmessage = (event) => {
    if(event.data.type === 'NEW_ANNOUNCE') {
        ajouterAnnonceRecue(event.data.annonce);
    }
    /*if(event.data.type === 'DELETE_ANNOUNCE') {
        supprimerDerniereAnnonceRecue();
    }*/
};

/********************/
/* Fin ChatGpt Code */
/********************/

//code oussama

const Saved_Task = localStorage.getItem("Task"); // Task Saved dans local Storage

let Body = document.getElementsByTagName('body')[0];
let Cards = document.querySelectorAll('.card');
let DarkMode_Button_Text = document.querySelector('#bt_Dark');

if(currentPage.includes('espace_enseignants')){
// Dark Mode 
let Dark_Mode = false;
function DarkMode(){
    if(Dark_Mode==false){ // Dark Mode Configuration
        Body.style.backgroundColor="black";

        for(let i=0;i<Cards.length;i++){
            Cards[i].style.backgroundColor="#444342";
            Cards[i].style.color="white";
        }

        DarkMode_Button_Text.innerText = "White Mode";

        Dark_Mode = true;
    }else if(Dark_Mode==true){ // White Mode Configuration
        Body.style.backgroundColor="white";
        
        for(let i=0;i<Cards.length;i++){
            Cards[i].style.backgroundColor="#d6d0c8";
            Cards[i].style.color="black";
        }

        DarkMode_Button_Text.innerText = "Dark Mode";

        Dark_Mode = false;
    }
}
}
// To do list
function ToDoList(){
    const TaskUser = JSON.parse(localStorage.getItem("task") || "[]");
    const Nouveaux_Task = document.createElement('div');
    const cards = document.getElementById("cards")
    let Nombre_des_Taches =TaskUser.length ;
    let Task_Entred = document.querySelector('#Task');
    let TaskCards = document.getElementById('ToDoList');
    let Nombre_des_Taches_h3 = document.getElementById('Tache_conteur');
    if(Task_Entred==""){
        alert("Veuillez entrer une tâche");
        return;
    }
   TaskUser.push(Task_Entred.value);

   localStorage.setItem("task", JSON.stringify(TaskUser));
    loaddata()

    // Compteur des taches
    
    Nombre_des_Taches++;
    Nombre_des_Taches_h3.innerText = Nombre_des_Taches;
}

//Supp Un Task
function SuppTask(button){
    let taskDiv = button.parentNode.parentNode;
    taskDiv.remove();

    let Nombre_des_Taches_h3 = document.getElementById('Tache_conteur');
    Nombre_des_Taches--;
    Nombre_des_Taches_h3.innerText = Nombre_des_Taches;
}

// Entrer une annonce
let Nombre_des_Annonces = 2;
function annonce(){
    let Nombre_des_Annonces_h3 = document.getElementById('Annonces_conteur');
    let annonce_entred = document.getElementById('Annonces_Entred').value;
    let AnnoncesCards = document.getElementById('Annonces');
    let Annonces_Etudiantt = document.getElementById('Annonces_Etudiant');
    const Nouveaux_Annonce = document.createElement('div');
    const Nouveaux_Annonce_etudiant = document.createElement('div');
    if(annonce_entred==""){
        alert("Veuillez entrer une Annonce");
        return;
    }

    // Apartient a la page d'enseignat
    Nouveaux_Annonce.innerHTML = `
        <div class="annonce">
            <i class="fas fa-file"></i>
            <div>
                <b>${annonce_entred}</b>
                <p>${new Date().toLocaleDateString()}</p>
                <button id="SuppAnnonceButton" onclick="SuppAnnonce(this)">Supp Annonce Test</button>
            </div>
        </div>
    `;

    /* La Partie Qui ne marche pas */
    
    // Apartient a la page d'etudiant
    Nouveaux_Annonce_etudiant.innerHTML = `
        <div class="box">
            <h3>${annonce_entred}</h3>
            <p>${new Date().toLocaleDateString()}</p>
        </div>
    `; // Fin Partie qui ne marche pas
    
    const currentPage = window.location.pathname;
    if(currentPage.includes('espace_enseignants')) {
        AnnoncesCards.append(Nouveaux_Annonce);
    }
    if(currentPage.includes('espace_etudiant')){ // La Partie qui ne marche pas
        Annonces_Etudiantt.append(Nouveaux_Annonce_etudiant);
    }    // Fin Partie qui ne marche pas

/**************/
/*chatGpt code*/ 
/**************/

    // Envoyer à L'AUTRE page
    channel.postMessage({
        type: 'NEW_ANNOUNCE',
        annonce: annonce_entred
    }); 

/********************/
/* Fin ChatGpt Code */
/********************/

    Nombre_des_Annonces++;
    Nombre_des_Annonces_h3.innerText = Nombre_des_Annonces;

}

// Supp Une Annonce
function SuppAnnonce(button){
    let Nombre_des_Annonces_h3 = document.getElementById('Annonces_conteur');

    button.parentNode.parentNode.remove();

    Nombre_des_Annonces--;
    Nombre_des_Annonces_h3.innerText = Nombre_des_Annonces;
}

// Add Cours
let Nombre_des_Cours = 3;
function Cours(){
    let Nombre_des_Cours_h3 = document.getElementById('Cours_conteur');
    let Cours_Entred = document.getElementById('Cours').value;
    let List = document.getElementById('Cours_List');
    let Element_list = document.createElement('li');

    if(Cours_Entred===''){
        alert("Veuillez entrer un Cours");
        return;
    }

    Element_list.innerHTML=`
        <li>
            ${Cours_Entred}
            <button id="Supp_Cour" onclick="Supp_Cour(this)">Supp Cour Test</button>
        </li>
    `;
    List.append(Element_list);
    Nombre_des_Cours++;
    Nombre_des_Cours_h3.innerText = Nombre_des_Cours;
}

// Supp Cour
function Supp_Cour(button){
    let Nombre_des_Cours_h3 = document.getElementById('Cours_conteur');

    button.parentNode.remove();

    Nombre_des_Cours--;
    Nombre_des_Cours_h3.innerText = Nombre_des_Cours;
}