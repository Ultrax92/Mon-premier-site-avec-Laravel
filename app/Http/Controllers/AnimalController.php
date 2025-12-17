<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    // 1. AFFICHER UN ANIMAL (Page de détail)
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('pages.show', ['animal' => $animal]);
    }

    // 2. CRÉER (Ajout spécifique de Coquillette)
    public function create()
    {
        $choix = [
            [
                'name' => 'Bella',
                'species' => 'Chien',
                'age' => 5,
                'description' => 'Une labrador joueuse et affectueuse qui adore la compagnie.',
                'photo' => 'images/animaux/bella.png'
            ],
            [
                'name' => 'Luna',
                'species' => 'Chat',
                'age' => 3,
                'description' => 'Une chatte calme et câline qui aime les endroits tranquilles.',
                'photo' => 'images/animaux/luna.png'
            ],
            [
                'name' => 'Max',
                'species' => 'Chien',
                'age' => 2,
                'description' => 'Un jeune chiot plein d’énergie qui adore courir et jouer dehors.',
                'photo' => 'images/animaux/max.png'
            ],
            [
                'name' => 'Coquillette',
                'species' => 'Chien',
                'age' => 3,
                'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer.',
                'photo' => 'images/animaux/coquillette.png'
            ]
        ];

        $animalAleatoire = $choix[array_rand($choix)];
        Animal::create($animalAleatoire);
        return redirect()->route('home');
    }

    // 3. MODIFIER (Ajouter "modifié" au nom)
    public function update($id)
    {
        $animal = Animal::find($id);

        if ($animal) {
            $animal->name = $animal->name . ' modifié';
            $animal->save();
        }

        return redirect()->route('home');
    }

    // 4. SUPPRIMER
    public function delete($id)
    {
        $animal = Animal::find($id);

        if ($animal) {
            $animal->delete();
        }

        return redirect()->route('home');
    }
}