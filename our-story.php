<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story - Colour by Utie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .logo-shadow {
            filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.04));
        }
    </style>
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
                    <li><a href="analyze.php" class="text-gray-800 hover:text-logo transition-colors">Analyze Me</a></li>
                    <li><a href="steps.php" class="text-gray-800 hover:text-logo transition-colors">Step by Step</a></li>
                    <li><a href="our-story.php" class="text-gray-800 hover:text-logo transition-colors underline">Our Story</a></li>
                    <li><a href="feed.php" class="text-gray-800 hover:text-logo transition-colors">Feed</a></li>
                </ul>
            </div>
            <!-- Mobile Menu -->
            <ul id="mobileMenu" class="fixed top-16 left-0 w-full bg-white shadow-md flex flex-col items-end space-y-4 text-base font-medium py-6 px-8 z-50 hidden md:hidden text-right transition-all duration-500 opacity-0 translate-x-8 pointer-events-none">
                <li><a href="analyze.php" class="block text-gray-800 hover:text-logo transition-colors">Analyze Me</a></li>
                <li><a href="steps.php" class="block text-gray-800 hover:text-logo transition-colors">Step by Step</a></li>
                <li><a href="our-story.php" class="block text-gray-800 hover:text-logo transition-colors underline">Our Story</a></li>
                <li><a href="feed.php" class="block text-gray-800 hover:text-logo transition-colors">Feed</a></li>
            </ul>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="w-full min-h-[400px] md:min-h-[700px] flex items-center justify-center relative pt-32 pb-8 transition-all duration-500 ease-in-out" data-aos="fade-in">
        <img src="assets/images/our-story-hero.jpg" alt="Analyze Hero" class="absolute inset-0 w-full h-full object-cover object-center z-0 transition-all duration-500 ease-in-out" />
        <div class="absolute inset-0 bg-black/10 z-10 transition-all duration-500 ease-in-out"></div>
        <div class="container mx-auto px-4 relative z-20 flex flex-col items-center justify-center h-full transition-all duration-500 ease-in-out">

        </div>
    </section>
    <!-- Story Section -->
    <section class="w-full bg-[#f5bc42] py-10 md:py-14 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-4">
            <!-- Foto Profil -->
            <div class="flex justify-center mb-8 md:mb-0">
                <img src="assets/images/profile.jpg" alt="Putri Pratiwi" class="w-85 h-85 object-cover rounded-none shadow-lg" />
            </div>
            <!-- Teks -->
            <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <h2 class="text-xl md:text-6xl font-bold text-white mb-4">The Story of<br>Colour by Utie</h2>
                <p class="text-white text-base md:text-lg leading-relaxed mb-2">
                    Putri Pratiwi's journey from a legal expert to an emerging personal colour analyst is a testament to her passion for helping people and her commitment to personal growth. Despite her success in the legal field, Putri felt a lingering desire to pursue something that resonated more deeply with her personal interests and creativity.
                </p>
                <p class="text-white text-base md:text-lg leading-relaxed">
                    Raised in Jakarta, Putri always felt a deep connection to Bali, the island of her origin. During visits to South Korea and Japan, she discovered the transformative power of personal colour analysis. She was fascinated by how this service could profoundly impact an individual's appearance and self-confidence.
                </p>
            </div>
        </div>
    </section>
    <!-- Korean-Japan Inspired Section -->
    <section class="w-full bg-white py-16 md:py-24 border-t border-[#f5bc42] transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-4">
            <!-- Kiri: Judul + Gambar -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <h2 class="text-xl md:text-5xl font-bold text-black leading-tight mb-8 md:mb-10 text-left">
                    Korean–Japan<br>
                    Inspired, Balinese<br>
                    Practices
                </h2>
                <div class="w-full max-w-xl aspect-[16/12] overflow-hidden mx-auto mb-4">
                    <img src="assets/images/korean-japan.jpg" alt="Korean Japan Practice" class="w-full h-full object-cover object-top scale-60 transition-transform" />
                </div>
            </div>
            <!-- Kanan: Teks -->
            <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <p class="text-base md:text-lg text-black leading-relaxed">
                    In South Korea and Japan, personal colour analysts were highly regarded for their expertise in helping individuals define their style preferences for clothing, hair colour, and makeup. This newfound knowledge sparked a revelation in Putri. She realized that understanding one's personal colours could lead to a more cohesive and polished look, boosting not only appearance but also self-esteem.<br><br>
                    Inspired by this discovery, she decided to delve deeper into the world of colour analysis. She embarked on an intensive learning journey, immersing herself in courses and training sessions to master the art of personal colour analysis.<br><br>
                    The more she learned, the more convinced she became of its potential to help people feel more confident and comfortable in their own skin. She envisioned bringing this valuable service back to Bali to enrich the lives of both the locals and tourists on her home island.
                </p>
            </div>
        </div>
    </section>
    <!-- Helping People Section -->
    <section class="w-full bg-[#a66300] py-16 md:py-24 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-4">
            <!-- Kiri: Gambar landscape kecil -->
            <div class="flex justify-center mb-8 md:mb-0">
                <div class="w-full max-w-2xl aspect-[16/20] overflow-hidden">
                    <img src="assets/images/helping-people.jpg" alt="Helping People" class="w-full h-full object-cover" />
                </div>
            </div>
            <!-- Kanan: Teks putih -->
            <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <h2 class="text-2xl md:text-4xl font-bold text-white mb-6">It's about<br>Helping People</h2>
                <p class="text-white text-base md:text-lg leading-relaxed">
                    Commonly known as 'Utie' to her friends and family, she named her business "Colour by Utie" to reflect her personal touch and dedication to her clients. She was determined to utilize her newfound expertise to help others understand their unique colour palettes and make informed choices about their appearance.<br><br>
                    She believed that by identifying the colours that best suited an individual's natural complexion, hair, and eye colour, she could help them enhance their overall look and feel more confident in their daily lives. She recently opened her practice and is in the early stages of what promises to be a rewarding and impactful career. Despite being new to the field, her practice quickly gained recognition for its personalized approach and transformative results.
                </p>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->
    <section class="w-full bg-white py-16 md:py-24 border-t border-[#a66300] transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-3xl mx-auto flex flex-col items-center justify-center px-4">
            <!-- Bintang -->
            <div class="flex justify-center mb-4 text-xl text-black">★★★★★</div>
            <!-- Kutipan -->
            <blockquote class="text-center text-lg md:text-2xl text-black font-normal max-w-2xl mx-auto mb-8">
                "When you dress authentically to reflect the person I see in your hair, eyes, and skin, you begin to connect with your unique energy and unlock hidden potential."
            </blockquote>
            <!-- Foto profil & nama -->
            <img src="assets/images/profile.jpg" alt="Putri Pratiwi" class="w-16 h-16 rounded-full object-cover mx-auto mb-2" />
            <div class="text-center text-base text-gray-800 font-medium">Putri Pratiwi</div>
        </div>
    </section>
    <!-- Find Your True Colours Section -->
    <section class="w-full bg-[#d6f5e3] py-16 md:py-24 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-5xl mx-auto flex flex-col items-center justify-center px-4">
            <!-- Judul -->
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-4">
                Find Your True <span class="text-[#fff]">Colours</span>
            </h2>
            <!-- Deskripsi -->
            <div class="text-center text-base md:text-lg text-black mb-12 max-w-2xl mx-auto">
                Your true colours reveal your true self. Dress in harmony with who you are and access newfound energy and creativity. 🌸🦋✨ <span class="text-[#0975c2]">#BeYourself #ColourConfidence</span>"
            </div>
            <!-- Foto grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">
                <img src="assets/images/colour1.jpg" alt="Colour 1" class="w-full aspect-square object-cover rounded-none" />
                <img src="assets/images/colour2.jpg" alt="Colour 2" class="w-full aspect-square object-cover rounded-none" />
                <img src="assets/images/colour3.jpg" alt="Colour 3" class="w-full aspect-square object-cover rounded-none" />
            </div>
        </div>
    </section>
    <!-- Contact & Email Section -->
    <section class="w-full bg-white py-16 md:py-24 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-start px-4">
            <!-- Kiri: Address & Contacts sejajar, sosmed di bawah -->
            <div>
                <div class="mb-6 flex flex-col md:flex-row gap-12">
                    <div>
                        <h3 class="font-bold text-lg mb-1">Address</h3>
                        <div class="text-base text-black">Renon, Denpasar Selatan<br>Kota Denpasar - Bali 80239</div>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-1">Contacts</h3>
                        <a href="tel:+62811120645" class="block text-base text-black hover:underline">+62 811 120 645</a>
                        <a href="mailto:hello@colourbyutie.com" class="block text-base text-black hover:underline">hello@colourbyutie.com</a>
                    </div>
                </div>
                <div class="flex space-x-6 mt-6 text-2xl">
                    <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-black hover:text-gray-700"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <!-- Kanan: Form Email -->
            <div>
                <h3 class="font-bold text-lg mb-4">Submit your email to get our company profile</h3>
                <form action="#" method="POST" class="w-full max-w-md flex flex-col space-y-4">
                    <div>
                        <label class="block mb-1">Email address</label>
                        <input type="email" name="email" placeholder="Your email address" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                    </div>
                    <button type="submit" class="w-32 bg-black text-white font-bold py-2 px-4 uppercase tracking-wider hover:bg-white hover:text-black border-2 border-black transition-colors">Submit</button>
                </form>
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