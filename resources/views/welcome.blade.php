<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{ mix('/css/app.css') }}"></script>
    <!-- Styles -->
    <style>
    </style>
</head>

<body class="overflow-hidden overflow-x-scroll bg-white">
    <div class="container h-screen bg-white bg-gray-200 max-w-none">
        <div class="flex justify-center py-48 overflow-hidden border-t border-l border-r border-gray-400 rounded-t-lg">
            <div class="w-full max-w-md">
                <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md">
                    <div class="flex w-24 h-24 m-auto mt-12 mb-12 ">
                        <img class="w-full h-full bg-white" src="/img/logo.png" alt="" srcset="">
                    </div>
                    <div class="mb-4"><label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                            Username
                        </label> <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username"></div>
                    <div class="mb-6"><label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                            Password
                        </label> <input class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                        <p class="text-xs italic text-red-500">Please choose a password.</p>
                    </div>
                    <div class="flex items-center justify-between"><button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="button">
                            Sign In
                        </button> <a class="inline-block text-sm font-bold text-blue-500 align-baseline hover:text-blue-800" href="#">
                            Forgot Password?
                        </a></div>
                </form>
                <p class="text-xs text-center text-gray-500">
                    <a href="http://www.vcodebest.com" class="hover:underline" target="_blank">©2020 VCodeBest Freelancer Team. All rights reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>