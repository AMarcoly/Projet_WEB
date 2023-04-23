<?php

function getTemplate(String $project_name,Int $difficulte,String $project_description)
{
    $path = "assets/images/recette.jpeg";
    $alternative = "Projet realisé dans le cadre de mes etudes";
    $ref = "https://git.unistra.fr/marcoly.antoine/projet_sokoban";

    echo("<div>
          <header>
            <img src=" . $path . " alt=" . $alternative ." />
          </header>
          <section>
            <h2>".$project_name."</h2>
            <div>
                <span>".$difficulte."</span>
            </div>
            <p>".$project_description."</p>
          </section>
          <footer>
          <a href='.$ref.'></a>
          </footer>
         </div>
          ");
}


