<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

</head>



<body class="bg-gray-100 p-6">
    <div>
    <nav class="bg-blue-500 p-4 absolute w-full top-0 left-0 shadow-md">
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
    </nav></div>


    <h2 class="text-2xl font-bold mb-6">Rédiger un Article ou Uploader un PDF</h2>

    <form action="/articles/create" method="POST" class="bg-white p-6 rounded-lg shadow-md"
        enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="titre" class="block text-gray-700 font-bold mb-2">Titre de l'article :</label>
            <input type="text" id="titre" name="title" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md">
            @error('title')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="pdf" class="block text-gray-700 font-bold mb-2">Télécharger une image :</label>
            <input type="file" id="image" name="image" accept="application/image"
                class="w-full px-3 py-2 border border-gray-300 rounded-md">
            @error('image')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="contenu" class="block text-gray-700 font-bold mb-2">Contenu de l'article :</label>
            <textarea id="content" name="content" rows="10" class="w-full px-3 py-2 border border-gray-300 rounded-md"
                required></textarea>
            @error('content')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="pdf" class="block text-gray-700 font-bold mb-2">Uploader un fichier PDF :</label>
            <input type="file" id="file_path" name="file_path" accept="application/pdf"
                class="w-full px-3 py-2 border border-gray-300 rounded-md">
            @error('file_path')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <input type="submit" value="Soumettre"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">
        </div>
    </form>
    @if ($errors)
        @foreach ($errors as $error)
            <p>{{$error}}</p>
        @endforeach

    @endif
</body>

</html>