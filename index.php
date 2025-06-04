<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Analysis</title>
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

<body class="font-sans">
    <!-- Navbar -->
    <nav class="w-full bg-white py-6 px-0 md:px-0 flex items-center justify-between fixed top-0 left-0 z-50 border-b border-gray-100">
        <div class="container mx-auto flex items-center justify-between px-4">
            <div class="flex flex-col leading-none select-none">
                <span class="text-4xl font-bold text-logo tracking-tight" style="font-family: 'Pacifico', cursive;">colour</span>
                <span class="text-logo text-lg -mt-2 ml-2" style="font-family: 'Pacifico', cursive;">by utie</span>
            </div>
            <ul class="flex space-x-8 text-lg font-medium">
                <li><a href="analyze.php" class="text-gray-800 hover:text-logo transition-colors">Analyze Me</a></li>
                <li><a href="#steps" class="text-gray-800 hover:text-logo transition-colors">Step by Step</a></li>
                <li><a href="#story" class="text-gray-800 hover:text-logo transition-colors">Our Story</a></li>
                <li><a href="#feed" class="text-gray-800 hover:text-logo transition-colors">Feed</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="w-full min-h-[600px] md:min-h-[700px] flex items-center justify-center bg-[#faa53d] pt-32 pb-12" data-aos="fade-up">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-8">
            <!-- Left: Text -->
            <div class="flex-1 flex flex-col justify-center items-start max-w-xl" data-aos="fade-right" data-aos-delay="100">
                <h1 class="text-white text-3xl md:text-5xl font-semibold mb-10 leading-tight text-left">"If you know your colours, then<br>you're one step closer to know<br>yourself."</h1>
                <a href="#book" class="mt-4 px-8 py-4 bg-white text-[#faa53d] font-bold uppercase tracking-wider rounded-none shadow hover:bg-gray-100 transition-all text-base md:text-lg" data-aos="fade-right" data-aos-delay="200">Book Now</a>
            </div>
            <!-- Right: Image with Half Circle -->
            <div class="flex-1 flex justify-center items-center relative w-full md:w-auto" data-aos="fade-left" data-aos-delay="100">
                <div class="w-[420px] h-[420px] bg-[#fbb040] rounded-t-full rounded-b-none flex items-end justify-center overflow-hidden">
                    <img src="assets/images/hero-model.png" alt="Model" class="w-[320px] md:w-[400px] object-cover cursor-pointer hero-modal-img" style="background:transparent;" />
                </div>
            </div>
        </div>
    </section>

    <!-- SLIDER SECTION -->
    <section class="w-full relative overflow-hidden" data-aos="fade-up">
        <div class="relative w-full flex items-center justify-center h-[250px] md:h-[350px] lg:h-[550px]">
            <!-- Left Arrow -->
            <button id="sliderPrev" class="absolute left-4 z-20 bg-white/70 hover:bg-white rounded-full p-2 text-3xl text-gray-800 flex items-center justify-center focus:outline-none" data-aos="fade-right" data-aos-delay="100">
                <span>&lt;</span>
            </button>
            <!-- Images -->
            <div class="w-full h-full flex items-center justify-center">
                <img id="sliderImage" src="assets/images/slider1.jpg" alt="Slider" class="object-cover w-full h-full transition-all duration-700" />
            </div>
            <!-- Right Arrow -->
            <button id="sliderNext" class="absolute right-4 z-20 bg-white/70 hover:bg-white rounded-full p-2 text-3xl text-gray-800 flex items-center justify-center focus:outline-none" data-aos="fade-left" data-aos-delay="100">
                <span>&gt;</span>
            </button>
        </div>
        <!-- Dots -->
        <div class="flex justify-center mt-4 gap-2" data-aos="fade-up" data-aos-delay="150">
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-400 inline-block cursor-pointer" data-index="0"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="1"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="2"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="3"></span>
            <span class="slider-dot w-3 h-3 rounded-full bg-gray-300 inline-block cursor-pointer" data-index="4"></span>
        </div>
    </section>

    <!-- FEATURE SECTION -->
    <section class="w-full py-16 bg-white" data-aos="fade-up" id="steps">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-6" data-aos="fade-up" data-aos-delay="100">Discovering your true colours is a path to discovering<br class="hidden md:inline"> your true self</h2>
            <p class="text-center text-lg text-gray-700 mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">When you dress authentically to reflect the person one sees in your hair, eyes, and skin, you begin to connect with your unique energy and unlock hidden potential. What could be more empowering than that?</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/feature1.jpg" alt="Empower You" class="w-full h-80 object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Empower You</h3>
                    <p class="text-center text-gray-700">Expressing our true selves—through our colours, attire, and belongings—empowers us.</p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/feature2.jpg" alt="Genuine Self" class="w-full h-80 object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Genuine Self</h3>
                    <p class="text-center text-gray-700">Showing your genuine self is the surest path to attracting the positive experiences you deserve.</p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/feature3.jpg" alt="Reshape Outlook" class="w-full h-80 object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Reshape Outlook</h3>
                    <p class="text-center text-gray-700">Being true to yourself has the power to profoundly reshape your self-perception and your outlook.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="w-full py-16 bg-[#cbe9de]" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-4" data-aos="fade-up" data-aos-delay="100">Find your genuine colours and style</h2>
            <p class="text-center text-lg text-gray-700 mb-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="150">When aligned with your chosen colours, attire, and possessions, others can easily identify you, enhancing your attractiveness, and leaving you feeling more vibrant, self-assured, and focused.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/service1.jpg" alt="Analysis for One" class="w-full h-80 object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Analysis for One</h3>
                    <a href="#ef1" class="mb-4 px-8 py-2 bg-black text-white font-bold uppercase tracking-wider text-base hover:bg-white hover:text-black border-2 border-black transition-colors">BOOK</a>
                    <p class="text-center text-gray-800">Find your skin tone, eye colour, and hair colour assessment, along with warm/cool tone analysis and 12-tone seasonal analysis, using detailed and comprehensive drapes in a <span class="font-bold">90-minute session.</span></p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/service2.jpg" alt="Analysis for Two" class="w-full h-80 object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Analysis for Two</h3>
                    <a href="#book" class="mb-4 px-8 py-2 bg-black text-white font-bold uppercase tracking-wider text-base hover:bg-white hover:text-black border-2 border-black transition-colors">BOOK</a>
                    <p class="text-center text-gray-800">Find your skin tone, eye colour, and hair colour assessment, along with warm/cool tone analysis and 12-tone seasonal analysis, using detailed and comprehensive drapes in a <span class="font-bold">120-minute session.</span></p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/service3.jpg" alt="Express for One" class="w-full h-80 object-cover rounded-none mb-6" />
                    <h3 class="text-2xl font-bold mb-2 text-center">Express for One</h3>
                    <a href="#book" class="mb-4 px-8 py-2 bg-black text-white font-bold uppercase tracking-wider text-base hover:bg-white hover:text-black border-2 border-black transition-colors">BOOK</a>
                    <p class="text-center text-gray-800">Find your skin tone, eye colour, and hair colour assessment, along with warm/cool tone analysis and 12-tone seasonal analysis, using detailed and comprehensive drapes in a <span class="font-bold">45-minute session.</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEE HOW WE FOUND YOUR TRUE COLOUR SECTION -->
    <section class="w-full py-16 bg-[#bc8b5c]" data-aos="fade-up" id="story">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center md:items-start gap-10">
            <!-- Video Thumbnail -->
            <div class="w-full md:w-1/2 flex justify-center mb-8 md:mb-0" data-aos="fade-right" data-aos-delay="100">
                <div class="relative w-full max-w-md aspect-square bg-gray-200 rounded-none overflow-hidden shadow-lg">
                    <iframe
                        src="https://drive.google.com/file/d/1TcHWNFjy8ln8-iBe1n8ghZ3Wv6nkxnNL/preview"
                        width="100%"
                        height="100%"
                        allow="autoplay"
                        class="w-full h-full"
                        allowfullscreen></iframe>
                </div>
            </div>
            <!-- Text -->
            <div class="w-full md:w-1/2 flex flex-col justify-center" data-aos="fade-left" data-aos-delay="100">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">See How We Found<br>Your True Colour</h2>
                <p class="text-white text-lg leading-relaxed">Discover the ease of our studio as we take you on a simple yet transformative journey of colour discovery. In just one to one and a half hours, you'll find the perfect palette to effortlessly enhance your everyday style. Our expert color analyst will simplify the process of identifying your ideal hues, ensuring you look and feel your best for any occasion.</p>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="w-full py-16 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10 items-stretch">
            <!-- FAQ Content -->
            <div data-aos="fade-right" data-aos-delay="100">
                <h2 class="text-4xl md:text-5xl font-bold mb-10">Frequently asked questions</h2>
                <div class="mb-8">
                    <h3 class="font-bold text-lg mb-1">What is personal colour analysis?</h3>
                    <p class="text-gray-700 mb-6">Personal colour analysis is a process that determines the colours that best suit an individual's natural complexion, hair, and eye colour. It helps in choosing clothing, makeup, and accessories that enhance your natural beauty.</p>
                    <h3 class="font-bold text-lg mb-1">How does the colour analysis process work?</h3>
                    <p class="text-gray-700 mb-6">The process typically involves an in-person consultation where the analyst uses a series of colour drapes to identify your seasonal colour palette (such as Spring, Summer, Autumn, or Winter) or a more detailed analysis based on the 12-season system.</p>
                    <h3 class="font-bold text-lg mb-1">Why is knowing my personal colours important?</h3>
                    <p class="text-gray-700 mb-6">Knowing your personal colours helps you make informed choices about your wardrobe and makeup, ensuring you always look your best and feel confident. It can save you time and money by avoiding purchases that don't suit you.</p>
                    <h3 class="font-bold text-lg mb-1">What should I expect during a consultation?</h3>
                    <p class="text-gray-700 mb-6">During a consultation, you can expect an in-depth analysis of your skin tone, eye colour, and hair colour. You will be draped with various colours to see which ones enhance your natural features. The session typically lasts between 1 to 2 hours.</p>
                    <h3 class="font-bold text-lg mb-1">Can men benefit from personal colour analysis?</h3>
                    <p class="text-gray-700">Absolutely! Personal colour analysis is beneficial for everyone, regardless of gender. It helps men make better choices in clothing, accessories, and even professional attire.</p>
                </div>
            </div>
            <!-- FAQ Image -->
            <div class="flex justify-center items-stretch h-full" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/images/faq.jpg" alt="FAQ" class="h-full w-full object-cover rounded-none shadow" />
            </div>
        </div>
    </section>

    <!-- INSTAGRAM GALLERY SECTION -->
    <section class="w-full py-16 bg-white" data-aos="fade-up" id="feed">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-2" data-aos="fade-up" data-aos-delay="100">follow our instagram</h2>
            <div class="flex justify-center items-center mb-10" data-aos="fade-up" data-aos-delay="150">
                <span class="text-xl text-gray-800 mr-2">@colour_byutie</span>
                <svg class="w-6 h-6 text-gray-800" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5zm8.75 2.25a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5zM12 6.5A5.5 5.5 0 1 0 12 17.5a5.5 5.5 0 0 0 0-11zm0 1.5a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"></path>
                </svg>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <img src="assets/images/ig1.jpg" alt="Instagram 1" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="200" />
                <img src="assets/images/ig2.jpg" alt="Instagram 2" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="300" />
                <img src="assets/images/ig3.jpg" alt="Instagram 3" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="400" />
                <img src="assets/images/ig4.jpg" alt="Instagram 4" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="500" />
                <img src="assets/images/ig5.jpg" alt="Instagram 5" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="600" />
                <img src="assets/images/ig6.jpg" alt="Instagram 6" class="w-full aspect-square object-cover rounded-none ig-gallery-img" data-aos="fade-up" data-aos-delay="700" />
            </div>
        </div>
    </section>

    <!-- INSTAGRAM MODAL (hidden by default) -->
    <div id="igModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70 hidden">
        <button id="igModalClose" class="absolute top-4 right-6 text-white text-3xl font-bold focus:outline-none">&times;</button>
        <button id="igModalPrev" class="absolute left-8 top-1/2 -translate-y-1/2 text-white text-4xl px-2 py-1 bg-black/30 hover:bg-black/60 rounded-full focus:outline-none">&#60;</button>
        <img id="igModalImg" src="" alt="Instagram Zoom" class="max-h-[90vh] max-w-[90vw] object-contain rounded shadow-lg bg-white" />
        <button id="igModalNext" class="absolute right-8 top-1/2 -translate-y-1/2 text-white text-4xl px-2 py-1 bg-black/30 hover:bg-black/60 rounded-full focus:outline-none">&#62;</button>
    </div>

    <!-- Contact Section -->
    <section class="py-20 bg-[#fc6c4c] text-white" id="contact" data-aos="fade-up">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-white">Get in touch</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <!-- Left: Info and Social -->
                <div class="flex flex-col justify-start h-full" data-aos="fade-right" data-aos-delay="100">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-2">Address</h3>
                        <p class="leading-relaxed">Renon, Denpasar Selatan<br>Kota Denpasar - Bali 80239</p>
                    </div>
                    <div class="mb-8">
                        <h3 class="font-bold text-lg mb-1">Contacts</h3>
                        <a href="tel:+62811120645" class="block hover:underline">+62 811 120 645</a>
                        <a href="mailto:hello@colourbyutie.com" class="block hover:underline">hello@colourbyutie.com</a>
                    </div>
                    <div class="flex space-x-6 mt-6">
                        <a href="#" class="text-white text-2xl hover:text-gray-800"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white text-2xl hover:text-gray-800"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white text-2xl hover:text-gray-800"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <!-- Right: Form -->
                <div class="flex flex-col items-center md:items-start" data-aos="fade-left" data-aos-delay="100">
                    <form action="#" method="POST" class="w-full max-w-md flex flex-col space-y-4">
                        <div>
                            <label class="block mb-1 text-white">Name*</label>
                            <input type="text" name="name" placeholder="Your name" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                        </div>
                        <div>
                            <label class="block mb-1 text-white">Last name</label>
                            <input type="text" name="lastname" placeholder="Your last name" class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                        </div>
                        <div>
                            <label class="block mb-1 text-white">Your email*</label>
                            <input type="email" name="email" placeholder="Your email address" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                        </div>
                        <div>
                            <label class="block mb-1 text-white">Message*</label>
                            <textarea name="message" placeholder="Enter your message" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none h-32"></textarea>
                        </div>
                        <button type="submit" class="w-32 bg-black text-white font-bold py-2 px-4 uppercase tracking-wider hover:bg-white hover:text-black border-2 border-black transition-colors">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-4">
                <a href="#" target="_blank" class="text-white hover:text-secondary transition-colors">
                    <i class="fab fa-instagram"></i> @colorbyutie
                </a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> ColorByUtie. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
=======
>>>>>>> b2a031f224c2d567f4bf8f45103126ec25c02189
