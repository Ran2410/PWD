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
            max-height: 500px; /* Tinggi maksimal yang diinginkan */
            overflow-y: auto; /* Aktifkan scroll vertikal */
            min-height: 200px; /* Tinggi minimum kolom */
            background-color: #f0f0f0; /* Background default kolom */
        }

        .column {
        min-height: 200px; /* Atur sesuai kebutuhan Anda */
}

        .flex {
        align-items: flex-start;;
}

    .column {
    min-height: 200px;
    overflow-y: auto; /* Tambahkan ini untuk memastikan kolom bisa digulir */
    max-height: 500px;
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
                    <a href="{{ url('/login') }}">
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
        <div class="bg-gray-100 rounded-lg shadow-md w-80 p-4 flex-shrink-0 column">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold">Todo</h3>
            </div>
            <div class="space-y-4" id="todoColumn">
                <div class="bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer">
                    <div class="flex justify-between items-center">
                        <p>Harus Mengerjakan Tugas PKK</p>
                        <i class="fas fa-ellipsis-v more-icon"></i> <!-- FontAwesome vertical dots icon -->
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
    </div>
</div>

<!-- Modal for Add Card -->
<div id="addCardModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg p-6 w-full max-w-md mx-auto shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Add a new card</h2>
            <textarea id="newCardText" rows="4" class="w-full p-2 border rounded-md" placeholder="Enter task description"></textarea>
            <div class="flex justify-end mt-4">
                <button id="cancelButton" class="text-gray-600 hover:text-gray-800 mr-4 py-2">Cancel</button>
                <button id="saveButton" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Card</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal for Edit/Delete Card -->
<div id="editDeleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg p-6 w-full max-w-md mx-auto shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Edit or Delete Card</h2>
            <textarea id="editCardText" rows="4" class="w-full p-2 border rounded-md" placeholder="Enter task description"></textarea>
            <div class="flex justify-between mt-4">
                <button id="deleteButton" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700">Delete Card</button>
                <button id="saveEditButton" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Save Changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- JavaScript -->
<script>
    // Mendapatkan elemen
    const addCardButtons = document.querySelectorAll('.text-blue-500');
    const addCardModal = document.getElementById('addCardModal');
    const cancelButton = document.getElementById('cancelButton');
    const saveButton = document.getElementById('saveButton');
    const newCardText = document.getElementById('newCardText');
    let currentColumn = null;

    const moreIcons = document.querySelectorAll('.more-icon');
    const editDeleteModal = document.getElementById('editDeleteModal');
    const editCardText = document.getElementById('editCardText');
    const saveEditButton = document.getElementById('saveEditButton');
    const deleteButton = document.getElementById('deleteButton');
    let currentCard = null;

    // Menampilkan modal ketika tombol '+ Add another card' diklik
    addCardButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            addCardModal.classList.remove('hidden');
            currentColumn = event.target.closest('.column').querySelector('.space-y-4');
        });
    });

    // Menyembunyikan modal ketika tombol 'Cancel' diklik
    cancelButton.addEventListener('click', () => {
        addCardModal.classList.add('hidden');
        newCardText.value = '';
    });

    // Menambahkan card baru ketika tombol 'Add Card' diklik
    saveButton.addEventListener('click', () => {
        const cardText = newCardText.value.trim();
        if (cardText !== '' && currentColumn) {
            // Membuat card baru
            const newCard = document.createElement('div');
            newCard.className = 'bg-white p-4 rounded-lg shadow hover:bg-gray-50 cursor-pointer';
            newCard.innerHTML = `
                <div class="flex justify-between items-center">
                    <p>${cardText}</p>
                    <i class="fas fa-ellipsis-v more-icon"></i>
                </div>
                <div class="flex items-center justify-between mt-4 text-gray-500">
                    <img src="assets/img/gojo.jpg" class="h-8 w-8 rounded-full" alt="User Avatar">
                </div>`;

            // Menambahkan card ke dalam column yang sesuai
            currentColumn.insertBefore(newCard, currentColumn.querySelector('button'));

            // Menyembunyikan modal dan membersihkan input
            addCardModal.classList.add('hidden');
            newCardText.value = '';
            currentColumn = null;

            // Menambahkan event listener untuk ikon 'More'
            const moreIcon = newCard.querySelector('.more-icon');
            moreIcon.addEventListener('click', (event) => {
                currentCard = event.target.closest('.bg-white');
                editCardText.value = currentCard.querySelector('p').innerText;
                editDeleteModal.classList.remove('hidden');
            });
        }
    });

    // Menampilkan modal edit/delete ketika ikon 'More' diklik
    moreIcons.forEach(icon => {
        icon.addEventListener('click', (event) => {
            currentCard = event.target.closest('.bg-white');
            editCardText.value = currentCard.querySelector('p').innerText;
            editDeleteModal.classList.remove('hidden');
        });
    });

        // Menyembunyikan modal edit/delete ketika tombol 'Save Changes' diklik
    saveEditButton.addEventListener('click', () => {
        if (currentCard) {
            const updatedText = editCardText.value.trim();
            if (updatedText !== '') {
                // Mengupdate teks card
                currentCard.querySelector('p').innerText = updatedText;
                editDeleteModal.classList.add('hidden');
                editCardText.value = '';
                currentCard = null;
            }
        }
    });

    // Menghapus card ketika tombol 'Delete Card' diklik
    deleteButton.addEventListener('click', () => {
        if (currentCard) {
            currentCard.remove();
            editDeleteModal.classList.add('hidden');
            editCardText.value = '';
            currentCard = null;
        }
    });

    // Menyembunyikan modal edit/delete ketika di luar modal diklik
    window.addEventListener('click', (event) => {
        if (event.target === editDeleteModal) {
            editDeleteModal.classList.add('hidden');
            editCardText.value = '';
            currentCard = null;
        }
    });
</script>
<!-- End JavaScript -->


</body>

</html>
