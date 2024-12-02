<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-6">
    <!-- Menu en Haut de la Page -->
    <nav class="bg-blue-500 p-4 fixed w-full top-0 left-0 shadow-md">
        <ul class="flex justify-around text-white">
            <li><a href="#home" class="hover:text-gray-300">Accueil</a></li>
            <li><a href="#about" class="hover:text-gray-300">À propos</a></li>
            <li><a href="#services" class="hover:text-gray-300">Services</a></li>
            <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Déconnexion</button>
            </form>
        </ul>
    </nav>

    <!-- Contenu Principal -->
    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 gap-6">
        @foreach ($articles as $article)
            <div class="bg-white p-4 rounded-lg shadow-md">
                @if ($article->image)
                    <img src="{{ asset('public/images' . $article->image) }}" alt="Image de {{ $article->title }}"
                        class="w-full h-auto mb-2 rounded-md">
                @endif
                <h2 class="text-xl font-bold mb-2">{{ $article->title }}</h2>
                <a href="{{ route('articles.show', $article) }}" class="text-blue-500 hover:underline">Lire l'article</a>
                @if ($article->file_path)
                    <a href="{{ route('articles.download', $article) }}" class="text-blue-500 hover:underline ml-4">Télécharger
                        le PDF</a>
                @endif
            </div>
        @endforeach
    </div>
</body>

</html>