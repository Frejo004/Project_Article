<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Background Video</title>
</head>

<body class="m-0 relative text-white bg-gray-100 p-6">
    <nav class="bg-blue-500 p-4 fixed w-full top-0 left-0 shadow-md">
        <ul class="flex justify-around text-white">
            <li><a href="/home" class="hover:text-gray-300">Accueil</a></li>
            <li><a href="/articles/create" class="hover:text-gray-300">Ajouter un article</a></li>
            <li><a href="#services" class="hover:text-gray-300">Lire un PDF</a></li>
            <li><a href="#contact" class="hover:text-gray-300">Profil</a></li>
            <li>
                <a href="#avatar" class="hover:text-gray-300 flex items-center">
                    <img src="path/to/avatar.jpg" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                    <span>Mon Avatar</span>
                </a>
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Déconnexion</button>
            </form>
        </ul>
    </nav>

    <img src="{{ Storage::url($article->image) }}" class="w-80 mx-auto my-5 h-60 border-0"></>

    <div class="font-sans bg-black/30 text-black p-8  m-8  text-lg">

        <h1 class="text-2xl uppercase tracking-widest mt-0">{{ $article->title }}</h1>
        <br>
        <p class="text-base text-gray-700">{{ $article->content }}</p>
        <a href="/index"><button
                class="block w-4/5 mx-auto my-4 px-4 py-2 bg-red text-black rounded-md border-none text-lg cursor-pointer hover:bg-black/50 transition">
                Retour
            </button></a>
    </div>
</body>

</html>