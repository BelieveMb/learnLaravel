<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"> 
    <title>Bienvenu à Lukaye </title>
    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="../../css/app.css">
</head >
<body>
    @include('users.header')


    <div class="flex justify-between  gap-5 px-24 py-12 bg-gray-400">
        <div class="flex flex-col gap-y-12 text-center align-center pt-6 px-12 w-1/2 ">
            <div class="font-bold text-2xl">
                <h2>Lorem ipsum dolor sit amet</h2>
                <h1 class="text-6xl text-white">Inscrivez pour trouver tout ce que vous cherchez</h1>
            </div>

            <div class="my-4 ">
                <p>Vous avez déjà un compte ?</p>
                <a href=" {{ route('lukaye.loginName') }} " class="text-bold text-gray-100">Connectez vous</a>
            </div>

            <div class="">
                <img src="{{ asset('images/maps.jpg') }}" alt="" class="h-32 w-full rounded-lg">
            </div>

        </div>


        <div class="w-1/2 bg-form flex flex-col align-center text-center px-16 py-6 rounded-lg" >

            <h3 class="pt-4 text-2xl text-center my-6">Create an Account!</h3>

                                <form class="px-8 pt-6 pb-8 mb-4 bg-gray-400  rounded">
                                    <div class="mb-4 md:flex md:justify-between">
                                        <div class="mb-4 md:mr-2 md:mb-0">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                                First Name
                                            </label>
                                            <input
                                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                id="firstName"
                                                type="text"
                                                placeholder="First Name"
                                            />
                                        </div>
                                        <div class="md:ml-2">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                                Last Name
                                            </label>
                                            <input
                                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                id="lastName"
                                                type="text"
                                                placeholder="Last Name"
                                            />
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>

            </body>
</html >