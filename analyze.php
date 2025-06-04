 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyze Me - BycolorBeauty</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2c3e50',
                        secondary: '#e74c3c',
                        logo: '#e74c3c',
                    },
                    fontFamily: {
                        logo: ['Pacifico', 'cursive'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-in-out',
                        'slide-up': 'slideUp 1s ease-in-out',
                        'slide-down': 'slideDown 1s ease-in-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        slideDown: {
                            '0%': { transform: 'translateY(-20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans">
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
                    <li><a href="analyze.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4 underline">Analyze Me</a></li>
                    <li><a href="steps.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Step by Step</a></li>
                    <li><a href="our-story.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Our Story</a></li>
                    <li><a href="feed.php" class="text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Feed</a></li>
                </ul>
            </div>
            <!-- Mobile Menu -->
            <ul id="mobileMenu" class="fixed top-16 left-0 w-full bg-white shadow-md flex flex-col items-end space-y-4 text-base font-medium py-6 px-8 z-50 hidden md:hidden text-right transition-all duration-500 opacity-0 translate-x-8 pointer-events-none">
                <li><a href="analyze.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4 underline">Analyze Me</a></li>
                <li><a href="steps.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Step by Step</a></li>
                <li><a href="our-story.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Our Story</a></li>
                <li><a href="feed.php" class="block text-gray-800 hover:text-logo transition-colors hover:underline underline-offset-4">Feed</a></li>
            </ul>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="w-full min-h-[400px] md:min-h-[750px] flex items-center justify-center relative pt-32 pb-8" data-aos="fade-in">
        <img src="assets/images/analyze-hero.jpg" alt="Analyze Hero" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-black/10 z-10"></div>
        <div class="container mx-auto px-4 relative z-20 flex flex-col items-center justify-center h-full">

        </div>
    </section>
    <!-- EXPRESS FOR ONE SECTION -->

    <section id="ef1" class="w-full py-16 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left: Image -->
            <div class="flex justify-center">
                <img src="assets/images/express.jpg" alt="Express for One" class="w-[400px] h-[400px] object-cover border border-gray-200 shadow" />
            </div>
            <!-- Right: Content -->
            <div>
                <h2 class="text-4xl font-bold mb-2">Express for One</h2>
                <h3 class="text-xl font-semibold mb-4">Personal Colour Analysis for One Person – Express</h3>
                <div class="flex items-center space-x-4 mb-2">
                    <span class="text-gray-400 line-through text-lg">Rp1155000.00</span>
                    <span class="text-black text-lg font-bold">Rp855000.00</span>
                    <span class="text-gray-600 text-base">| 60 min</span>
                </div>
                <div class="text-gray-600 mb-6">Renon, Denpasar Selatan, Kabupaten Badung - Bali</div>
                <button onclick="openBookingModal('Express for One', 'Personal Colour Analysis for One Person – Express', '60', 'Rp855000.00')" class="inline-block bg-black text-white font-bold px-8 py-3 mb-6 uppercase tracking-wider hover:bg-white hover:text-black border-2 border-black transition-colors">Book Now</button>
                <p class="text-gray-800 text-base leading-relaxed">
                    A 45-minute session including an assessment of skin tone, eye colour, and hair colour, along with warm/cool tone analysis. This session features a detailed 12-tone seasonal analysis with comprehensive draping to identify your least and best colours, including neutrals.
                </p>
            </div>
        </div>
    </section>
    <!-- EXPRESS FOR ONE SECTION 2
    <!-- ANALYSIS FOR ONE SECTION -->
    <section class="w-full py-16 bg-[#f7c1bb]" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left: Image -->
            <div class="flex justify-center">
                <img src="assets/images/analysis-one.jpg" alt="Analysis for One" class="w-[400px] h-[400px] object-cover border border-gray-200 shadow" />
            </div>
            <!-- Right: Content -->
            <div>
                <h2 class="text-4xl font-bold mb-2">Analysis for One</h2>
                <h3 class="text-xl font-semibold mb-4">Personal Colour Test for One Person</h3>
                <div class="flex items-center space-x-4 mb-2">
                    <span class="text-gray-400 line-through text-lg">Rp1755000.00</span>
                    <span class="text-black text-lg font-bold">Rp1555000.00</span>
                    <span class="text-gray-600 text-base">| 90 min</span>
                </div>
                <div class="text-gray-600 mb-6">Renon, Denpasar Selatan, Kabupaten Badung - Bali</div>
                <button onclick="openBookingModal('Analysis for One', 'Personal Colour Test for One Person', '90', 'Rp1555000.00')" class="inline-block bg-black text-white font-bold px-8 py-3 mb-6 uppercase tracking-wider hover:bg-white hover:text-black border-2 border-black transition-colors">Book Now</button>
                <p class="text-gray-800 text-base leading-relaxed">
                    A 75-minute session including an assessment of skin tone, eye colour, and hair colour, along with warm/cool tone analysis. This session features a detailed 12-tone seasonal analysis with comprehensive draping to identify your least and best colours, including neutrals. Additionally, you will receive personalized recommendations for hair colour, jewelry, nail polish, and makeup.
                </p>
            </div>
        </div>
    </section>
    <!-- ANALYSIS FOR TWO SECTION -->
    <section class="w-full py-16 bg-[#cbe9de]" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left: Image -->
            <div class="flex justify-center">
                <img src="assets/images/analysis-two.jpg" alt="Analysis for Two" class="w-[400px] h-[400px] object-cover border border-gray-200 shadow" />
            </div>
            <!-- Right: Content -->
            <div>
                <h2 class="text-4xl font-bold mb-2">Analysis for Two</h2>
                <h3 class="text-xl font-semibold mb-4">Personal Colour Analysis for Two</h3>
                <div class="flex items-center space-x-4 mb-2">
                    <span class="text-gray-400 line-through text-lg">Rp3000000.00</span>
                    <span class="text-black text-lg font-bold">Rp2888000.00</span>
                    <span class="text-gray-600 text-base">| 120 min</span>
                </div>
                <div class="text-gray-600 mb-6">Renon, Denpasar Selatan, Kabupaten Badung - Bali</div>
                <button onclick="openBookingModal('Analysis for Two', 'Personal Colour Analysis for Two', '120', 'Rp2888000.00')" class="inline-block bg-black text-white font-bold px-8 py-3 mb-6 uppercase tracking-wider hover:bg-white hover:text-black border-2 border-black transition-colors">Book Now</button>
                <p class="text-gray-800 text-base leading-relaxed">
                    A 90-minute session including an assessment of skin tone, eye colour, and hair colour, along with warm/cool tone analysis. This session features a detailed 12-tone seasonal analysis with comprehensive draping to identify your least and best colours, including neutrals. Additionally, you will receive personalized recommendations for hair colour, jewelry, nail polish, and makeup.
                </p>
            </div>
        </div>
    </section>
    <!-- PERSONAL COLOUR IMPROVE SECTION -->
    <section class="w-full py-16 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-2">Personal Colour<br>Helps You to Improve</h2>
            <p class="text-center text-lg text-gray-700 mb-12 max-w-2xl mx-auto font-semibold">By unlocking your personal colour palette, you'll effortlessly choose the perfect hues for everything you wear and use every day.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-48 h-48 bg-[#f7a08a] rounded-t-full rounded-b-none flex items-end justify-center mb-6 overflow-hidden">
                        <img src="assets/images/improve1.png" alt="Improve 1" class="h-40 object-contain" />
                    </div>
                    <p class="text-gray-800">Unlocking your personal colour palette can transform your fashion appearance. Knowing which hues complement your natural features helps you create a cohesive, polished, and vibrant look, boosting your confidence and style.</p>
                </div>
                <!-- Card 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-48 h-48 bg-[#f7a08a] rounded-t-full rounded-b-none flex items-end justify-center mb-6 overflow-hidden">
                        <img src="assets/images/improve2.png" alt="Improve 2" class="h-40 object-contain" />
                    </div>
                    <p class="text-gray-800">Personal colour palette is crucial for perfecting makeup. Identifying shades that complement your skin tone, eyes, and hair enhances your natural beauty. These colours create a polished, radiant look, boosting your confidence.</p>
                </div>
                <!-- Card 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="w-48 h-48 bg-[#f7a08a] rounded-t-full rounded-b-none flex items-end justify-center mb-6 overflow-hidden">
                        <img src="assets/images/improve3.png" alt="Improve 3" class="h-40 object-contain" />
                    </div>
                    <p class="text-gray-800">Understanding your personal colour palette isn't just for clothes and makeup—it also helps you choose accessories. By coordinating items like bags, hats, and shoes with your features, you enhance your overall appearance effortlessly.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- VISIT OUR STUDIO SECTION -->
    <section class="w-full py-16 bg-[#cbe9de]" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left: Video -->
            <div class="flex justify-center">
                <div class="w-[420px] h-[315px] bg-gray-200 rounded shadow overflow-hidden flex items-center justify-center">
                    <iframe
                        src="https://drive.google.com/file/d/1TcHWNFjy8ln8-iBe1n8ghZ3Wv6nkxnNL/preview"
                        width="100%"
                        height="100%"
                        allow="autoplay"
                        class="w-full h-full"
                        allowfullscreen></iframe>
                </div>
            </div>
            <!-- Right: Content -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Visit our studio<br>in Denpasar, Bali</h2>
                <p class="text-gray-800 text-base leading-relaxed">
                    Visit our vibrant colour studio in the heart of Denpasar, Bali. We're thrilled to be Bali's very first personal colour analysis studio, ready to help you unveil your true colours while you're on the go.
                </p>
            </div>
        </div>
    </section>
    <!-- FOOTER/CONTACT SECTION -->
    <section class="w-full py-12 bg-white border-t border-gray-100" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <!-- Left: Address & Contacts -->
            <div class="flex flex-col md:flex-row md:space-x-12">
                <div class="mb-6 md:mb-0">
                    <h3 class="font-bold text-lg mb-1">Address</h3>
                    <p>Renon, Denpasar Selatan<br>Kota Denpasar - Bali 80239</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-1">Contacts</h3>
                    <a href="tel:+62811120645" class="block hover:underline">+62 811 120 645</a>
                    <a href="mailto:hello@colourbyutie.com" class="block hover:underline">hello@colourbyutie.com</a>
                </div>
            </div>
            <!-- Right: Email Form -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="font-bold text-lg mb-4 text-center md:text-left">Submit your email to get our company profile</h3>
                <form action="#" method="POST" class="w-full max-w-md flex flex-col space-y-4">
                    <div>
                        <label class="block mb-1">Email address</label>
                        <input type="email" name="email" placeholder="Your email address" required class="w-full px-4 py-2 bg-gray-100 text-black rounded-none focus:outline-none" />
                    </div>
                    <button type="submit" class="w-32 bg-black text-white font-bold py-2 px-4 uppercase tracking-wider hover:bg-white hover:text-black border-2 border-black transition-colors">Submit</button>
                </form>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 mt-8 flex space-x-6">
            <a href="#" class="text-black text-2xl hover:text-gray-600"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-black text-2xl hover:text-gray-600"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black text-2xl hover:text-gray-600"><i class="fab fa-tiktok"></i></a>
        </div>
    </section>
<<<<<<< HEAD
<<<<<<< HEAD
    <!-- Booking Modal -->
    <div id="bookingModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="flex">
                <!-- Left Side - Service Info -->
                <div class="w-1/3 p-6 border-r border-gray-200">
                    <div class="flex justify-between items-start mb-4">
                        <h3 id="modalServiceName" class="text-xl font-bold">Analysis for Two</h3>
                        <button onclick="closeBookingModal()" class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    
                    <div class="space-y-3 text-sm text-gray-600">
                        <div class="flex items-center">
                            <i class="far fa-calendar mr-2"></i>
                            <span id="selectedDate">Select date</span>
                        </div>
                        <div class="flex items-center">
                            <i class="far fa-clock mr-2"></i>
                            <span id="modalDuration">120 min</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-2 mt-1"></i>
                            <span>Renon, Denpasar Selatan, Kabupaten Badung - Bali</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Calendar and Time Selection -->
                <div class="w-2/3 p-6">
                    <h4 class="text-lg font-semibold mb-4">Select date & time</h4>
                    
                    <div class="flex gap-6">
                        <!-- Calendar -->
                        <div class="flex-1">
                            <div id="calendar" class="inline-block"></div>
                        </div>
                        
                        <!-- Time Slots -->
                        <div class="w-48">
                            <div id="selectedDateDisplay" class="text-sm font-medium mb-4 text-gray-600">Select a date</div>
                            <div id="timeSlots" class="space-y-2">
                                <!-- Time slots will be populated by JavaScript -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex justify-end gap-4 mt-8 pt-4 border-t border-gray-200">
                        <button onclick="closeBookingModal()" class="px-6 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                        <button id="bookButton" onclick="submitBooking()" disabled class="px-8 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 disabled:bg-gray-300 disabled:cursor-not-allowed">Book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-md w-full p-6 text-center">
            <div class="text-green-500 text-5xl mb-4">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="text-xl font-bold mb-2">Booking Confirmed!</h3>
            <p class="text-gray-600 mb-4">Your booking has been successfully submitted. We will contact you soon to confirm the details.</p>
            <button onclick="closeSuccessModal()" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">OK</button>
        </div>
    </div>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <script>
        let selectedDate = null;
        let selectedTime = null;
        let currentService = {};
        let flatpickrInstance = null;

        // Available time slots
        const timeSlots = [
            '09:00 AM',
            '12:00 PM',
            '02:00 PM',
            '04:00 PM'
        ];

        function openBookingModal(serviceName, serviceDescription, duration, price) {
            currentService = {
                name: serviceName,
                description: serviceDescription,
                duration: duration,
                price: price
            };
            
            document.getElementById('modalServiceName').textContent = serviceName;
            document.getElementById('modalDuration').textContent = duration + ' min';
            document.getElementById('bookingModal').classList.remove('hidden');
            
            // Initialize Flatpickr
            initializeCalendar();
            
            // Reset selections
            selectedDate = null;
            selectedTime = null;
            updateBookButton();
            document.getElementById('selectedDate').textContent = 'Select date';
            document.getElementById('selectedDateDisplay').textContent = 'Select a date';
            clearTimeSlots();
        }

        function closeBookingModal() {
            document.getElementById('bookingModal').classList.add('hidden');
            if (flatpickrInstance) {
                flatpickrInstance.destroy();
                flatpickrInstance = null;
            }
        }

        function closeSuccessModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        function initializeCalendar() {
            const calendarElement = document.getElementById('calendar');
            
            if (flatpickrInstance) {
                flatpickrInstance.destroy();
            }
            
            flatpickrInstance = flatpickr(calendarElement, {
                inline: true,
                minDate: "today",
                maxDate: new Date().fp_incr(90), // 90 days from today
                enable: [
                    function(date) {
                        // Only enable Tuesday (2), Wednesday (3), and Thursday (4)
                        return (date.getDay() === 2 || date.getDay() === 3 || date.getDay() === 4);
                    }
                ],
                onDayCreate: function(dObj, dStr, fp, dayElem) {
                    const date = dayElem.dateObj;
                    const dayOfWeek = date.getDay();
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    
                    // Check if date is in the past
                    if (date < today) {
                        dayElem.style.textDecoration = 'line-through';
                        dayElem.style.color = '#999';
                        dayElem.style.opacity = '0.5';
                        return;
                    }
                    
                    // Check if it's Tuesday, Wednesday, or Thursday
                    if (dayOfWeek === 2 || dayOfWeek === 3 || dayOfWeek === 4) {
                        // Check if fully booked
                        checkIfFullyBooked(date).then(isFullyBooked => {
                            if (isFullyBooked) {
                                dayElem.style.textDecoration = 'line-through';
                                dayElem.style.color = '#999';
                                dayElem.style.opacity = '0.5';
                            } else {
                                dayElem.style.fontWeight = 'bold';
                                dayElem.style.color = '#2563eb';
                            }
                        });
                    } else {
                        // Cross out non-bookable days
                        dayElem.style.textDecoration = 'line-through';
                        dayElem.style.color = '#999';
                        dayElem.style.opacity = '0.5';
                    }
                },
                onChange: function(selectedDates, dateStr, instance) {
                    if (selectedDates.length > 0) {
                        selectedDate = dateStr;
                        const date = selectedDates[0];
                        const options = { weekday: 'long', month: 'long', day: 'numeric' };
                        const formattedDate = date.toLocaleDateString('en-US', options);
                        
                        document.getElementById('selectedDate').textContent = dateStr;
                        document.getElementById('selectedDateDisplay').textContent = formattedDate;
                        
                        populateTimeSlots(date);
                        updateBookButton();
                    }
                }
            });
        }

        // Function to check if a date is fully booked
        async function checkIfFullyBooked(date) {
            try {
                const dateStr = date.toISOString().split('T')[0];
                const response = await fetch('check_availability.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ date: dateStr })
                });
                const data = await response.json();
                return data.fullyBooked || false;
            } catch (error) {
                console.error('Error checking availability:', error);
                return false;
            }
        }

        function populateTimeSlots(selectedDateObj) {
            const timeSlotsContainer = document.getElementById('timeSlots');
            timeSlotsContainer.innerHTML = '';
            
            const dateStr = selectedDateObj.toISOString().split('T')[0];
            
            // Check availability for each time slot
            fetch('check_availability.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ date: dateStr, checkTimeSlots: true })
            })
            .then(response => response.json())
            .then(data => {
                timeSlots.forEach(time => {
                    const button = document.createElement('button');
                    const isBooked = data.bookedSlots && data.bookedSlots.includes(time);
                    
                    if (isBooked) {
                        button.className = 'w-full p-3 text-left border border-gray-200 rounded bg-gray-100 text-gray-400 cursor-not-allowed';
                        button.style.textDecoration = 'line-through';
                        button.disabled = true;
                        button.textContent = time + ' (Booked)';
                    } else {
                        button.className = 'w-full p-3 text-left border border-gray-200 rounded hover:border-blue-500 hover:bg-blue-50 transition-colors font-bold';
                        button.textContent = time;
                        button.onclick = () => selectTime(time, button);
                    }
                    
                    timeSlotsContainer.appendChild(button);
                });
            })
            .catch(error => {
                console.error('Error checking time slot availability:', error);
                // Fallback: show all slots as available
                timeSlots.forEach(time => {
                    const button = document.createElement('button');
                    button.className = 'w-full p-3 text-left border border-gray-200 rounded hover:border-blue-500 hover:bg-blue-50 transition-colors font-bold';
                    button.textContent = time;
                    button.onclick = () => selectTime(time, button);
                    timeSlotsContainer.appendChild(button);
                });
            });
        }

        function selectTime(time, buttonElement) {
            // Remove previous selection
            document.querySelectorAll('#timeSlots button').forEach(btn => {
                btn.classList.remove('border-blue-500', 'bg-blue-50', 'text-blue-600');
                btn.classList.add('border-gray-200');
            });
            
            // Add selection to clicked button
            buttonElement.classList.remove('border-gray-200');
            buttonElement.classList.add('border-blue-500', 'bg-blue-50', 'text-blue-600');
            
            selectedTime = time;
            updateBookButton();
        }

        function clearTimeSlots() {
            document.getElementById('timeSlots').innerHTML = '';
        }

        function updateBookButton() {
            const bookButton = document.getElementById('bookButton');
            if (selectedDate && selectedTime) {
                bookButton.disabled = false;
            } else {
                bookButton.disabled = true;
            }
        }

        function submitBooking() {
            if (!selectedDate || !selectedTime) {
                alert('Please select both date and time');
                return;
            }

            // Prepare booking data
            const bookingData = {
                service: currentService.name,
                description: currentService.description,
                duration: currentService.duration,
                price: currentService.price,
                date: selectedDate,
                time: selectedTime,
                timestamp: new Date().toISOString()
            };

            // Store booking data in sessionStorage and redirect to checkout
            sessionStorage.setItem('bookingData', JSON.stringify(bookingData));
            window.location.href = 'checkout.php';
        }

        // Close modal when clicking outside
        document.getElementById('bookingModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeBookingModal();
            }
        });

        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSuccessModal();
=======
=======
>>>>>>> b2a031f224c2d567f4bf8f45103126ec25c02189
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
<<<<<<< HEAD
>>>>>>> b2a031f224c2d567f4bf8f45103126ec25c02189
=======
>>>>>>> b2a031f224c2d567f4bf8f45103126ec25c02189
            }
        });
    </script>
</body>

</html>
