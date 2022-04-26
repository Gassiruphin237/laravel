<style>
    /* ul.navbar-nav li:hover{
  background: white;
  } */
    .bg-dark {
        background: linear-gradient(#4E944F, #4E944F) !important;
    }


     .nav-link.active {
        border-bottom: 2px solid rgb(255, 255, 255);
        border-top: 1px solid white ;
        border-left: 1px solid white;
        border-right: 1px solid white;
        background-color: white;
        color: #4E944F !important;
    }

    .nav-item,
    .navbar-brand,
    .navbar-nav {
        font-size: 14px !important;
        padding-left: 40px !important;
        /* justify-content: center;
        text-align: center; */
    }

    body {
        background-color: white;
        color: black;
        font-size: 25px;
    }

    .dark-mode {
        background-color: rgb(15, 6, 41);
        color: white;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light  bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/img/Logo.JPG" class=" circle" id="logo" width="65" height="55" alt="logo" />&nbsp;&nbsp;<span
                class="span"> Pizzaria</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link active text-dark" id="a" href="home"><i class="fas fa-home " aria-hidden="true"></i>
                        Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="a" href="panier"><i class="fas fa-shopping-cart " aria-hidden="true">
                            <sup>
                                <?php
                                   
                                    ?>
                            </sup></i> Mon panier
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="a" href="#"><i class="fas fa-bell " aria-hidden="true"></i>
                        Notification</a>
                </li>
                <li class="nav-item">
                    <a type="button" href="#" id="a" class="nav-link text-dark" data-toggle="modal"
                        data-target=".bd-example-modal-lg"><i class="fas fa-user" aria-hidden="true"></i>Mon profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " id="a" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-cog" aria-hidden="true"></i>
                        Paramètre
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="dropdown-item">
                            <form action="" Method="POST">
                                <button class="btn btn-warning" id="btn" type="submit"
                                    name="deconnexion">Déconnexion</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" id="mode" onclick="myFunction();" class=""><img
                                    src="/img/moon.png" id="eye" style="width: 20px; height: 20px; cursor: pointer;"
                                    title="darkmode"> Thème</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    const currentlocation = location.href;
    const menu = document.querySelectorAll('ad');
    const menulenghth = menu.length
    for (let i = 0; i < menulenghth; i++) {
        if (menu[i].href === currentlocation) {
            menu[i].className = "active !important"
           
        }
        console.log(menu[i].className);
    }
</script>
<br><br><br>