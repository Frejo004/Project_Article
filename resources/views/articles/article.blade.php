<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

</head>

<body>

    <body class="bg-gray-100 p-6">
    <nav class="bg-blue-500 p-4 fixed w-full top-0 left-0 shadow-md">
        <ul class="flex justify-around text-white">
            <li><a href="#home" class="hover:text-gray-300">Accueil</a></li>
            <li><a href="#about" class="hover:text-gray-300">À propos</a></li>
            <li><a href="#services" class="hover:text-gray-300">Services</a></li>
            <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
            <button class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"> Déconnexion</button>
        </ul>
    </nav>
        <h2 class="text-2xl font-bold mb-6">Rédiger un Article ou Uploader un PDF</h2>
        <form action="/create" method="POST"
            class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="titre" class="block text-gray-700 font-bold mb-2">Titre de l'article :</label>
                <input type="text" id="titre" name="titre" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="pdf" class="block text-gray-700 font-bold mb-2">Télécharger une image :</label>
                <input type="file" id="image" name="image" accept="application/image"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="contenu" class="block text-gray-700 font-bold mb-2">Contenu de l'article :</label>
                <textarea id="content" name="contenu" rows="10"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label for="pdf" class="block text-gray-700 font-bold mb-2">Uploader un fichier PDF :</label>
                <input type="file" id="file_path" name="file_path" accept="application/pdf"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <input type="submit" value="Soumettre"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </body>
</body>

</html>