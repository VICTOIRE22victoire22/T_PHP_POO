<?php

class Router
{

    // Propriétés
    private string $request;

    // Constructeur
    public function __construct()
    {
        $this->request = $_SERVER["REQUEST_METHOD"]; // Récupère la méthode HTTP
    }

    public function handleRequest()
    {
        switch ($this->request) { // On vérifie la méthode HTTP
            case 'GET': // En cas de requête GET
                return $this->getRequest();
                break;
            case 'POST': // En cas de requête POST
                return "Requête POST effectuée";
                break;
            default: // Pour tout autre cas en dehors de GET et POST
                return "Requête non autorisée";
                break;
        }
    }

    public function getRequest()
    {
        $uri = 'Views/pages' . $_SERVER["REQUEST_URI"]; // ça donne par exmp : "Views/pages/accueil"

        if($_SERVER["REQUEST_URI"] == '/') { // On vérifie si l'URI est "/"
            return $uri . 'accueil.html.php'; // Si oui, on renvoie la page d'accueil
        } else { // Sinon, on vérifie si le template existe
            return $this->getPage($_SERVER["REQUEST_URI"]);
        }
    }

    public function getPage($uri)
    {
        $path = 'Views/pages' . $uri . '.html.php'; // On crée le chemin du template

        if (file_exists($path)) { // Si le template existe
            return $path; // Inclut la page correspondante
        } else {
            http_response_code(404); // Retourne une erreur 404
            return 'Views/pages/404.html.php'; // Inclut la page 404 si le template n'existe pas
        }
    }
}
// Ne rien écrire après cette accolade