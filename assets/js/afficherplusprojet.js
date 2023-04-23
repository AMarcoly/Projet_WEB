const sec = document.querySelector('conteneur_projet')
const btn = document.querySelector('voir-plus')

async function nextprojets(){
    console.log("J'ai clique");
    try{
        console.log("J'ai clique")
        const response = await fetch('assets/php/recuperer_projet.php')
        const data = await response.text()
        console.log(data)
        sec.innerHTML+=data;
        console.log('apres fetch')
    }catch (error){
        console.log('Error fetching sur projet')
    }
}

if (btn != null) {
    btn.addEventListener('click', nextprojets);
}