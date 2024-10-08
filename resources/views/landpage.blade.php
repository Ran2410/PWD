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
    <style>
        .column {
            max-height: 500px;
            overflow-y: auto;
            min-height: 200px;
            background-color: #f0f0f0;
        }

        .flex {
            align-items: flex-start;
        }
    </style>
</head>

<body class="h-14 bg-gradient-to-r from-cyan-500 to-blue-500">
    <!-- Navbar -->
    <nav class="bg-gray-900 text-white py-3">
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="flex items-center">
                <img src="assets/img/logo.jpg" alt="Jets Logo" class="w-8 h-8 mr-2">
                <span class="font-bold text-2xl">Jets</span>
            </a>
            <ul class="flex space-x-4 mr-4">
                <li>
                    <a href="{{ url('/login') }}"
                       class="hover:text-gray-500 text-white bg-blue-500 hover:bg-gray-300 px-4 py-2 rounded transition duration-300"
                       title="Login"
                       style="transition: background-color 0.3s, color 0.3s;">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="container mx-auto mt-8 px-4">
        <div class="flex space-x-4 overflow-x-auto pb-8">
            <!-- Todo Column -->
            <div class="bg-gray-100 rounded-lg shadow-md w-80 p-4 flex-shrink-0 column">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Todo</h3>
                </div>
                <div class="space-y-4" id="todoColumn">
                    <div class="bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer">
                        <div class="flex justify-between items-center">
                            <p>Harus Mengerjakan Tugas PKK</p>
                            <i class="fas fa-ellipsis-v more-icon"></i>
                        </div>
                        <div class="flex items-center justify-between mt-4 text-gray-500">
                            <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full" alt="User Avatar">
                        </div>
                    </div>
                    <button class="text-blue-500 hover:text-blue-700 text-sm mt-4">+ Add another card</button>
                </div>
            </div>
            <!-- End Todo Column -->

            <!-- Doing Column -->
            <div class="bg-gray-100 rounded-lg shadow-md w-80 p-4 flex-shrink-0 column">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Doing</h3>
                </div>
                <div class="space-y-4" id="doingColumn">
                    <div class="bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer">
                        <div class="flex justify-between items-center">
                            <p>Mengerjakan Tugas PAI</p>
                            <i class="fas fa-ellipsis-v more-icon"></i>
                        </div>
                        <div class="flex items-center justify-between mt-4 text-gray-500">
                            <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full" alt="User Avatar">
                        </div>
                    </div>
                    <button class="text-blue-500 hover:text-blue-700 text-sm mt-4">+ Add another card</button>
                </div>
            </div>
            <!-- End Doing Column -->

            <!-- Done Column -->
            <div class="bg-gray-100 rounded-lg shadow-md w-80 p-4 flex-shrink-0 column">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Done</h3>
                </div>
                <div class="space-y-4" id="doneColumn">
                    <div class="bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer">
                        <div class="flex justify-between items-center">
                            <p>Sudah Mengerjakan Tugas PBO</p>
                            <i class="fas fa-ellipsis-v more-icon"></i>
                        </div>
                        <div class="flex items-center justify-between mt-4 text-gray-500">
                            <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full" alt="User Avatar">
                        </div>
                    </div>
                    <button class="text-blue-500 hover:text-blue-700 text-sm mt-4">+ Add another card</button>
                </div>
            </div>
            <!-- End Done Column -->

        <!-- Modal -->
        <div id="loginModal" class="fixed inset-0 flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Login Required</h2>
                <p class="mb-4">You need to log in before adding a new card.</p>
                <a href="{{ url('/login') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
                <button id="closeModal" class="text-gray-600 hover:text-gray-800 ml-4">Close</button>
            </div>
        </div>
        </div>
    </div>`
            <!-- End Modal -->

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Assume we have a variable to check if the user is logged in
            let isLoggedIn = false; // Set to true if the user is logged in

            // Get elements
            const addCardButtons = document.querySelectorAll('button.text-blue-500');
            const modal = document.getElementById('loginModal');
            const closeModal = document.getElementById('closeModal');

            function showModal() {
                modal.classList.remove('hidden');
            }

            function hideModal() {
                modal.classList.add('hidden');
            }

            addCardButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    if (!isLoggedIn) {
                        event.preventDefault();
                        showModal();
                    } else {
                        // Continue with the add card logic if logged in
                        console.log("Add new card");
                    }
                });
            });

            // Close modal when "Close" button is clicked
            closeModal.addEventListener('click', hideModal);
        });
    </script>
    <!-- End JavScript -->

</body>

</html>
