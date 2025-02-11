<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeless Memories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        header {
            background: linear-gradient(90deg, #1a202c, #2d3748);
        }
        header h1 span {
            color: #4299e1;
        }
        main {
            background: #2d3748;
            color: #e2e8f0;
        }
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0;
        }
        footer {
            background: #1a202c;
            color: #e2e8f0;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="w-full p-2">
        <header class="bg-gray-800 text-white py-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-bold">
                    Timeless
                    <span class="text-blue-600">Memories</span>
                </h1>
                <div class="md:hidden">
                    <button class="text-white focus:outline-none" id="menu-button">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <ul class="hidden md:flex space-x-9" id="menu">
                    <li><a class="text-gray-300 hover:text-indigo-600" href="#portfolio-intro">Portfolio</a></li>
                    <li><a class="text-gray-300 hover:text-indigo-600" href="gallery.php">Gallery</a></li>
                    <li><a class="text-gray-300 hover:text-indigo-600" href="Experience.php">Experience</a></li>
                    <li><a class="text-gray-300 hover:text-indigo-600" href="contactpage.php">Contact Us</a></li>
                    <li><a class="text-gray-300 hover:text-indigo-600" href="Photographer.php">Photographer</a></li>
                    <li><a class="text-gray-300 hover:text-indigo-600" href="login.php">LOGIN</a></li>
            
                </ul>
            </div>
        </header>
        <main>
            <div class="relative overflow-hidden h-[90vh] flex flex-col justify-center items-center text-center text-white p-8">
                <img src="https://storage.googleapis.com/a1aa/image/56xeTgO4VskZGK8ge1BQXZKR1c8z4Siinr0Rf-Gr-0E.jpg" alt="Background image of a beautiful forest with sunlight filtering through the trees" class="absolute top-0 left-0 w-full h-full object-cover z-0">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-0"></div>
                <div class="relative z-10">
                    <h2 class="text-5xl font-bold mb-4">Our Portfolio</h2>
                    <p class="text-xl">Explore our Website to see the moments we've captured for our clients.</p>
                </div>
            </div>
            
            <section class="my-12" id="portfolio-intro">
                <h2 class="text-3xl font-bold text-center mb-8">Our Photographers</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="portfolio-item bg-gray-800 p-4 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                        <img alt="Portrait of Rajendra Shrestha, a professional photographer specializing in portrait photography and editing" class="w-full h-48 object-cover rounded-t-lg" height="200" src="https://storage.googleapis.com/a1aa/image/O7sexOUWzpRXMRihTFvzenyBbcEIKWHNnZA_BjNmMSU.jpg" width="300"/>
                        <div class="portfolio-details mt-4">
                            <h3 class="text-xl font-bold">Aakash Thapa</h3>
                            <p>Portrait Photography, Editing</p>
                            <p>10+ years (Wedding, Events)</p>
                            <p>Email: <a href="mailto:aakash@example.com" class="text-indigo-600 hover:underline">aakash@example.com</a></p>
                            <a class="btn text-indigo-600 hover:underline" href="https://i.pinimg.com/736x/b3/df/d9/b3dfd94a6357baaf856a11e9dadf5321.jpg">Explore here</a>
                        </div>
                    </div>
                    <div class="portfolio-item bg-gray-800 p-4 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                        <img alt="Portrait of Sita Basnet, a professional photographer specializing in wildlife and travel photography" class="w-full h-48 object-cover rounded-t-lg" height="200" src="https://storage.googleapis.com/a1aa/image/-lej63NQD46flqRcIgtTidZ9Vib67io_4Q_tHJe6zEY.jpg" width="300"/>
                        <div class="portfolio-details mt-4">
                            <h3 class="text-xl font-bold">Sita Basnet</h3>
                            <p>8+ years Wildlife, Travel</p>
                            <p>Nature Photography, Drone Shots</p>
                            <p>Email: <a href="mailto:sita@example.com" class="text-indigo-600 hover:underline">sita@example.com</a></p>
                            <a class="btn text-indigo-600 hover:underline" href="https://i.pinimg.com/736x/2e/c0/77/2ec0773a1fcd847a5bd258ea4bba668e.jpg">Explore here</a>
                        </div>
                    </div>
                    <div class="portfolio-item bg-gray-800 p-4 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                        <img alt="Portrait of Khushal Bhandari, a professional photographer specializing in fashion and studio photography" class="w-full h-48 object-cover rounded-t-lg" height="200" src="https://storage.googleapis.com/a1aa/image/Dwhbj1q6ZglFTltg6Z2zuVmTqtwsvt6CGMEs1mqZW7Y.jpg" width="300"/>
                        <div class="portfolio-details mt-4">
                            <h3 class="text-xl font-bold">Khushal Bhandari</h3>
                            <p>5+ years (Fashion, Studio)</p>
                            <p>Creative Direction, High-End Retouching</p>
                            <p>Email: <a href="mailto:khushal@example.com" class="text-indigo-600 hover:underline">khushal@example.com</a></p>
                            <a class="btn text-indigo-600 hover:underline" href="https://i.pinimg.com/736x/13/d3/0e/13d30e2ead1ab4430f41779332e38ad5.jpg">Explore here</a>
                        </div>
                    </div>
                    <div class="portfolio-item bg-gray-800 p-4 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                        <img alt="Portrait of Anju Khatri, a professional photographer specializing in candid shots and black &amp; white photography" class="w-full h-48 object-cover rounded-t-lg" height="200" src="https://storage.googleapis.com/a1aa/image/MyL1sJvRC3BcHf-IoIk68_PErx5O1YkOCt0VcRqvTkk.jpg" width="300"/>
                        <div class="portfolio-details mt-4">
                            <h3 class="text-xl font-bold">Anju Khatri</h3>
                            <p>Candid Shots, Black &amp; White, Cultural Events</p>
                            <p>6+ years (Street, Documentary)</p>
                            <p>Email: <a href="mailto:anju@example.com" class="text-indigo-600 hover:underline">anju@example.com</a></p>
                            <a class="btn text-indigo-600 hover:underline" href="https://i.pinimg.com/736x/2b/48/4f/2b484f01cb1e7580231e652861e0ef04.jpg">Explore here</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing my-12">
                <h2 class="text-3xl font-bold text-center mb-8">Our Packages</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="package bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                        <h2 class="text-2xl font-bold mb-4">Basic Package</h2>
                        <p class="text-lg"><strong>Price:</strong> NPR 15,000</p>
                        <p class="text-lg"><strong>Includes:</strong></p>
                        <ul class="list-disc list-inside">
                            <li>1 Professional Photographer</li>
                            <li>Basic Camera &amp; Lens Kit</li>
                            <li>2 Hours of Photography</li>
                            <li>20 Edited Photos</li>
                        </ul>
                    </div>
                    <div class="package bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                        <h2 class="text-2xl font-bold mb-4">Standard Package</h2>
                        <p class="text-lg"><strong>Price:</strong> NPR 30,000</p>
                        <p class="text-lg"><strong>Includes:</strong></p>
                        <ul class="list-disc list-inside">
                            <li>2 Professional Photographers</li>
                            <li>Advanced Camera &amp; Lens Kit</li>
                            <li>5 Hours of Photography</li>
                            <li>50 Edited Photos</li>
                            <li>Drone Photography (Optional)</li>
                        </ul>
                    </div>
                    <div class="package bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                        <h2 class="text-2xl font-bold mb-4">Premium Package</h2>
                        <p class="text-lg"><strong>Price:</strong> NPR 60,000</p>
                        <p class="text-lg"><strong>Includes:</strong></p>
                        <ul class="list-disc list-inside">
                            <li>3 Professional Photographers &amp; 1 Videographer</li>
                            <li>High-End Camera &amp; Lenses</li>
                            <li>Full-Day Coverage</li>
                            <li>100 Edited Photos &amp; Full HD Video</li>
                            <li>Drone Photography &amp; Cinematic Shots</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bg-gray-800 text-white text-center p-4 w-full">
            <p>© 2025 Timeless Memories. All Rights Reserved.</p>
        </footer>
    </div>

    <script>
        // Mobile Menu Toggle
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>