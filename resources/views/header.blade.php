<header class="px-12 py-1.5 bg-white flex items-center justify-between w-full ">
    <div class="logoSante">
        <a href=""  class="flex items-center">
            <img src="{{asset("images/logo_sante.png")}}" class="w-16 mr-0.5" alt="logo santé">
            <h2 class="font-copp text-2xl font-bold text-green-700 italic">SAMA RV</h2>
        </a>
    </div>
    <nav>
        <ul class="flex">
            <li>
                <a href="{{ route("accueil") }}"  class="inline-block p-2 mr-3 border-b-[3px] border-b-white
                hover:text-gray-500
                hover:border-b-{3px}
                hover:border-green-500 transition duration-{.1s} hover:ease-in">
                    Accueil
                </a>
            </li>
            <li>
                <a href="{{ route("patient/dashboard") }}"  class="inline-block p-2 mr-3 border-b-[3px] border-b-white
                hover:text-gray-500
                hover:border-b-{3px}
                hover:border-green-500 transition duration-{.1s} hover:ease-in">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route("hopital") }}"  class="inline-block p-2 mr-3 border-b-[3px] border-b-white
                hover:text-gray-500
                hover:border-b-{3px}
                hover:border-green-500 transition duration-{.08s} hover:ease-in">
                    Hôpitaux
                </a>
            </li>
            <li>
                <a href=""  class="inline-block p-2 mr-3 border-b-[3px] border-b-white hover:text-gray-500
                hover:border-b-{3px}
                hover:border-green-500 transition duration-{.1s} hover:ease-in">
                    Pharmacies
                </a>
            </li>
            <li>
                <a href=""  class="inline-block p-2 mr-3  border-b-[3px] border-b-white hover:text-gray-500
                hover:border-b-{3px}
                hover:border-green-500 transition duration-{.1s} hover:ease-in">
                    A propos</a>
            </li>

        </ul>
    </nav>

    <div>
        <a href="{{route("login")}}" class="inline-block px-6 py-1.5 rounded-lg hover:bg-green-50
         transition duration-800 hover:ease">
            Connexion
        </a>
        <a href="{{route("register")}}" class="inline-block px-6 py-1.5 border border-green-200 text-green-800
        rounded-lg hover:bg-green-200
        hover:text-gray-600 transition duration-800 hover:ease">
            Inscription
        </a>
        <!--            <a href="">mamadou</a>-->
        <!--            <a href="">déconnexion</a>-->
    </div>
</header>
