<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController{
    #[Route("/pokemon")]

    public function getPokemon () {
        $pokemon = ["nombre" => "Pikachu", 
        "descripcion"=>"amarillo, mofletes rojos",
        "img" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
        "codigo" =>"025"
        ];
        return $this->render("pokemons/getPokemon.html.twig", ["pokemonVar" => $pokemon]);
    }
}


?>