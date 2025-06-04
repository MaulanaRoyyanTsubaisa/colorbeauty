  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed - Colour by Utie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-white font-sans">
    <!-- Navbar -->
    <nav class="w-full bg-white py-3 px-0 flex items-center justify-between fixed top-0 left-0 z-50 border-b border-gray-100">
        <div class="container mx-auto px-4 relative">
            <!-- Mobile Header: X & Logo -->
            <div class="flex w-full items-center justify-between md:hidden">
                <button id="navToggle" class="text-3xl text-gray-800 focus:outline-none transition-transform duration-300">
                    <i id="navIcon" class="fas fa-bars transition-transform duration-300"></i>
                </button>
                <a href="index.php" class="mx-auto">
                    <img src="assets/images/logo.png" alt="colour by utie" class="h-12 w-auto logo-shadow" />
                </a>
                <div class="w-8"></div>
            </div>
            <!-- Desktop Logo & Menu -->
            <div class="hidden md:flex items-center justify-between w-full">
                <a href="index.php" class="flex items-center select-none mx-auto md:ml-16 md:mr-8">
                    <img src="assets/images/logo.png" alt="colour by utie" class="h-16 w-auto logo-shadow" />
                </a>
                <ul class="flex space-x-6 text-xs font-medium mr-4">
                    <li><a href="analyze.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Analyze Me</a></li>
                    <li><a href="steps.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Step by Step</a></li>
                    <li><a href="our-story.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Our Story</a></li>
                    <li><a href="feed.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4 underline">Feed</a></li>
                </ul>
            </div>
            <!-- Mobile Menu -->
            <ul id="mobileMenu" class="fixed top-16 left-0 w-full bg-white shadow-md flex flex-col items-end space-y-4 text-base font-medium py-6 px-8 z-50 hidden md:hidden text-right transition-all duration-500 opacity-0 translate-x-8 pointer-events-none">
                <li><a href="analyze.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Analyze Me</a></li>
                <li><a href="steps.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Step by Step</a></li>
                <li><a href="our-story.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Our Story</a></li>
                <li><a href="feed.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4 underline">Feed</a></li>
            </ul>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="w-full bg-[#fbb8ad] py-16 md:py-24 flex flex-col items-center">
      <div class="flex flex-col md:flex-row items-end justify-center gap-8">
        <!-- Arch 1 -->
<div class="w-64 h-96 overflow-hidden" style="clip-path: path('M0 300 L0 100 A100 100 0 0 1 200 100 L200 300 Z');">   
          <img src="assets/images/feed1.jpg" alt="Feed 1" class="w-full h-full object-cover" />
        </div>
        <!-- Arch 2 -->
<div class="w-64 h-96 overflow-hidden" style="clip-path: path('M0 300 L0 100 A100 100 0 0 1 200 100 L200 300 Z');">   
          <img src="assets/images/feed2.jpg" alt="Feed 2" class="w-full h-full object-cover" />
        </div>
        <!-- Arch 3 -->
<div class="w-64 h-96 overflow-hidden" style="clip-path: path('M0 300 L0 100 A100 100 0 0 1 200 100 L200 300 Z');">   
          <img src="assets/images/feed3.jpg" alt="Feed 3" class="w-full h-full object-cover" />
        </div>
      </div>
      <h2 class="text-3xl md:text-5xl font-bold text-[#d45a2a] text-center mt-8">Colourful story to te  ll</h2>
    </section>
    <!-- Feed Grid Section -->
    <section class="w-full bg-white py-12">
      <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <!-- Feed Item 1 -->
          <div>
            <img src="assets/images/feed1.jpg" alt="Embracing Your True Colours" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">Embracing Your True Colours</div>
            <div class="text-xs text-gray-500 mb-1">Personality</div>
            <div class="text-xs text-gray-700">Ayu Saraswati</div>
            <div class="text-xs text-gray-400">6/3/2024 · 2 min read</div>
          </div>
          <!-- Feed Item 2 -->
          <div>
            <img src="assets/images/feed2.jpg" alt="Celebrate Vibrant Colours" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">Celebrate Vibrant Colours</div>
            <div class="text-xs text-gray-500 mb-1">Style & Choice</div>
            <div class="text-xs text-gray-700">Putri Pratiwi</div>
            <div class="text-xs text-gray-400">6/3/2024 · 2 min read</div>
          </div>
          <!-- Feed Item 3 -->
          <div>
            <img src="assets/images/feed3.jpg" alt="Makeup Mastery" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">Makeup Mastery</div>
            <div class="text-xs text-gray-500 mb-1">Makeup Tutorial</div>
            <div class="text-xs text-gray-700">Ayu Saraswati</div>
            <div class="text-xs text-gray-400">6/3/2024 · 2 min read</div>
          </div>
          <!-- Feed Item 4 -->
          <div>
            <img src="assets/images/feed4.jpg" alt="Essence Beyond Fashion" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">Essence Beyond Fashion</div>
            <div class="text-xs text-gray-500 mb-1">Style & Choices</div>
            <div class="text-xs text-gray-700">Putri Pratiwi</div>
            <div class="text-xs text-gray-400">6/1/2024 · 2 min read</div>
          </div>
          <!-- Feed Item 5 -->
          <div>
            <img src="assets/images/feed5.jpg" alt="True Colour Empowerment" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">True Colour Empowerment</div>
            <div class="text-xs text-gray-500 mb-1">Self Improvement</div>
            <div class="text-xs text-gray-700">Canny Sutanto</div>
            <div class="text-xs text-gray-400">6/1/2024 · 2 min read</div>
          </div>
          <!-- Feed Item 6 -->
          <div>
            <img src="assets/images/feed6.jpg" alt="Soulful Colour Connection" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">Soulful Colour Connection</div>
            <div class="text-xs text-gray-500 mb-1">Fashion Tips</div>
            <div class="text-xs text-gray-700">Canny Sutanto</div>
            <div class="text-xs text-gray-400">6/1/2024 · 2 min read</div>
          </div>
          <!-- Feed Item 7 -->
          <div>
            <img src="assets/images/feed7.jpg" alt="How to Dress up for Party" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">How to Dress up for Party</div>
            <div class="text-xs text-gray-500 mb-1">Daily Tips</div>
            <div class="text-xs text-gray-700">Canny Sutanto</div>
            <div class="text-xs text-gray-400">5/29/2024 · 3 min read</div>
          </div>
          <!-- Feed Item 8 -->
          <div>
            <img src="assets/images/feed8.jpg" alt="Your Colour, Your Life" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">Your Colour, Your Life</div>
            <div class="text-xs text-gray-500 mb-1">Self Improvement</div>
            <div class="text-xs text-gray-700">Putri Pratiwi</div>
            <div class="text-xs text-gray-400">3/29/2021 · 3 min read</div>
          </div>
          <!-- Feed Item 9 -->
          <div>
            <img src="assets/images/feed9.jpg" alt="Colours of Friendship" class="w-full h-48 object-cover mb-2" />
            <div class="font-bold text-base md:text-lg mb-1">Colours of Friendship</div>
            <div class="text-xs text-gray-500 mb-1">Relationship</div>
            <div class="text-xs text-gray-700">Ayu Saraswati</div>
            <div class="text-xs text-gray-400">3/29/2021 · 3 min read</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Share Story / Contact Section -->
    <section class="w-full bg-[#fa6a48] py-16">
      <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-white text-center md:text-left">
          <!-- Share Story -->
          <div class="flex flex-col items-center md:items-start justify-center">
            <div class="text-2xl font-bold mb-2">Share your story to:</div>
            <a href="mailto:story@colourbyutie.com" class="font-bold text-lg md:text-xl underline">story@colourbyutie.com</a>
          </div>
          <!-- Address -->
          <div class="flex flex-col items-center md:items-start justify-center">
            <div class="font-bold mb-1">Address</div>
            <div>Renon, Denpasar Selatan<br>Kota Denpasar - Bali 80239</div>
          </div>
          <!-- Contacts -->
          <div class="flex flex-col items-center md:items-start justify-center">
            <div class="font-bold mb-1">Contacts</div>
            <a href="tel:+62811120645" class="block">+62 811 120 645</a>
            <a href="mailto:hello@colourbyutie.com" class="block">hello@colourbyutie.com</a>
          </div>
        </div>
      </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: "ease-in-out",
            once: true
        });
    </script>
    <script>
        // Mobile nav toggle with icon animation & menu slide/fade
        const navToggle = document.getElementById('navToggle');
        const navIcon = document.getElementById('navIcon');
        const mobileMenu = document.getElementById('mobileMenu');
        navToggle && navToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                navIcon.classList.remove('fa-xmark', 'rotate-90');
                navIcon.classList.add('fa-bars');
                // Hide animation
                mobileMenu.classList.remove('opacity-100', 'translate-x-0', 'pointer-events-auto');
                mobileMenu.classList.add('opacity-0', 'translate-x-8', 'pointer-events-none');
            } else {
                navIcon.classList.remove('fa-bars');
                navIcon.classList.add('fa-xmark', 'rotate-90');
                // Show animation
                mobileMenu.classList.remove('opacity-0', 'translate-x-8', 'pointer-events-none');
                mobileMenu.classList.add('opacity-100', 'translate-x-0', 'pointer-events-auto');
            }
        });
        // Close mobile menu on click outside
        document.addEventListener('click', (e) => {
            if (!navToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.add('hidden');
                navIcon.classList.remove('fa-xmark', 'rotate-90');
                navIcon.classList.add('fa-bars');
                // Hide animation
                mobileMenu.classList.remove('opacity-100', 'translate-x-0', 'pointer-events-auto');
                mobileMenu.classList.add('opacity-0', 'translate-x-8', 'pointer-events-none');
            }
        });
    </script>
</body>
</html> 