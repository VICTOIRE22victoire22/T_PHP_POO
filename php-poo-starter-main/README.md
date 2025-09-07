# Premiers pas avec la POO

Projet : https://drawsql.app/teams/agiliteach/diagrams/notebook

La programmation orientée objet est basé sur un sytème qu'on appelle : les `classes`.

Ces classes sont comme un moule (de cuisine) pour définir ce que représente quelque chose dans une application. Ce qui signifie que chaque application aura sa propre vision d'une classe qui porterai le même nom que celles que nous avons.

## Les classes

Un classe en PHP, est déclarée avec le mot-clé `class` ou `final class`.
Afin de l'utiliser, il faudra créer un instace d'elle. Pour cela le mot-clé correspondant est `new`.

Exemple -> voir le fichier `Utilisateur.php` pour la déclaration et `index.php` pour l'utilisation.

## Accesseurs et Mutateurs

Lorsque nous définissons des propriétés dans une classe, il est judicieux de mettre en place une structure sécurisée pour intéragir avec. C'est là qu'entre en jeu les `Accesseurs` et `Mutateurs` nommés en anglais `Getters` et `Setters`. Ce sont des fonctions mais dans un classe on les appelle des `méthodes`.

Exemple -> voir le fichier `Utilisateur.php` et `index.php` pour l'utilisation.

## Classe parent et enfant

Pour ne pas se répéter dans l'organisation des classes, on dispose d'un outil qui facilite le partage des propriétés et des méthodes : `l'héritage`.

Afin de mettre en place un héritage, il faut conceptualisé la structure de nos classes. Exemple pour un e-commerce :

Un site e-commerce est application qui contient des produits. Cependant, les produits disposent de caractéristiques propres à elles, comme la taille pour un vêtement, le réseau pour un smartphone ou encore l'édition pour un livre.

En revanche, certaines propriétés sont communes à tous les produits, comme le nom, le prix, la description, la catégorie. De ce fait, on peut les rassembler dans une classe parente qui ne sera jamais instanciée directement avec le terme `new`.

Compte tenu du fait que cette classe parente ne sera jamais instanciée, on peut la déclarer comme abstraite avec le mot-clé `abstract`.

```php
abstract class Produit
{
    private string $nom;
    private string $ref;
    private string $prix;
    private string $categorie;
    private string $description;
}
```

Maintenant que la classe parent est en place, il faut la lier avec les classes définies comme enfants. Pour cela, on utilise le mot-clé `extends` qui permet de déclarer une classe enfant.

```php
require_once 'Produit.php';

class Livre extends Produit
{
    private int $nbPage;
    private string $auteur;
    private string $edition;
    private string $isbn;
}
```

Cela aura pour résultat, la mise à disposition de l'ensemble des propriétés et des méthodes de la classe parente dans les classes enfants. On pourra alors faire ce genre de choses :

```php
//...

$bouquin = new Livre();
$bouquin
    ->setNom('Le Petit Prince')
    ->setPrix(8)
    //...
;
```

## Le projet d'initiation

Afin de prendre en main la POO, on créer une application simple de prise de notes : NoteBook.

### Scénarios (User Stories)

| Rôle (En tant que) | Action (Je veux)   | Résultat (Afin de) |
| ---                | ---                | ---                |
| Utilisateur        | Créer une note     | La conserver       |
| Utilisateur        | Modifier une note  | La mettre à jour   |
| Utilisateur        | Accéder à une note | La consulter       |
| Utilisateur        | Supprimer une note | La détruire        |

Grâce à cela, il est plus simple pour nous de comprendre les objectifs de notre application. Ce facilitera sa conception dans une approche plus réaliste.

## Rappel sur l'intérêt du backend

Dans le domaine du web, le backend est utilisé pour la conception complexe.
Il s'agit de mettre en place des fonctionnalités afin de rendre l'expérience la plus complète possible.

Dans notre exemple, l'application de prise de notes, doit nous permettre de créer, afficher, modifier et supprimer des notes. Cet ensemble d'action s'appelle le `CRUD` (Create, Read, Update, Delete).

L'intervention d'un langage de programmation est alors indispensable. Il peut aussi y avoir une base de données qui entre en compte. Les bases de données sont appelées `SGBD` (Système de Gestion de Base de Données).

Le point de départ pour un backend sera **principalement** une requête `HTTP` (GET, POST, PUT, DELETE, etc.). Lorsque le serveur **reçoit** une requête, un script PHP est exécuté afin d'y **répondre**.

Exemple : 

`Martin` demande la page `/contact` à l'adresse `http://localhost:8000/contact`.
Le serveur, s'il dispose de cette page, retourne le contenu correspondant.

`/contact` est ce qu'on nomme une `route` dans le contexte de l'application. Pour le commun des internautes, c'est une URL ou URI. Rien ne se passe si le serveur n'est pas sollicité, il faut l'interpeller pour obtenir un résultat.

### Le cas exceptionnel

Afin d'exécuter un script PHP sans requête HTTP, nous pouvons utiliser une tache `cron` qui lancer une commande à notre place de manière automatique et périodique.
