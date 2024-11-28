<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-gray-50">
    <!-- Header/Profile Section -->
    <header class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-500 to-purple-600">
        <div class="text-center text-white" data-aos="fade-up">
            <img src="your-photo.jpg" alt="Profile" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-white hover:scale-110 transition-transform duration-300">
            <h1 class="text-4xl font-bold mb-2">John Doe</h1>
            <p class="text-xl mb-4">Full Stack Developer</p>
            <div class="flex justify-center gap-4">
                <a href="#" class="bg-white text-indigo-600 px-6 py-2 rounded-full hover:bg-indigo-100 transition-colors duration-300">Contact Me</a>
                <a href="#" class="border-2 border-white text-white px-6 py-2 rounded-full hover:bg-white hover:text-indigo-600 transition-colors duration-300">Download CV</a>
            </div>
        </div>
    </header>

    <!-- Skills Section -->
    <section class="py-20 px-4" id="skills">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800" data-aos="fade-up">My Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-indigo-600 text-4xl mb-4">💻</div>
                    <h3 class="text-xl font-bold mb-2">Frontend Development</h3>
                    <p class="text-gray-600">HTML, CSS, JavaScript, React, Vue.js, Tailwind CSS</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-indigo-600 text-4xl mb-4">⚙️</div>
                    <h3 class="text-xl font-bold mb-2">Backend Development</h3>
                    <p class="text-gray-600">Node.js, Python, PHP, MySQL, MongoDB</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-indigo-600 text-4xl mb-4">🎨</div>
                    <h3 class="text-xl font-bold mb-2">UI/UX Design</h3>
                    <p class="text-gray-600">Figma, Adobe XD, Photoshop</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-20 px-4 bg-gray-100" id="projects">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800" data-aos="fade-up">My Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up">
                    <img src="project1.jpg" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">E-Commerce Website</h3>
                        <p class="text-gray-600 mb-4">A full-featured online store with payment integration</p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">View Project →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="100">
                    <img src="project2.jpg" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Social Media App</h3>
                        <p class="text-gray-600 mb-4">Mobile-first social networking platform</p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">View Project →</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" data-aos="fade-up" data-aos-delay="200">
                    <img src="project3.jpg" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Portfolio Website</h3>
                        <p class="text-gray-600 mb-4">Responsive portfolio template design</p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">View Project →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold mb-2">Let's Connect</h3>
                    <p class="text-gray-400">Feel free to reach out for collaborations or just a friendly hello</p>
                </div>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-indigo-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="#" class="hover:text-indigo-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="hover:text-indigo-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-400">
                <p>&copy; 2024 John Doe. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>
