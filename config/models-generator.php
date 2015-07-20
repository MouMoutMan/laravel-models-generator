<?php

return [
    /*
	|--------------------------------------------------------------------------
	| Tables à ignorer.
	|--------------------------------------------------------------------------
	|
	| Liste des tables pour lesquelles on ne souhaite pas générer de modèle.
	|
	*/
    'ignored_tables' => [
        'migrations',
    ],

    /*
	|--------------------------------------------------------------------------
	| Tables pivot.
	|--------------------------------------------------------------------------
	|
	| Liste des tables pivot. En effet, le générateur peut détecter les relations
    | belongsTo, hasMany, morphMany et morphTo grâce aux clés étrangères, mais
    | est incapable de deviner quand un pivot entre en jeu (belongsToMany).
    |
    | Il faut donc lui préciser ici quelles sont les tables pivot. Le générateur
    | utilisera alors les clés des relations belongsTo de la table pivot pour
    | retrouver les tables à lier.
	|
	*/
    'pivot_tables' => [
        //
    ],

    /*
	|--------------------------------------------------------------------------
	| Noms forcés pour les classes des modèles.
	|--------------------------------------------------------------------------
	|
	| Les noms des modèles sont automatiquement déterminés à partir des noms des
    | tables (nom modèle = nom table au singulier et studly case). Il arrive
    | cependant que le nom soit mal déterminé si celui-ci n'est pas anglais.
    | Par exemple, le mot "sorties" singularisé devient "sorty" et non "sortie".
    | Il est donc possible de forcer des nommages ici.
    |
    | Exemple : ['sorties' => 'Sortie']
	|
	*/
    'forced_names' => [
        //
    ],

    /*
	|--------------------------------------------------------------------------
	| Chemins vers le répertoire des templates.
	|--------------------------------------------------------------------------
	|
	| La génération s'effectue à partir de templates. Le générateur a des templates
    | de définis par défaut, mais il est possible de lui demander d'utiliser des
    | templates personnalisés à la place en les plaçant dans ce répertoire.
	|
	*/
    'templates_dir' => base_path().'/templates',

    /*
	|--------------------------------------------------------------------------
	| Modèles
	|--------------------------------------------------------------------------
	|
	| Configuration pour la génération des modèles :
    |   - dir      : Chemin du répertoire où générer les modèles.
    |   - ns       : Namespace des modèles.
    |   - generate : Mettre à FALSE pour ne pas générer les modèles.
	|
	*/
    'models' => [
        'dir'      => app_path('Models'),
        'ns'       => 'App\Models',
        'generate' => true,
    ],

    /*
	|--------------------------------------------------------------------------
	| Repositories
	|--------------------------------------------------------------------------
	|
	| Configuration pour la génération des implémentation Eloquent des repositories :
    |   - dir      : Chemin du répertoire où générer les repositories.
    |   - ns       : Namespace des repositories.
    |   - generate : Mettre à FALSE pour ne pas générer les repositories.
	|
	*/
    'repositories' => [
        'dir'      => app_path('Repositories'),
        'ns'       => 'App\Repositories',
        'generate' => true,
    ],

    /*
	|--------------------------------------------------------------------------
	| Contrats
	|--------------------------------------------------------------------------
	|
	| Configuration pour la génération des interfaces des repositories :
    |   - dir      : Chemin du répertoire où générer les interfaces.
    |   - ns       : Namespace des interfaces.
    |   - generate : Mettre à FALSE pour ne pas générer les interfaces.
	|
	*/
    'contracts' => [
        'dir'      => app_path('Contracts/Repositories'),
        'ns'       => 'App\Contracts\Repositories',
        'generate' => true,
    ],

    /*
	|--------------------------------------------------------------------------
	| Façades
	|--------------------------------------------------------------------------
	|
	| Configuration pour la génération des façades des repositories :
    |   - dir      : Chemin du répertoire où générer les façades.
    |   - ns       : Namespace des façades.
    |   - generate : Mettre à FALSE pour ne pas générer les façades.
	|
	*/
    'facades' => [
        'dir'      => app_path('Facades/Repositories'),
        'ns'       => 'App\Facades\Repositories',
        'generate' => true,
    ]
];
