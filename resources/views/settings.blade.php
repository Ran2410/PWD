<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jets - Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="h-14 bg-gradient-to-r from-cyan-500 to-blue-500">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>

    <div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
        <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
            <div class="sticky flex flex-col gap-2 p-4 text-sm border-r border-indigo-100 top-12">
                <h2 class="pl-3 mb-4 text-2xl font-semibold">Settings</h2>
                <a href="#" class="flex items-center px-3 py-2.5 font-bold bg-white text-indigo-900 border rounded-full">
                    Public Profile
                </a>
                <a href="#" class="flex items-center px-3 py-2.5 font-semibold hover:text-indigo-900 hover:border hover:rounded-full"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>
        <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
            <div class="p-2 md:p-4">
                <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                    <h2 class="pl-6 text-2xl font-bold sm:text-xl">Public Profile</h2>
                    <div class="grid max-w-2xl mx-auto mt-8">

                        <!-- Form upload gambar -->
                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">
                                <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
                                    src="{{ asset(Auth::user()->profile_picture ? 'storage/' . Auth::user()->profile_picture : 'default-avatar.jpg') }}"
                                    alt="Profile Picture">
                                <div class="flex flex-col space-y-5 sm:ml-8">
                                    <!-- Ganti gambar -->
                                    <input type="file" name="profile_picture"
                                        class="py-3.5 px-7 text-base font-medium text-indigo-900 focus:outline-none bg-white rounded-lg border border-indigo-200 hover:bg-indigo-100 hover:text-[#202142] focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                    <button type="submit"
                                        class="py-3.5 px-7 text-base font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                        Upload Picture
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Form data pengguna -->
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            <div class="items-center mt-8 sm:mt-14 text-[#202142]">
                                <div
                                    class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                    <div class="w-full">
                                        <label for="first_name"
                                            class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                            first name</label>
                                        <input type="text" id="first_name" name="first_name"
                                            class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                            placeholder="Your first name" value="{{ Auth::user()->first_name }}" required>
                                    </div>

                                    <div class="w-full">
                                        <label for="last_name"
                                            class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                            last name</label>
                                        <input type="text" id="last_name" name="last_name"
                                            class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                            placeholder="Your last name" value="{{ Auth::user()->last_name }}" required>
                                    </div>
                                </div>

                                <div class="mb-2 sm:mb-6">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                        email</label>
                                    <input type="email" id="email" name="email"
                                        class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                        placeholder="your.email@mail.com" value="{{ Auth::user()->email }}" required>
                                </div>

                                <div class="mb-2 sm:mb-6">
                                    <label for="profession"
                                        class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Profession</label>
                                    <input type="text" id="profession" name="profession"
                                        class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                        placeholder="your profession" value="{{ Auth::user()->profession }}" required>
                                </div>

                                <div class="mb-6">
                                    <label for="bio"
                                        class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Bio</label>
                                    <textarea id="bio" name="bio" rows="4"
                                        class="block p-2.5 w-full text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 "
                                        placeholder="Write your bio here...">{{ Auth::user()->bio }}</textarea>
                                </div>

                                <form action="{{ route('profile.update') }}" method="POST">
                                    @csrf
                                    <!-- ... input fields ... -->
                                    <div class="flex justify-end">
                                        <button type="submit"
                                            class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                                    </div>
                                </form>
                                
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
