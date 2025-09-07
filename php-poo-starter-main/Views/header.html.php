<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="https://raw.githubusercontent.com/Jensone/notexpress-2025/6a667757ce31b44157dce1aac6333655e89006d0/assets/images/nx-icon.svg" alt="" class="" width="40" height="40">
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Accueil</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Mes notes</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Mon compte</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Connexion</a></li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control border-2 rounded-pill form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>
                <div class="text-end d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-outline-light border-2 rounded-pill me-2">Connexion</button>
                    <a href="#" class="d-flex bg-secondary justify-content-between align-items-center gap-2 text-decoration-none border-2 rounded-pill ps-2">
                        <span class="z-3 text-white">Inscription</span>
                        <img src="../assets/img/cos.png" width="38" class="rounded-circle border border-1">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3"> <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <h1 class="text-body-emphasis">Jumbotron with icon</h1>
            <p class="col-lg-8 mx-auto fs-5 text-muted">
                This is a custom jumbotron featuring an SVG image at the top, some longer text that wraps early thanks to a responsive <code>.col-*</code> class, and a customized call to action.
            </p>
            <div class="d-inline-flex gap-2 mb-5">
                <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                    Call to action
                    <svg class="bi ms-2" width="24" height="24" aria-hidden="true">
                        <use xlink:href="#arrow-right-short"></use>
                    </svg> 
                </button> 
                <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                    Secondary link
                </button> 
            </div>
        </div>
    </div>