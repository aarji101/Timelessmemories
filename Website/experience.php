<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Experience & Skills - Timeless Memories</title>
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
            background: #2d3748;
            color: #e2e8f0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0;
        }
        .experience, .skills, .awards {
            background: #1a202c;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 0;
        }
        .experience:hover, .skills:hover, .awards:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        .experience h3, .skills h3, .awards h3 {
            color: #63b3ed;
        }
        .experience ul, .skills ul, .awards ul {
            list-style: none;
            padding: 0;
        }
        .experience li, .awards li {
            margin-bottom: 1.5rem;
        }
        .experience li h4, .awards li h4 {
            font-size: 1.25rem;
            color: #e2e8f0;
        }
        .experience li p, .awards li p {
            color: #a0aec0;
        }
        .skills ul {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .skills li {
            background: #2b6cb0;
            color: #e2e8f0;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            transition: background 0.3s;
            flex: 1 1 calc(33.333% - 1rem);
            text-align: center;
        }
        .skills li:hover {
            background: #4299e1;
        }
        footer {
            background: #1a202c;
            color: #e2e8f0;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>
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
                <li><a class="text-gray-300 hover:text-indigo-600" href="contactpage.php">Contact Us</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="Photographer.php">Photographer</a></li>
                <li><a class="text-gray-300 hover:text-indigo-600" href="login.php">LOGIN</a></li>
            </ul>
        </div>
    </header>
    <main>
        <section id="experience-skills" class="container mx-auto my-0">
            <h2 class="text-3xl font-bold text-center mb-0">Experience & Skills</h2>
            <div class="experience mb-0">
                <h3 class="text-2xl font-bold mb-0">Professional Experience</h3>
                <ul class="space-y-0">
                    <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold">Lead Photographer</h4>
                        <p class="text-gray-400">Jan 2019 - Present | ABC Photography</p>
                        <p>Capturing wedding, portrait, and event photography. Leading a team of photographers, ensuring quality and creative direction.</p>
                    </li>
                    <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold">Freelance Photographer</h4>
                        <p class="text-gray-400">Jun 2016 - Dec 2018 | Self-employed</p>
                        <p>Worked with multiple clients for personal projects, corporate events, and fashion shoots.</p>
                    </li>
                </ul>
            </div>
            <div class="skills mb-0">
                <h3 class="text-2xl font-bold mb-0">Key Skills</h3>
                <ul class="flex flex-wrap gap-2">
                    <li class="bg-blue-600 text-white p-2 rounded-lg shadow-lg flex-1 text-center">Portrait Photography</li>
                    <li class="bg-blue-600 text-white p-2 rounded-lg shadow-lg flex-1 text-center">Wedding Photography</li>
                    <li class="bg-blue-600 text-white p-2 rounded-lg shadow-lg flex-1 text-center">Post-Processing and Editing (Adobe Photoshop, Lightroom)</li>
                    <li class="bg-blue-600 text-white p-2 rounded-lg shadow-lg flex-1 text-center">Studio Lighting and Setup</li>
                    <li class="bg-blue-600 text-white p-2 rounded-lg shadow-lg flex-1 text-center">Event Photography</li>
                    <li class="bg-blue-600 text-white p-2 rounded-lg shadow-lg flex-1 text-center">Creative Direction</li>
                </ul>
            </div>
            <div class="awards">
                <h3 class="text-2xl font-bold mb-0">Awards & Accomplishments</h3>
                <ul class="space-y-0">
                    <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold">Best Wedding Photographer - 2021</h4>
                        <p class="text-gray-400">Awarded by XYZ Photography Association</p>
                    </li>
                    <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold">Photography of the Year - 2020</h4>
                        <p class="text-gray-400">Winner at ABC Photography Awards</p>
                    </li>
                    <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                        <h4 class="text-xl font-bold">Top 10 Portrait Photographers</h4>
                        <p class="text-gray-400">Featured in Portrait Magazine, 2019</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>© 2025 Timeless Memories. All Rights Reserved.</p>
        </div>
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