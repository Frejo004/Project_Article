<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>

</head>

<body>
<form method="POST" action="{{ route('sign-up') }}">
@csrf
    <div class="min-h-screen bg-purple-400 flex justify-center items-center">
        <div
            class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div
            class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block">
        </div>
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <div>
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
                <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create
                    an account to enjoy all the services without any ads for free!</p>
            </div>
            <div class="space-y-4">
                <input type="text" id="name" name="name" placeholder="Nom"
                    class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
                <input type="email" id="email" name="email" placeholder="Adresse mail"
                    class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
                <input type="password" id="password" name="password" placeholder="Mot de passe"
                    class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
                <input type="password" id="password_confirmation" name="password" placeholder=" Confirmer mot de passe"
                    class="block text-sm py-3 px-4 rounded-lg w-full border outline-purple-500" />
            </div>
            <div class="text-center mt-6">
                <button
                    class="w-full py-2 text-xl text-white bg-purple-400 rounded-lg hover:bg-purple-500 transition-all">S'inscrire</button>
                <p class="mt-4 text-sm">Already Have An Account? <a href="/login"><span class="underline  cursor-pointer"> Sign In</span></a>
                </p>
            </div>
        </div>
        <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
        <div
            class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
        </div>
    </div>
</form> 
</body>

</html>