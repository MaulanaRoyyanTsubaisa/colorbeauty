<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pak Nazar - Step by Step</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2c3e50',
                        secondary: '#e74c3c',
                        hero: '#faa53d',
                        logo: '#e74c3c',
                        backgroundLight: '#e0e4e3',
                    },
                    fontFamily: {
                        logo: ['Pacifico', 'cursive'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body class="font-sans overflow-x-hidden">
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
                    <li><a href="steps.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4 underline">Step by Step</a></li>
                    <li><a href="our-story.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Our Story</a></li>
                    <li><a href="feed.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Feed</a></li>
                </ul>
            </div>
            <!-- Mobile Menu -->
            <ul id="mobileMenu" class="fixed top-16 left-0 w-full bg-white shadow-md flex flex-col items-end space-y-4 text-base font-medium py-6 px-8 z-50 hidden md:hidden text-right transition-all duration-500 opacity-0 translate-x-8 pointer-events-none">
                <li><a href="analyze.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Analyze Me</a></li>
                <li><a href="steps.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4 underline">Step by Step</a></li>
                <li><a href="our-story.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Our Story</a></li>
                <li><a href="feed.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Feed</a></li>
            </ul>
        </div>
    </nav>

    <!-- Step by Step Section -->
    <!-- Hero Section -->
    <section class="w-full min-h-[400px] md:min-h-[700px] flex items-center justify-center relative pt-32 pb-8 transition-all duration-500 ease-in-out" data-aos="fade-in">
        <img src="assets/images/steps-hero.jpg" alt="Analyze Hero" class="absolute inset-0 w-full h-full object-cover object-center z-0 transition-all duration-500 ease-in-out" />
        <div class="absolute inset-0 bg-black/10 z-10 transition-all duration-500 ease-in-out"></div>
        <div class="container mx-auto px-4 relative z-20 flex flex-col items-center justify-center h-full transition-all duration-500 ease-in-out">

        </div>
    </section>

    <!-- Section 1: Self Expression -->
    <section class="w-full min-h-[500px] bg-white flex items-center justify-center py-20 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 px-4 items-center md:px-8 lg:px-12">
            <!-- Kiri: Teks -->
            <div class="flex flex-col justify-center items-end w-full px-4 md:px-0">
                <div class="w-full max-w-xl">
                    <p class="text-sm md:text-base text-gray-500 uppercase tracking-widest mb-3 md:mb-4">WHAT WE STAND FOR</p>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4 md:mb-6 lg:mb-8 leading-tight">Self Expression</h2>
                    <p class="text-gray-700 text-sm md:text-base lg:text-lg leading-relaxed">
                        Colour is a powerful tool for self-expression in fashion and appearance, allowing individuals to convey their emotions, personality, and unique style. Engaging in personal colour practice enables people to explore and communicate their identity through their clothing and accessories. By choosing colours that resonate personally, individuals can express their unique selves, enhance their appearance, and make confident fashion statements.
                    </p>
                </div>
            </div>
            <!-- Kanan: Gambar -->
            <div class="flex justify-center items-center relative w-full">
                <div class="w-full max-w-xl flex justify-center items-center">
                    <div class="w-[300px] h-[300px] md:w-[420px] md:h-[420px] lg:w-[500px] lg:h-[500px] bg-transparent flex-shrink-0" style="clip-path: xywh(0 0 100% 100% round 0 40%);">
                        <img src="assets/images/self-expression.jpg" alt="Self Expression" class="w-full h-full object-cover" />

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Empowerment + Confidence -->
    <section class="w-full min-h-[500px] bg-[#f9cbc2] flex items-center justify-center py-20 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 px-4 items-center md:px-8 lg:px-12">
            <!-- Kiri: Gambar -->
            <div class="flex justify-center items-center relative w-full">
                <div class="w-full max-w-xl flex justify-center items-center">
                    <div class="w-[300px] h-[300px] md:w-[420px] md:h-[420px] lg:w-[500px] lg:h-[500px] bg-transparent flex-shrink-0" style="clip-path: xywh(0 0 100% 100% round 0 40%);">
                        <img src="assets/images/empowerment.jpg" alt="Empowerment + Confidence" class="w-full h-full object-cover" />
                   
                    </div>
                </div>
            </div>
            <!-- Kanan: Teks -->
            <div class="flex flex-col justify-center items-start w-full px-4 md:px-0">
                <div class="w-full max-w-xl">
                    <p class="text-xs md:text-sm lg:text-base text-gray-600 uppercase tracking-widest mb-2 md:mb-3 lg:mb-4">WHAT WE STAND FOR</p>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4 md:mb-6 lg:mb-8 leading-tight">Empowerment +<br>Confidence</h2>
                    <p class="text-gray-700 text-sm md:text-base lg:text-lg leading-relaxed">
                        Wearing colours that make us feel empowered and confident is particularly relevant in the realm of fashion. Colour plays a central role in defining personal style and making fashion statements. Engaging in personal colour practices empowers individuals to curate their wardrobe in alignment with their unique preferences and personality. By selecting colours that resonate with them, individuals can enhance their confidence and self-assurance in their fashion choices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Creativity + Innovation -->
    <section class="w-full min-h-[500px] bg-white flex items-center justify-center py-20 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 px-4 items-center md:px-8 lg:px-12">
            <!-- Kiri: Teks -->
            <div class="flex flex-col justify-center items-end w-full px-4 md:px-0">
                <div class="w-full max-w-xl">
                    <p class="text-sm md:text-base text-gray-500 uppercase tracking-widest mb-3 md:mb-4">WHAT WE STAND FOR</p>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4 md:mb-6 lg:mb-8 leading-tight">Creativity +<br>Innovation</h2>
                    <p class="text-gray-700 text-sm md:text-base lg:text-lg leading-relaxed">
                        Experimenting with colour in fashion fosters creativity and innovation. Personal colour practice encourages individuals to explore unique and unconventional colour combinations in their clothing and accessories. This experimentation helps push fashion boundaries, leading to original and trend-setting styles. By embracing diverse colours, individuals can develop a distinctive fashion sense that reflects their creativity and individuality.
                    </p>
                </div>
            </div>
            <!-- Kanan: Gambar dengan clip-path polygon dan bulatan nomor -->
            <div class="flex justify-center items-center relative w-full">
                <div class="w-full max-w-xl flex justify-center items-center">
                    <div class="w-[420px] h-[420px] md:w-[500px] md:h-[500px] bg-transparent flex-shrink-0 relative" style="clip-path: polygon(0 0, 15% 100%, 100% 100%, 85% 0);">
                        <img src="assets/images/creativity.jpg" alt="Creativity + Innovation" class=" w-full h-full object-cover" />
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Step-by-step Colour Analysis Gallery -->
    <section class="w-full bg-[#cbe9de] py-32 md:py-20 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-6xl mx-auto w-full flex flex-col items-center justify-center px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 md:mb-2 transition-all duration-500 ease-in-out" data-aos="fade-up">Step-by-step Colour Analysis</h2>
            <p class="text-center  text-lg text-gray-700 mb-20 md:mb-10 max-w-2xl mx-auto transition-all duration-500 ease-in-out" data-aos="fade-up">Unlocking your personal colour spectrum is as simple as taking a few easy steps.</p>
            <!-- Mobile: Stack vertically -->
            <div class="space-y-48 md:hidden">
                <!-- Gambar 1 -->
                <div class="w-full max-w-[400px] mx-auto relative mt-20">
                    <div class="w-[150px] h-[220px] md:w-[180px] md:h-[260px] bg-gray-200 overflow-hidden transition-all duration-500 ease-in-out" style="clip-path: path('M200 50V0L100 0V33.98C99.99 6.375 77.6 0 50 0H0V100H34C6.38 100 0 122.39 0 150V200H100V166C100 193.61 122.39 200 150 200H200V100H166.02C193.63 99.99 200 77.6 200 50Z'); transform: scale(2.0); transform-origin: center;" data-aos="fade-up">
                        <img src="assets/images/step1.jpg" alt="Step 1" class="w-full h-full object-cover transition-all duration-500 ease-in-out" />
                    </div>
                 
                </div>
                <!-- Gambar 2 -->
                <div class="w-full max-w-[400px] mx-auto relative mt-20">
                    <div class="w-[150px] h-[220px] md:w-[180px] md:h-[260px] bg-gray-200 overflow-hidden transition-all duration-500 ease-in-out" style="clip-path: path('M200 50V0L100 0V33.98C99.99 6.375 77.6 0 50 0H0V100H34C6.38 100 0 122.39 0 150V200H100V166C100 193.61 122.39 200 150 200H200V100H166.02C193.63 99.99 200 77.6 200 50Z'); transform: scale(2.0); transform-origin: center;" data-aos="fade-up">
                        <img src="assets/images/step2.jpg" alt="Step 2" class="w-full h-full object-cover transition-all duration-500 ease-in-out" />
                    </div>
             
                </div>
                <!-- Gambar 3 -->
                <div class="w-full max-w-[400px] mx-auto relative mt-20">
                    <div class="w-[150px] h-[220px] md:w-[180px] md:h-[260px] bg-gray-200 overflow-hidden transition-all duration-500 ease-in-out" style="clip-path: path('M200 50V0L100 0V33.98C99.99 6.375 77.6 0 50 0H0V100H34C6.38 100 0 122.39 0 150V200H100V166C100 193.61 122.39 200 150 200H200V100H166.02C193.63 99.99 200 77.6 200 50Z'); transform: scale(2.0); transform-origin: center;" data-aos="fade-up">
                        <img src="assets/images/step3.jpg" alt="Step 3" class="w-full h-full object-cover transition-all duration-500 ease-in-out" />
                    </div>
         
                </div>
                    </div>
                   
                </div>
            </div>
            <!-- Desktop: Horizontal layout -->
            <div class="hidden md:flex flex-row flex-wrap justify-center items-end max-w-fit mx-auto mt-12" style="gap: 100px;">
                <!-- Gambar 1 -->
                <div class="w-[120px] h-[180px] md:w-[180px] md:h-[260px] bg-gray-200 overflow-hidden transition-all duration-500 ease-in-out" style="clip-path: path('M200 50V0L100 0V33.98C99.99 6.375 77.6 0 50 0H0V100H34C6.38 100 0 122.39 0 150V200H100V166C100 193.61 122.39 200 150 200H200V100H166.02C193.63 99.99 200 77.6 200 50Z'); transform: scale(1.5); transform-origin: top left;" data-aos="fade-up">
                    <img src="assets/images/step1.jpg" alt="Step 1" class="w-full h-full object-cover transition-all duration-500 ease-in-out" />
                </div>
                <!-- Gambar 2 -->
                <div class="w-[120px] h-[180px] md:w-[180px] md:h-[260px] bg-gray-200 overflow-hidden transition-all duration-500 ease-in-out" style="clip-path: path('M200 50V0L100 0V33.98C99.99 6.375 77.6 0 50 0H0V100H34C6.38 100 0 122.39 0 150V200H100V166C100 193.61 122.39 200 150 200H200V100H166.02C193.63 99.99 200 77.6 200 50Z'); transform: scale(1.5); transform-origin: top left;" data-aos="fade-up">
                    <img src="assets/images/step2.jpg" alt="Step 2" class="w-full h-full object-cover transition-all duration-500 ease-in-out" />
                </div>
                <!-- Gambar 3 -->
                <div class="w-[120px] h-[180px] md:w-[180px] md:h-[260px] bg-gray-200 overflow-hidden transition-all duration-500 ease-in-out" style="clip-path: path('M200 50V0L100 0V33.98C99.99 6.375 77.6 0 50 0H0V100H34C6.38 100 0 122.39 0 150V200H100V166C100 193.61 122.39 200 150 200H200V100H166.02C193.63 99.99 200 77.6 200 50Z'); transform: scale(1.5); transform-origin: top left;" data-aos="fade-up">
                    <img src="assets/images/step3.jpg" alt="Step 3" class="w-full h-full object-cover transition-all duration-500 ease-in-out" />
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Step-by-step Colour Analysis Details -->
    <section class="w-full bg-white py-20 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-x-16 md:gap-y-10">
                <!-- 1 -->
                <div>
                    <h3 class="font-bold text-lg mb-2">Initial Consultation</h3>
                    <p class="mb-2 text-gray-700">The personal colour analysis begins by discussing the individual's goals and preferences, understanding their current fashion choices, and addressing any concerns they have about colour.</p>
                </div>
                <!-- 2 -->
                <div>
                    <h3 class="font-bold text-lg mb-2">Seasonal Categorization</h3>
                    <p class="mb-2 text-gray-700">Based on the draping results, the consultant determines the individual's seasonal palette, typically categorized into Winter, Spring, Summer, or Autumn, each with its own set of colours. Some systems also use additional categories or subcategories, such as Light Spring or Deep Winter, for greater precision.</p>
                </div>
                <!-- 3 -->
                <div>
                    <h3 class="font-bold text-lg mb-2">Assessment of Natural Features</h3>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li><b>Skin Tone:</b> Identify the skin's undertone (warm, cool, or neutral). This is usually done by observing the skin under natural light or by using specific tests, such as looking at the veins on the wrist (blue or purple veins indicate cool undertones, green veins indicate warm undertones).</li>
                        <li><b>Hair Color:</b> Consider the natural colour of the hair, including any variations or highlights.</li>
                        <li><b>Eye Color:</b> Note the colour of the eyes, including any flecks or unique features.</li>
                    </ul>
                </div>
                <!-- 4 -->
                <div>
                    <h3 class="font-bold text-lg mb-2">Color Palette Selection</h3>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>Once the seasonal category is identified, the consultant provides a colour palette that includes the best shades for the individual.</li>
                        <li>This palette typically includes a range of colours for clothing, accessories, makeup, and even hair colour suggestions.</li>
                    </ul>
                </div>
                <!-- 5 -->
                <div>
                    <h3 class="font-bold text-lg mb-2">Draping Process</h3>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>The most crucial part of the analysis. The individual is seated in front of a mirror, typically in good natural light or under controlled lighting conditions.</li>
                        <li>Different coloured drapes (pieces of fabric) are placed around the individual's shoulders, one at a time. The goal is to observe how each colour reflects on the face, highlighting or detracting from the natural features.</li>
                        <li>The consultant will look for signs of enhancement (e.g., brighter eyes, more even skin tone) or detriment (e.g., shadows, dullness) as each colour is tested.</li>
                    </ul>
                </div>
                <!-- 6 -->
                <div>
                    <h3 class="font-bold text-lg mb-2">Application Guidance</h3>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>Offer advice on how to incorporate the recommended colours into the individual's wardrobe.</li>
                        <li>Provide tips on mixing and matching colours, selecting key pieces, and building a cohesive wardrobe.</li>
                        <li>Discuss makeup application and the best shades for eyeshadow, lipstick, blush, etc.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Get in touch + Maps -->
    <section class="w-full bg-[#cbe9de] py-20 transition-all duration-500 ease-in-out" data-aos="fade-up">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-4">
            <!-- Kontak -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-8">Get in touch</h2>
                <div class="mb-6">
                    <h3 class="font-bold mb-1">Address</h3>
                    <p>Renon, Denpasar Selatan<br>Kota Denpasar - Bali 80239</p>
                </div>
                <div class="mb-6">
                    <h3 class="font-bold mb-1">Contacts</h3>
                    <a href="tel:+62811120645" class="block hover:underline">+62 811 120 645</a>
                    <a href="mailto:hello@colourbyutie.com" class="block hover:underline">hello@colourbyutie.com</a>
                </div>
                <div class="flex space-x-4 mt-6 text-2xl">
                    <a href="#" class="hover:text-gray-700"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="hover:text-gray-700"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-gray-700"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- Maps -->
            <div class="flex justify-center items-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126908.2820199946!2d115.242184!3d-8.686587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24054f68297cb%3A0x438fe83a901c028b!2sRenon%2C%20Denpasar%20Selatan%2C%20Denpasar%20City%2C%20Bali%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1718250000000!5m2!1sen!2sid"
                    width="100%" height="350" style="border:0; border-radius:16px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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