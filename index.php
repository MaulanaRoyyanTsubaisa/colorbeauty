<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pak Nazar - Color Analysis</title>
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

<body class="font-sans" style="overflow-x:hidden;">
    <nav class="w-full bg-white py-3 px-0 flex items-center justify-between fixed top-0 left-0 z-50 border-b border-gray-100">
        <div class="container mx-auto px-4 relative">
            <div class="flex w-full items-center justify-between">
                <!-- Mobile Menu Button - Left side -->
                <button id="navToggle" class="md:hidden text-3xl text-gray-800 focus:outline-none transition-transform duration-300">
                    <i id="navIcon" class="fas fa-bars transition-transform duration-300"></i>
                </button>

                <a href="index.php" class="mx-auto md:hidden">
                    <img src="assets/images/logo.png" alt="colour by utie" class="h-12 w-auto logo-shadow" />
                </a>
                <!-- Desktop Menu - Right aligned -->
                <div class="hidden md:flex items-center justify-between w-full">
                    <a href="index.php" class="flex items-center select-none mx-auto md:ml-16 md:mr-8">
                        <img src="assets/images/logo.png" alt="colour by utie" class="h-16 w-auto logo-shadow" />
                    </a>

                    <ul class="hidden md:flex space-x-6 text-xs font-medium ml-auto">
                        <li><a href="analyze.php" class="text-gray-800 hover:text-logo transition-colors  hover:underline underline-offset-4">Analyze Me</a></li>
                        <li><a href="steps.php" class="text-gray-800 hover:text-logo transition-colors  hover:underline underline-offset-4">Step by Step</a></li>
                        <li><a href="our-story.php" class="text-gray-800 hover:text-logo transition-colors  hover:underline underline-offset-4">Our Story</a></li>
                        <li><a href="feed.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Feed</a></li>
                    </ul>
                </div>

                <!-- Spacer for mobile to balance the burger button -->
                <div class="md:hidden w-8"></div>
            </div>

            <!-- Mobile Menu - Right aligned -->
            <ul id="mobileMenu" class="absolute top-full left-0 w-full bg-white shadow-md flex flex-col items-end space-y-4 text-base font-medium py-6 px-8 z-50 hidden md:hidden">
                <li><a href="analyze.php" class="block text-gray-800 hover:text-logo transition-colors">Analyze Me</a></li>
                <li><a href="steps.php" class="block text-gray-800 hover:text-logo transition-colors">Step by Step</a></li>
                <li><a href="our-story.php" class="block text-gray-800 hover:text-logo transition-colors">Our Story</a></li>
                <li><a href="feed.php" class="block text-gray-800 hover:text-logo transition-colors">Feed</a></li>
            </ul>
        </div>
    </nav>
    <div class="h-7 md:h-[4.5rem]"></div>

    <section class="w-full min-h-[520px] md:min-h-[700px] flex items-center justify-center bg-[#faa53d] pt-8 pb-8 md:pt-0 md:pb-0" data-aos="fade-up">
        <div class="w-full flex flex-col md:flex-row items-center md:items-stretch justify-between md:justify-center md:gap-0 gap-4 md:gap-0 max-w-[1600px] mx-auto">
            <div class="flex-1 flex flex-col justify-center items-start md:items-start max-w-full md:max-w-2xl w-full px-3 sm:px-4 md:px-0 md:pl-32 md:pr-12 md:py-0 md:justify-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="text-white text-2xl sm:text-3xl md:text-6xl lg:text-7xl font-semibold mb-6 md:mb-12 leading-tight text-left md:text-left" style="font-family: inherit;">"If you know your colours, then<br>you're one step closer to know<br>yourself."</h1>
                <a href="#book" class="mt-2 sm:mt-4 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[#faa53d] font-bold uppercase tracking-wider rounded-none shadow hover:bg-gray-100 transition-all text-sm sm:text-base md:text-lg md:mt-8 md:px-8 md:py-4 md:text-xl md:w-auto" data-aos="fade-up" data-aos-delay="200">Book Now</a>
            </div>
            <div class="flex-1 flex justify-center items-end relative w-full md:w-1/2 md:items-center md:justify-center md:pr-32" data-aos="fade-up" data-aos-delay="100">
                <div class="hidden md:flex w-full h-full items-center justify-center">
                    <div class="relative w-[600px] h-[600px] max-w-[700px] max-h-[700px] bg-[#fbb040] rounded-t-full rounded-b-none flex items-end justify-center overflow-hidden">
                        <img src="assets/images/hero-model.png" alt="Model" class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[650px] h-auto object-cover cursor-pointer hero-modal-img" style="background:transparent;" />
                    </div>
                </div>
                <div class="w-[220px] h-[220px] sm:w-[260px] sm:h-[260px] md:hidden bg-[#fbb040] rounded-t-full rounded-b-none flex items-end justify-center overflow-hidden">
                    <img src="assets/images/hero-model.png" alt="Model" class="w-[2200px] sm:w-[180px] h-auto object-cover cursor-pointer hero-modal-img" style="background:transparent;" />
                </div>
            </div>
        </div>
    </section>

    <section class="w-full relative overflow-hidden" data-aos="fade-up">
        <div class="relative w-full flex flex-col items-center justify-center h-[250px] md:h-[350px] lg:h-[550px]">
            <button id="sliderPrev" class="absolute left-4 z-20 bg-white/70 hover:bg-white rounded-full p-2 text-3xl text-gray-800 flex items-center justify-center focus:outline-none" data-aos="fade-up" data-aos-delay="100">
                <span>&lt;</span>
            </button>
            <div class="w-full h-full flex items-center justify-center">
                <img id="sliderImage" src="assets/images/slider1.jpg" alt="Slider" class="object-cover w-full h-full max-w-full transition-all duration-700" />
            </div>
            <button id="sliderNext" class="absolute right-4 z-20 bg-white/70 hover:bg-white rounded-full p-2 text-3xl text-gray-800 flex items-center justify-center focus:outline-none" data-aos="fade-up" data-aos-delay="100">
                <span>&gt;</span>
            </button>
        </div>
        <div class="flex justify-center mt-4 gap-2" data-aos="fade-up" data-aos-delay="150">
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-400 inline-block cursor-pointer" data-index="0"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="1"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="2"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="3"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="4"></span>
        </div>
    </section>

    <section class="w-full py-10 bg-white" data-aos="fade-up" id="steps">
        <div class="max-w-5xl mx-auto px-3 sm:px-4">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-center mb-4 sm:mb-6" data-aos="fade-up" data-aos-delay="100">Discovering your true colours is a path to discovering<br class="hidden md:inline"> your true self</h2>
            <p class="text-center text-base sm:text-lg text-gray-700 mb-8 sm:mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">When you dress authentically to reflect the person one sees in your hair, eyes, and skin, you begin to connect with your unique energy and unlock hidden potential. What could be more empowering than that?</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-8">
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/feature1.jpg" alt="Empower You" class="w-full max-w-xs h-auto aspect-square object-cover rounded-none mb-4 sm:mb-6" />
                    <h3 class="text-xl sm:text-2xl font-bold mb-2 text-center">Empower You</h3>
                    <p class="text-center text-gray-700">Expressing our true selves—through our colours, attire, and belongings—empowers us.</p>
                </div>
                <div class="hidden md:flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/feature2.jpg" alt="Genuine Self" class="w-full max-w-xs h-auto aspect-square object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Genuine Self</h3>
                    <p class="text-center text-gray-700">Showing your genuine self is the surest path to attracting the positive experiences you deserve.</p>
                </div>
                <div class="hidden md:flex flex-col items-center" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/feature3.jpg" alt="Reshape Outlook" class="w-full max-w-xs h-auto aspect-square object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Reshape Outlook</h3>
                    <p class="text-center text-gray-700">Being true to yourself has the power to profoundly reshape your self-perception and your outlook.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-10 bg-[#cbe9de]" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-3 sm:px-4">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-center mb-4 sm:mb-6" data-aos="fade-up" data-aos-delay="100">Find your genuine colours and style</h2>
            <p class="text-center text-base sm:text-lg text-gray-700 mb-8 sm:mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">When aligned with your chosen colours, attire, and possessions, others can easily identify you, enhancing your attractiveness, and leaving you feeling more vibrant, self-assured, and focused.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-8">
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/service1.jpg" alt="Analysis for One" class="w-full max-w-xs h-auto aspect-square object-cover rounded-none mb-4 sm:mb-6" />
                    <h3 class="text-xl sm:text-2xl font-bold mb-2 text-center">Analysis for One</h3>
                    <a href="#book" class="mb-4 px-6 py-2 bg-black text-white font-bold uppercase tracking-wider text-base hover:bg-white hover:text-black border-2 border-black transition-colors text-center">BOOK</a>
                    <p class="text-center text-gray-800">Find your skin tone, eye colour, and hair colour assessment, along with warm/cool tone analysis and 12-tone seasonal analysis, using detailed and comprehensive drapes in a <span class="font-bold">90-minute session.</span></p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/service2.jpg" alt="Analysis for Two" class="w-full max-w-xs h-auto aspect-square object-cover rounded-none mb-4 sm:mb-6" />
                    <h3 class="text-xl sm:text-2xl font-bold mb-2 text-center">Analysis for Two</h3>
                    <a href="#book" class="mb-4 px-6 py-2 bg-black text-white font-bold uppercase tracking-wider text-base hover:bg-white hover:text-black border-2 border-black transition-colors text-center">BOOK</a>
                    <p class="text-center text-gray-800">Find your skin tone, eye colour, and hair colour assessment, along with warm/cool tone analysis and 12-tone seasonal analysis, using detailed and comprehensive drapes in a <span class="font-bold">120-minute session.</span></p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/service3.jpg" alt="Express for One" class="w-full max-w-xs h-auto aspect-square object-cover rounded-none mb-4 sm:mb-6" />
                    <h3 class="text-xl sm:text-2xl font-bold mb-2 text-center">Express for One</h3>
                    <a href="#book" class="mb-4 px-6 py-2 bg-black text-white font-bold uppercase tracking-wider text-base hover:bg-white hover:text-black border-2 border-black transition-colors text-center">BOOK</a>
                    <p class="text-center text-gray-800">Find your skin tone, eye colour, and hair colour assessment, along with warm/cool tone analysis and 12-tone seasonal analysis, using detailed and comprehensive drapes in a <span class="font-bold">45-minute session.</span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-10 bg-[#bc8b5c] md:hidden" data-aos="fade-up" id="story">
        <div class="max-w-md mx-auto px-3 sm:px-4 flex flex-col items-start">
            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4 text-left">See How We Found<br>Your True Colour</h2>
            <p class="text-white text-base sm:text-lg leading-relaxed mb-6 text-left">Discover the ease of our studio as we take you on a simple yet transformative journey of colour discovery. In just one to one and a half hours, you'll find the perfect palette to effortlessly enhance your everyday style. Our expert color analyst will simplify the process of identifying your ideal hues, ensuring you look and feel your best for any occasion.</p>
            <div class="w-full aspect-square bg-gray-200 rounded-none overflow-hidden shadow-lg mb-0">
                <iframe
                    src="https://drive.google.com/file/d/1TcHWNFjy8ln8-iBe1n8ghZ3Wv6nkxnNL/preview"
                    width="100%"
                    height="100%"
                    allow="autoplay"
                    class="w-full h-full"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="w-full py-24 bg-[#bc8b5c] hidden md:block" data-aos="fade-up" id="story">
        <div class="max-w-6xl mx-auto flex flex-row items-center justify-center gap-16 px-8">
            <div class="flex-1 flex justify-end">
                <div class="w-[520px] h-[520px] max-w-[520px] max-h-[520px] bg-gray-200 rounded-none overflow-hidden shadow-lg">
                    <iframe
                        src="https://drive.google.com/file/d/1TcHWNFjy8ln8-iBe1n8ghZ3Wv6nkxnNL/preview"
                        width="100%"
                        height="100%"
                        allow="autoplay"
                        class="w-full h-full"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex-1 flex flex-col justify-center items-start pl-8">
                <h2 class="text-5xl lg:text-6xl font-bold text-white mb-8 text-left leading-tight">See How We Found<br>Your True Colour</h2>
                <p class="text-white text-xl lg:text-2xl leading-relaxed text-left max-w-xl">Discover the ease of our studio as we take you on a simple yet transformative journey of colour discovery. In just one to one and a half hours, you'll find the perfect palette to effortlessly enhance your everyday style. Our expert color analyst will simplify the process of identifying your ideal hues, ensuring you look and feel your best for any occasion.</p>
            </div>
        </div>
    </section>

    <section class="w-full py-10 bg-white md:hidden" data-aos="fade-up">
        <div class="max-w-md mx-auto px-3 sm:px-4">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-6 text-left">Frequently asked questions</h2>
            <div class="mb-8">
                <h3 class="font-bold text-lg mb-1 text-left">What is personal colour analysis?</h3>
                <p class="text-gray-700 mb-6 text-left">Personal colour analysis is a process that determines the colours that best suit an individual's natural complexion, hair, and eye colour. It helps in choosing clothing, makeup, and accessories that enhance your natural beauty.</p>
                <h3 class="font-bold text-lg mb-1 text-left">How does the colour analysis process work?</h3>
                <p class="text-gray-700 mb-6 text-left">The process typically involves an in-person consultation where the analyst uses a series of colour drapes to identify your seasonal colour palette (such as Spring, Summer, Autumn, or Winter) or a more detailed analysis based on the 12-season system.</p>
                <h3 class="font-bold text-lg mb-1 text-left">Why is knowing my personal colours important?</h3>
                <p class="text-gray-700 mb-6 text-left">Knowing your personal colours helps you make informed choices about your wardrobe and makeup, ensuring you always look your best and feel confident. It can save you time and money by avoiding purchases that don't suit you.</p>
                <h3 class="font-bold text-lg mb-1 text-left">What should I expect during a consultation?</h3>
                <p class="text-gray-700 mb-6 text-left">During a consultation, you can expect an in-depth analysis of your skin tone, eye colour, and hair colour. You will be draped with various colours to see which ones enhance your natural features. The session typically lasts between 1 to 2 hours.</p>
                <h3 class="font-bold text-lg mb-1 text-left">Can men benefit from personal colour analysis?</h3>
                <p class="text-gray-700 mb-4 text-left">Absolutely! Personal colour analysis is beneficial for everyone, regardless of gender. It helps men make better choices in clothing, accessories, and even professional attire.</p>
                <div class="flex justify-center w-full">
                    <img src="assets/images/faq.jpg" alt="FAQ" class="w-11/12 max-w-xs aspect-square object-cover rounded-none shadow mb-0" />
                </div>
            </div>
        </div>
    </section>
    <section class="w-full py-24 bg-white hidden md:block" data-aos="fade-up">
        <div class="max-w-6xl mx-auto flex flex-row items-start justify-center gap-16 px-8">
            <div class="flex-1 flex flex-col justify-center items-start pr-8">
                <h2 class="text-5xl lg:text-6xl font-bold mb-10 text-left leading-tight">Frequently asked questions</h2>
                <div class="mb-8">
                    <h3 class="font-bold text-2xl mb-2 text-left">What is personal colour analysis?</h3>
                    <p class="text-gray-700 mb-8 text-lg text-left">Personal colour analysis is a process that determines the colours that best suit an individual's natural complexion, hair, and eye colour. It helps in choosing clothing, makeup, and accessories that enhance your natural beauty.</p>
                    <h3 class="font-bold text-2xl mb-2 text-left">How does the colour analysis process work?</h3>
                    <p class="text-gray-700 mb-8 text-lg text-left">The process typically involves an in-person consultation where the analyst uses a series of colour drapes to identify your seasonal colour palette (such as Spring, Summer, Autumn, or Winter) or a more detailed analysis based on the 12-season system.</p>
                    <h3 class="font-bold text-2xl mb-2 text-left">Why is knowing my personal colours important?</h3>
                    <p class="text-gray-700 mb-8 text-lg text-left">Knowing your personal colours helps you make informed choices about your wardrobe and makeup, ensuring you always look your best and feel confident. It can save you time and money by avoiding purchases that don't suit you.</p>
                    <h3 class="font-bold text-2xl mb-2 text-left">What should I expect during a consultation?</h3>
                    <p class="text-gray-700 mb-8 text-lg text-left">During a consultation, you can expect an in-depth analysis of your skin tone, eye colour, and hair colour. You will be draped with various colours to see which ones enhance your natural features. The session typically lasts between 1 to 2 hours.</p>
                    <h3 class="font-bold text-2xl mb-2 text-left">Can men benefit from personal colour analysis?</h3>
                    <p class="text-gray-700 mb-0 text-lg text-left">Absolutely! Personal colour analysis is beneficial for everyone, regardless of gender. It helps men make better choices in clothing, accessories, and even professional attire.</p>
                </div>
            </div>
            <div class="flex-1 flex justify-center items-start">
                <img src="assets/images/faq.jpg" alt="FAQ" class="w-[480px] h-[1180px] object-cover aspect-square rounded-none shadow" />
            </div>
        </div>
    </section>

    <section class="w-full py-10 bg-white md:hidden" data-aos="fade-up" id="feed">
        <div class="max-w-md mx-auto px-3 sm:px-4">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-6" data-aos="fade-up" data-aos-delay="100">follow our instagram</h2>
            <div class="grid grid-cols-2 gap-4 mb-8">
                <img src="assets/images/ig1.jpg" alt="Instagram 1" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="200" />
                <img src="assets/images/ig2.jpg" alt="Instagram 2" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="300" />
                <img src="assets/images/ig3.jpg" alt="Instagram 3" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="400" />
                <img src="assets/images/ig4.jpg" alt="Instagram 4" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="500" />
                <img src="assets/images/ig5.jpg" alt="Instagram 5" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="600" />
                <img src="assets/images/ig6.jpg" alt="Instagram 6" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="700" />
            </div>
            <div class="flex flex-col items-center justify-center">
                <svg class="w-8 h-8 text-gray-800 mb-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5zm8.75 2.25a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5zM12 6.5A5.5 5.5 0 1 0 12 17.5a5.5 5.5 0 0 0 0-11zm0 1.5a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"></path>
                </svg>
                <span class="text-xl sm:text-2xl font-bold text-gray-800 text-center">@colour_byutie</span>
            </div>
        </div>
    </section>
    <section class="w-full py-20 bg-white hidden md:block" data-aos="fade-up" id="feed">
        <div class="max-w-4xl mx-auto px-4 flex flex-col items-center justify-center">
            <h2 class="text-4xl lg:text-5xl font-bold text-center mb-4">follow our instagram</h2>
            <div class="flex items-center justify-center mb-4">
                <span class="text-2xl font-semibold text-gray-800 mr-2">@colour_byutie</span>
                <svg class="w-6 h-6 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5zm8.75 2.25a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5zM12 6.5A5.5 5.5 0 1 0 12 17.5a5.5 5.5 0 0 0 0-11zm0 1.5a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"></path>
                </svg>
            </div>
            <div class="grid grid-cols-3 gap-6">
                <img src="assets/images/ig1.jpg" alt="Instagram 1" class="w-full aspect-square object-cover rounded-none ig-gallery-img" />
                <img src="assets/images/ig2.jpg" alt="Instagram 2" class="w-full aspect-square object-cover rounded-none ig-gallery-img" />
                <img src="assets/images/ig3.jpg" alt="Instagram 3" class="w-full aspect-square object-cover rounded-none ig-gallery-img" />
                <img src="assets/images/ig4.jpg" alt="Instagram 4" class="w-full aspect-square object-cover rounded-none ig-gallery-img" />
                <img src="assets/images/ig5.jpg" alt="Instagram 5" class="w-full aspect-square object-cover rounded-none ig-gallery-img" />
                <img src="assets/images/ig6.jpg" alt="Instagram 6" class="w-full aspect-square object-cover rounded-none ig-gallery-img" />
            </div>
        </div>
    </section>

    <div id="igModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70 hidden">
        <button id="igModalClose" class="absolute top-4 right-6 text-white text-3xl font-bold focus:outline-none">&times;</button>
        <button id="igModalPrev" class="absolute left-8 top-1/2 -translate-y-1/2 text-white text-4xl px-2 py-1 bg-black/30 hover:bg-black/60 rounded-full focus:outline-none">&#60;</button>
        <img id="igModalImg" src="" alt="Instagram Zoom" class="max-h-[90vh] max-w-[90vw] object-contain rounded shadow-lg bg-white" />
        <button id="igModalNext" class="absolute right-8 top-1/2 -translate-y-1/2 text-white text-4xl px-2 py-1 bg-black/30 hover:bg-black/60 rounded-full focus:outline-none">&#62;</button>
    </div>

    <section class="py-20 bg-[#fc6c4c] text-white hidden md:block" id="contact" data-aos="fade-up">
        <div class="max-w-3xl mx-auto px-4">
            <div class="grid grid-cols-2 gap-8 items-start">
                <div class="flex flex-col items-start">
                    <h2 class="text-4xl font-bold mb-8 text-center w-full">Get in touch</h2>
                    <div class="mb-6">
                        <h3 class="font-bold text-lg mb-2">Address</h3>
                        <p class="text-base leading-relaxed mb-4">Renon, Denpasar Selatan<br>Kota Denpasar - Bali 80239</p>
                        <h3 class="font-bold text-lg mb-2">Contacts</h3>
                        <a href="tel:+62811120645" class="block hover:underline text-white text-base mb-1">+62 811 120 645</a>
                        <a href="mailto:hello@colourbyutie.com" class="block hover:underline text-white text-base mb-4">hello@colourbyutie.com</a>
                        <div class="flex space-x-6 mt-2">
                            <a href="#" class="text-white text-xl hover:text-gray-800"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-white text-xl hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white text-xl hover:text-gray-800"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
                <form action="#" method="POST" class="w-full flex flex-col space-y-4">
                    <div>
                        <label class="block mb-1 text-white text-base">Name*</label>
                        <input type="text" name="name" placeholder="Your name" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                    </div>
                    <div>
                        <label class="block mb-1 text-white text-base">Last name</label>
                        <input type="text" name="lastname" placeholder="Your last name" class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                    </div>
                    <div>
                        <label class="block mb-1 text-white text-base">Your email*</label>
                        <input type="email" name="email" placeholder="Your email address" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                    </div>
                    <div>
                        <label class="block mb-1 text-white text-base">Message*</label>
                        <textarea name="message" placeholder="Enter your message" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none h-32"></textarea>
                    </div>
                    <button type="submit" class="bg-black text-white font-bold py-2 px-6 uppercase tracking-wider hover:bg-white hover:text-black border-2 border-black transition-colors text-left w-auto">SUBMIT</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-primary text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-4">
                <a href="#" target="_blank" class="text-white hover:text-secondary transition-colors">
                    <i class="fab fa-instagram"></i> @pak_nazar
                </a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> Pak Nazar. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: "ease-in-out",
            once: true
        });
        // Force overflow-x:hidden after load and on resize to fix overflow bug
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.body.style.overflowX = 'hidden';
                document.documentElement.style.overflowX = 'hidden';
            }, 1000);
        });
        window.addEventListener('resize', () => {
            document.body.style.overflowX = 'hidden';
            document.documentElement.style.overflowX = 'hidden';
        });

        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.getElementById('navToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const navIcon = document.getElementById('navIcon');

            navToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                navIcon.classList.toggle('fa-bars');
                navIcon.classList.toggle('fa-times');
            });
        });
    </script>
</body>

</html>