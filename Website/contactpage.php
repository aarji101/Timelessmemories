<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contact Us - Timeless Memories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" referrerpolicy="no-referrer" rel="stylesheet"/>
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
            background: #f7fafc;
            color: #2d3748;
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
        .bg-cover {
            background-size: cover;
            background-position: center;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
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
                <li><a class="text-gray-300 hover:text-indigo-600" href="index.php">Portfolio</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="gallery.php">Gallery</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="experience.php">Experience</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="contact.php">Contact Us</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="Photographer.php">Photographer</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="login.php">Login</a></li>
            </ul>
        </div>
    </header>

    <main class="flex-grow relative">
        <div class="absolute inset-0 w-full h-full">
            <img alt="Background image of a beautiful landscape with mountains and a clear sky" class="w-full h-full object-cover" height="1080" src="https://storage.googleapis.com/a1aa/image/w29KDVYZi55mmHAaKtReRAW24k644Jn62pAMeij1KyM.jpg" width="1920"/>
            <div class="overlay absolute inset-0"></div>
        </div>
        <div class="relative z-10 text-center mb-8 pt-16">
            <h1 class="text-4xl font-bold text-white">Contact Us</h1>
            <p class="text-lg text-gray-300">We'd love to hear from you! Please fill out the form below to get in touch.</p>
        </div>
        <div class="relative z-10 max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form action="" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                    <input class="w-full p-2 border rounded" id="name" name="name" required="" type="text"/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                    <input class="w-full p-2 border rounded" id="email" name="email" required="" type="email"/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="message">Message</label>
                    <textarea class="w-full p-2 border rounded" id="message" name="message" required="" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center p-4 w-full">
        <p>© 2025 Timeless Memories Photography</p>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
