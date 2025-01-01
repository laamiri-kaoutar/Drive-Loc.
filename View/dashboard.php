<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Rent - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#003A66',
                        secondary: '#E02454',
                        'secondary-dark': '#C21E44',
                    },
                    fontFamily: {
                        'title': ['Poppins', 'sans-serif'],
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-gray-50 text-gray-700 font-title">
    <!-- Main Container -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-primary text-white" id="sidebar">
            <div class="p-6 flex flex-col">
                <!-- Login Sign -->
                <div class="flex items-center space-x-2 mb-6">
                    <img src="profile-picture.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
                    <span class="font-bold">John Doe</span>
                </div>
                <h1 class="text-xl font-bold mb-4">Go Rent</h1>
            </div>
            <nav class="p-6">
                <ul class="space-y-4">
                    <li><button data-section="clients" class="dashboard-link w-full text-left flex items-center space-x-2 p-2 hover:bg-gray-200 rounded">
                        <i class="ri-user-line"></i><span>Clients</span>
                    </button></li>
                    <li><button data-section="reservations" class="dashboard-link w-full text-left flex items-center space-x-2 p-2 hover:bg-gray-200 rounded">
                        <i class="ri-calendar-line"></i><span>Reservations</span>
                    </button></li>
                    <li><button data-section="vehicules" class="dashboard-link w-full text-left flex items-center space-x-2 p-2 hover:bg-gray-200 rounded">
                        <i class="ri-car-line"></i><span>Vehicules</span>
                    </button></li>
                    <li><button data-section="categories" class="dashboard-link w-full text-left flex items-center space-x-2 p-2 hover:bg-gray-200 rounded">
                        <i class="ri-folder-line"></i><span>Categories</span>
                    </button></li>
                    <li><button data-section="avis" class="dashboard-link w-full text-left flex items-center space-x-2 p-2 hover:bg-gray-200 rounded">
                        <i class="ri-comment-line"></i><span>Avis/Opinions</span>
                    </button></li>
                    <li><button data-section="statistiques" class="dashboard-link w-full text-left flex items-center space-x-2 p-2 hover:bg-gray-200 rounded">
                        <i class="ri-bar-chart-line"></i><span>Statistiques</span>
                    </button></li>
                </ul>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            <!-- Clients Section -->
            <section id="clients" class="dashboard-section hidden bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-primary mb-4">Clients</h2>
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">ID</th>
                            <th class="border p-2">Name</th>
                            <th class="border p-2">Email</th>
                            <th class="border p-2">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2">1</td>
                            <td class="border p-2">John Doe</td>
                            <td class="border p-2">john@example.com</td>
                            <td class="border p-2">+123456789</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Reservations Section -->
            <section id="reservations" class="dashboard-section hidden bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-primary mb-4">Reservations</h2>
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">Reservation ID</th>
                            <th class="border p-2">Client Name</th>
                            <th class="border p-2">Vehicle</th>
                            <th class="border p-2">Date</th>
                            <th class="border p-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2">101</td>
                            <td class="border p-2">John Doe</td>
                            <td class="border p-2">Toyota Corolla</td>
                            <td class="border p-2">2024-12-15</td>
                            <td class="border p-2">Confirmed</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Vehicules Section -->
            <section id="vehicules" class="dashboard-section hidden bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-primary mb-4">Vehicules</h2>
                <button id="addVehiculeBtn" class="bg-secondary text-white px-4 py-2 rounded mb-4 hover:bg-secondary-dark transition-all duration-300 ease-in-out">Add New Vehicule</button>
<!-- Vehicule Form Modal -->
<div id="vehiculeForm" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-2xl font-bold text-primary mb-4">Add Vehicule</h3>
        <form>
            <!-- Two-column layout for Marque, Modele, Prix par jour, and Disponibilité -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Marque -->
                <div class="mb-4">
                    <label for="vehiculeMarque" class="block text-sm font-medium text-gray-700">Marque</label>
                    <input type="text" id="vehiculeMarque" name="vehiculeMarque" class="w-full border p-2 mt-2" placeholder="Enter Brand">
                </div>

                <!-- Modele -->
                <div class="mb-4">
                    <label for="vehiculeModele" class="block text-sm font-medium text-gray-700">Modele</label>
                    <input type="text" id="vehiculeModele" name="vehiculeModele" class="w-full border p-2 mt-2" placeholder="Enter Model">
                </div>

                <!-- Prix par jour -->
                <div class="mb-4">
                    <label for="vehiculePrix" class="block text-sm font-medium text-gray-700">Prix par jour</label>
                    <input type="number" id="vehiculePrix" name="vehiculePrix" class="w-full border p-2 mt-2" placeholder="Enter Price per Day" step="0.01">
                </div>

                <!-- Disponibilité -->
                <div class="mb-4">
                    <label for="vehiculeDisponibilite" class="block text-sm font-medium text-gray-700">Disponibilité</label>
                    <select id="vehiculeDisponibilite" name="vehiculeDisponibilite" class="w-full border p-2 mt-2">
                        <option value="true">Disponible</option>
                        <option value="false">Indisponible</option>
                    </select>
                </div>
            </div>

            <!-- Description (Single-column) -->
            <div class="mb-4">
                <label for="vehiculeDescription" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="vehiculeDescription" name="vehiculeDescription" class="w-full border p-2 mt-2" placeholder="Enter Description"></textarea>
            </div>

            <!-- Image (Single-column) -->
            <div class="mb-4">
                <label for="vehiculeImage" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input type="text" id="vehiculeImage" name="vehiculeImage" class="w-full border p-2 mt-2" placeholder="Enter Image URL">
            </div>

            <!-- Category (Single-column) -->
            <div class="mb-4">
                <label for="vehiculeCategory" class="block text-sm font-medium text-gray-700">Category</label>
                <select id="vehiculeCategory" name="vehiculeCategory" class="w-full border p-2 mt-2">
                    <!-- Dynamically populated categories -->
                    <option value="1">SUV</option>
                    <option value="2">Sedan</option>
                    <option value="3">Convertible</option>
                </select>
            </div>

            <!-- Form Buttons -->
            <div class="flex justify-between">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700" onclick="closeVehiculeForm()">Cancel</button>
                <button type="submit" class="bg-secondary text-white px-4 py-2 rounded hover:bg-secondary-dark">Save</button>
            </div>
        </form>
    </div>
</div>



                <table class="w-full border-collapse border border-gray-300 mt-4">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">ID</th>
                            <th class="border p-2">Marque</th>
                            <th class="border p-2">Modele</th>
                            <th class="border p-2">Prix par jour</th>
                            <th class="border p-2">Disponibilité</th>
                            <th class="border p-2">Category</th>
                            <th class="border p-2">Description</th>
                            <th class="border p-2">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2">1</td>
                            <td class="border p-2">Toyota</td>
                            <td class="border p-2">Corolla</td>
                            <td class="border p-2">$50/day</td>
                            <td class="border p-2">Disponible</td>
                            <td class="border p-2">Sedan</td>
                            <td class="border p-2">Comfortable and fuel-efficient</td>
                            <td class="border p-2"><img src="car-image.jpg" alt="Car" class="w-20 h-20 object-cover"></td>
                        </tr>
                    </tbody>
                </table>

            </section>

            <!-- Categories Section -->
            <section id="categories" class="dashboard-section hidden bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-primary mb-4">Categories</h2>
                <button id="addCategoryBtn" class="bg-secondary text-white px-4 py-2 rounded mb-4 hover:bg-secondary-dark transition-all duration-300 ease-in-out">Add New Categories</button>

                <!-- Categories Form Modal -->
                <div id="categoryForm" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
                    <div class="bg-white p-6 rounded-lg w-96">
                        <h3 class="text-2xl font-bold text-primary mb-4">Add Categories</h3>
                        <form id="categoryFormContent">
                            <div id="categoryFields">
                                <div class="mb-4">
                                    <input type="text" class="w-full border p-2" placeholder="Enter Category Name">
                                </div>
                            </div>
                            <button type="button" id="addCategoryInput" class="bg-gray-200 text-primary px-4 py-2 rounded mb-4 hover:bg-gray-300">Add More</button>
                            <div class="flex justify-between">
                                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700" onclick="closeCategoryForm()">Cancel</button>
                                <button type="submit" class="bg-secondary text-white px-4 py-2 rounded hover:bg-secondary-dark">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="w-full border-collapse border border-gray-300 mb-4">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">ID</th>
                            <th class="border p-2">Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2">1</td>
                            <td class="border p-2">SUV</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Statistiques Section -->
            <section id="statistiques" class="dashboard-section hidden bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-primary mb-4">Statistiques</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center">
                        <h3 class="text-xl font-semibold text-primary">Total Reservations</h3>
                        <p class="text-3xl font-bold mt-2">1,245</p>
                        <p class="text-sm text-gray-500 mt-1">This Year</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center">
                        <h3 class="text-xl font-semibold text-primary">Total Vehicles</h3>
                        <p class="text-3xl font-bold mt-2">85</p>
                        <p class="text-sm text-gray-500 mt-1">Available for Rent</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md text-center">
                        <h3 class="text-xl font-semibold text-primary">Total Clients</h3>
                        <p class="text-3xl font-bold mt-2">320</p>
                        <p class="text-sm text-gray-500 mt-1">Active Clients</p>
                    </div>
                </div>
            </section>
        </main>

    </div>

    <script>
        // Toggle Dashboard Sections
        const dashboardLinks = document.querySelectorAll('.dashboard-link');
        const sections = document.querySelectorAll('.dashboard-section');

        dashboardLinks.forEach(link => {
            link.addEventListener('click', () => {
                const section = link.getAttribute('data-section');
                sections.forEach(sec => {
                    if (sec.id === section) {
                        sec.classList.remove('hidden');
                    } else {
                        sec.classList.add('hidden');
                    }
                });
            });
        });

        // Show Vehicule Form
        const addVehiculeBtn = document.getElementById('addVehiculeBtn');
        const vehiculeForm = document.getElementById('vehiculeForm');
        addVehiculeBtn.addEventListener('click', () => {
            vehiculeForm.classList.remove('hidden');
        });

        // Close Vehicule Form
        function closeVehiculeForm() {
            vehiculeForm.classList.add('hidden');
        }

        // Show Category Form
        const addCategoryBtn = document.getElementById('addCategoryBtn');
        const categoryForm = document.getElementById('categoryForm');
        addCategoryBtn.addEventListener('click', () => {
            categoryForm.classList.remove('hidden');
        });

        // Close Category Form
        function closeCategoryForm() {
            categoryForm.classList.add('hidden');
        }

        // Add More Category Fields
        const addCategoryInput = document.getElementById('addCategoryInput');
        addCategoryInput.addEventListener('click', () => {
            const categoryFields = document.getElementById('categoryFields');
            const newInput = document.createElement('div');
            newInput.classList.add('mb-4');
            newInput.innerHTML = '<input type="text" class="w-full border p-2" placeholder="Enter Category Name">';
            categoryFields.appendChild(newInput);
        });
    </script>
</body>

</html>