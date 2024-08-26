<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jets</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="h-14 bg-gradient-to-r from-cyan-500 to-blue-500">
       <!-- Navbar -->
       <nav class="bg-gray-900 text-white py-3">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="flex items-center">
                <img src="assets/img/logo.jpg" alt="Jets Logo" class="w-8 h-8 mr-2">
                <span class="font-bold text-2xl">Jets</span>
            </a>
            <ul class="flex-grow flex justify-center space-x-4">
                <li><a href="#" class="hover:text-blue-500">Features</a></li>
                <li><a href="#" class="hover:text-blue-500">Solutions</a></li>
                <li><a href="#" class="hover:text-blue-500">Plans</a></li>
                <li><a href="#" class="hover:text-blue-500">Pricing</a></li>
                <li><a href="#" class="hover:text-blue-500">Resources</a></li>
            </ul>
            <div class="flex items-center space-x-2 ml-auto">
                <div class="relative">
                    <button class="bg-blue-500 rounded-full h-8 w-8 font-bold text-white text-sm flex items-center justify-center shadow-md">
                        +
                    </button>
                </div>
                <div class="relative">
                    <button class="bg-blue-500 rounded-full h-8 w-8 font-bold text-white text-sm flex items-center justify-center shadow-md">
                        i
                    </button>
                </div>
                <div class="relative">
                    <button class="bg-blue-500 rounded-full h-8 w-8 font-bold text-white text-sm flex items-center justify-center shadow-md">
                        <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" />
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <a href="login.blade.php">
                     <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full border border-gray-300 shadow-md">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Isi -->
    <div class="container mx-auto mt-8 px-4">
        <div class="flex space-x-4 overflow-x-auto pb-8">
            <!-- Todo Column -->
            <div class="bg-gray-100 rounded-lg shadow-md w-80 p-4 flex-shrink-0">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Todo</h3>
                    <div class="cursor-pointer text-gray-500">
                        <i class="fas fa-ellipsis-v"></i> <!-- FontAwesome vertical dots icon -->
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer">
                        <p>Harus Mengerjakan Tugas PKK</p>
                        <div class="flex items-center justify-between mt-4 text-gray-500">
                            <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full" alt="User Avatar">
                        </div>
                    </div>
                    <button class="text-blue-500 hover:text-blue-700 text-sm mt-4">+ Add another card</button>
                </div>
            </div>
            <!-- End Todo Column -->

            <!-- Doing Column -->
            <div class="bg-gray-100 rounded-lg shadow-md w-80 p-4 flex-shrink-0">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Doing</h3>
                    <div class="cursor-pointer text-gray-500">
                        <i class="fas fa-ellipsis-v"></i> <!-- FontAwesome vertical dots icon -->
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer">
                        <p>Mengerjakan Tugas PAI</p>
                        <div class="flex items-center justify-between mt-4 text-gray-500">
                            <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full" alt="User Avatar">
                        </div>
                    </div>
                    <button class="text-blue-500 hover:text-blue-700 text-sm mt-4">+ Add another card</button>
                </div>
            </div>
            <!-- End Doing Column -->

            <!-- Done Column -->
            <div class="bg-gray-100 rounded-lg shadow-md w-80 p-4 flex-shrink-0">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Done</h3>
                    <div class="cursor-pointer text-gray-500">
                        <i class="fas fa-ellipsis-v"></i> <!-- FontAwesome vertical dots icon -->
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer">
                        <p>Sudah Mengerjakan Tugas PBO</p>
                        <div class="flex items-center justify-between mt-4 text-gray-500">
                            <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full" alt="User Avatar">
                        </div>
                    </div>
                    <button class="text-blue-500 hover:text-blue-700 text-sm mt-4">+ Add another card</button>
                </div>
            </div>
            <!-- End Done Column -->
        </div>
    </div>
    <!-- End Isi -->
</body>

</html>
