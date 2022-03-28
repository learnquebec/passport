<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RisqueSeederManual extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J'ai écouté 5 chansons d'artistes canadiens en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J'ai écouté des balados en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai écouté une chaine de radio en français pendant une heure.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai lu un texte à voix haute en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai lu une infolettre en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai lu un article de presse en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai lu un livre ou un magazine en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai suivi une recette en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai regardé mon sport préféré à la télévision en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai utilisé un dictionnaire ou une autre ressource afin de rechercher 10 nouveaux mots en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai regardé une vidéo en ligne en français avec sous-titres en anglais.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai regardé une vidéo en ligne en français avec sous-titres en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai regardé une vidéo en ligne en français sans sous-titres.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai regardé un film ou une émission en français avec des sous-titres en anglais.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai regardé un film ou une émission en français avec des sous-titres en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai regardé un film ou une émission en français sans sous-titres.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai téléchargé une application pour mon téléphone ou ma tablette en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai utilisé une application numérique en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de ma console de jeu vidéo en français pendant une journée.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de ma console de jeu vidéo en français pendant une semaine.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de ma console de jeu vidéo en français de façon permanente.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de mon cellulaire ou de ma tablette en français pendant une journée.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de mon cellulaire ou de ma tablette en français pendant une semaine.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de mon cellulaire ou de ma tablette en français de façon permanente.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de mon profil sur les réseaux sociaux en français pendant une journée.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de mon profil sur les réseaux sociaux pendant une semaine.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue de mon profil sur les réseaux sociaux de façon permanente.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue d'affichage de mon ordinateur en français pendant une journée.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue d'affichage de mon ordinateur en français pendant une semaine.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai changé la langue d'affichage de mon ordinateur en français de façon permanente.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai visité le site web accentquebec.com pour trouver un événement ou une activité en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"Je suis allé‧e voir un film au cinéma en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"Je suis allé‧e voir un spectacle en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai répondu à un sondage ou à un questionnaire en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai complété un formulaire en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J'ai lu la partie en français d'un texte bilingue.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai remercié quelqu’un en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"Je me suis excusé‧e en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai envoyé un texto en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai écrit une invitation à quelqu’un en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J'ai accepté ou refusé une invitation en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai chanté une chanson en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai laissé un message vocal en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai écrit une carte de souhait en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai raconté une blague à quelqu'un en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai raconté une anecdote à quelqu'un en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai envoyé un courriel en français à un‧e ami‧e",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai envoyé un courriel en français à un‧e enseignant‧e de l’école.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai publié quelque chose en français sur les réseaux sociaux.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai écrit un commentaire sur un blogue en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J'ai créé un balado en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai fait et publié une vidéo en ligne en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai participé à un concours en français (Concours d’art oratoire, Immersion clip, etc.)",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai écrit un CV ou une lettre de motivation en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>1,
            'titre' =>"J’ai posé ma candidature pour un emploi pour lequel j’aurai besoin de parler français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé à un proche en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé en français à la maison.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé en français à quelqu’un avec qui je parle normalement en anglais.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai demandé l’heure en français à quelqu’un.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai demandé mon chemin en français à quelqu’un.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé en français avec l’infirmier‧ère de l’école.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé en français à la direction de mon école.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé en français à un‧e enseignant‧e en dehors des heures de cours.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai communiqué avec un‧e employé‧e de l’école en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai remercié quelqu’un en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"Je me suis excusé‧e en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J'ai accepté ou refusé une invitation en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai encouragé quelqu’un à parler en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai collaboré avec quelqu'un de classe en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai aidé quelqu’un qui ne parle pas français en traduisant pour cette personne.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai répondu au téléphone en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai fait un appel téléphonique en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai appelé un numéro sans frais (1-800) et j’ai choisi d’être servi‧e en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai appelé quelqu’un en français par visioconférence.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai commandé à manger à la cafétéria en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai commandé à manger au restaurant en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai commandé au service à l’auto en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai demandé à être servi‧e en français dans un commerce.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai utilisé le français dans un magasin.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé à un‧e ami‧e du Passeport de prise de risques linguistiques en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"Je me suis rendu‧e à une soirée et j'y ai parlé français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai communiqué en français sur une plateforme de jeu en ligne.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai participé à une activité parascolaire en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J'ai participé à une session de tutorat en français à l'école ou avec LEARN.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai participé à une conversation de groupe en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J'ai rencontré quelqu'un de nouveau et je lui ai parlé en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J'ai expliqué un jeu à quelqu'un en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J'ai joué à un jeu de société en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai utilisé le français dans un lieu d’activité récréative (soccer, cours de piano, jeu laser, quilles, etc.).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai utilisé le français à un comptoir de prêt d’une bibliothèque.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai utilisé le français dans un transport en commun (autobus, métro, etc.).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai invité quelqu’un à faire une activité avec moi en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai utilisé le français lors d'un voyage.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai fait du bénévolat en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai fait une entrevue d’emploi en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai parlé en français quand j’ai vécu une émotion forte (tristesse, joie, etc.).",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        DB::table('risques')->insert([
            'categorie_id' =>2,
            'titre' =>"J’ai résolu un conflit en français.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        );
        
        
    }
}
