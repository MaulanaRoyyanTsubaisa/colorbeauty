<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Colour By Utie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Midtrans Snap JS -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="YOUR_CLIENT_KEY_HERE"></script>
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
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-4xl mx-auto px-4 py-4 flex items-center">
            <a href="analyze.php" class="flex items-center text-gray-600 hover:text-gray-800 mr-4">
                <i class="fas fa-arrow-left mr-2"></i>
                Return to store
            </a>
        </div>
    </header>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Side - Order Summary -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-2xl font-bold mb-6">Pay Colour ByUtie</h2>
                
                <div id="orderSummary" class="space-y-4">
                    <!-- Order details will be populated by JavaScript -->
                </div>

                <div class="border-t pt-4 mt-6">
                    <div class="flex justify-between items-center text-lg font-semibold">
                        <span>Total due</span>
                        <span id="totalAmount">Rp0.00</span>
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Information -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-xl font-semibold mb-6">Contact information</h3>
                
                <form id="checkoutForm" class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Email">
                    </div>

                    <div>
                        <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full name</label>
                        <input type="text" id="fullName" name="fullName" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Your full name">
                    </div>

                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                        <select id="country" name="country" required 
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone number</label>
                        <div class="flex">
                            <div class="flex items-center px-3 py-2 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==" alt="ID" class="w-6 h-4 mr-1">
                                <span class="text-sm">+62</span>
                            </div>
                            <input type="tel" id="phone" name="phone" required 
                                   class="flex-1 px-3 py-2 border border-gray-300 rounded-r-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                   placeholder="Your phone number">
                        </div>
                    </div>

                    <button type="submit" id="confirmBookingBtn" 
                            class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                        Confirm booking
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Loading Modal -->
    <div id="loadingModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg p-6 text-center">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mx-auto mb-4"></div>
            <p class="text-gray-600">Processing your booking...</p>
        </div>
    </div>

    <script>
        let bookingData = null;

        // Load booking data from sessionStorage
        document.addEventListener('DOMContentLoaded', function() {
            const storedData = sessionStorage.getItem('bookingData');
            if (!storedData) {
                alert('No booking data found. Redirecting to booking page.');
                window.location.href = 'analyze.php';
                return;
            }

            bookingData = JSON.parse(storedData);
            populateOrderSummary();
        });

        function populateOrderSummary() {
            const orderSummary = document.getElementById('orderSummary');
            const totalAmount = document.getElementById('totalAmount');

            // Format date
            const date = new Date(bookingData.date);
            const formattedDate = date.toLocaleDateString('en-US', { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });

            orderSummary.innerHTML = `
                <div class="border-b pb-4">
                    <h3 class="font-semibold text-lg">${bookingData.service}</h3>
                    <p class="text-gray-600 text-sm">${bookingData.description}</p>
                </div>
                
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Service</span>
                        <span>${bookingData.service}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Date</span>
                        <span>${formattedDate}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Time</span>
                        <span>${bookingData.time}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Duration</span>
                        <span>${bookingData.duration} minutes</span>
                    </div>
                </div>

                <div class="border-t pt-4 mt-4">
                    <div class="flex justify-between">
                        <span>${bookingData.service}</span>
                        <span>${bookingData.price}</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-600">
                        <span>Subtotal</span>
                        <span>${bookingData.price}</span>
                    </div>
                </div>
            `;

            totalAmount.textContent = bookingData.price;
        }

        // Handle form submission
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Commented out payment gateway related code for now
            /*
            const formData = new FormData(this);
            const customerData = {
                email: formData.get('email'),
                fullName: formData.get('fullName'),
                country: formData.get('country'),
                phone: formData.get('phone')
            };

            // Show loading modal
            document.getElementById('loadingModal').classList.remove('hidden');

            // Prepare payment data
            const paymentData = {
                ...bookingData,
                customer: customerData,
                amount: parseInt(bookingData.price.replace(/[^\d]/g, '')) // Extract numeric value
            };

            // Send to payment processing
            fetch('process_payment.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(paymentData)
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('loadingModal').classList.add('hidden');
                
                if (data.success && data.snapToken) {
                    // Use Midtrans Snap
                    snap.pay(data.snapToken, {
                        onSuccess: function(result) {
                            // Payment successful
                            sessionStorage.removeItem('bookingData');
                            alert('Payment successful! Your booking has been confirmed.');
                            window.location.href = 'analyze.php';
                        },
                        onPending: function(result) {
                            // Payment pending
                            alert('Payment is pending. Please complete your payment.');
                        },
                        onError: function(result) {
                            // Payment error
                            alert('Payment failed. Please try again.');
                        },
                        onClose: function() {
                            // User closed the popup without finishing payment
                            console.log('Payment popup closed');
                        }
                    });
                } else {
                    alert('Error processing payment: ' + (data.message || 'Unknown error'));
                }
            })
            .catch(error => {
                document.getElementById('loadingModal').classList.add('hidden');
                console.error('Error:', error);
                alert('An error occurred while processing your payment');
            });
            */

        // Show booking successful popup immediately
        // Remove alert and show custom popup notification
        showNotification('Pemesanan selesai!');
    });

    // Function to create and show notification popup
    function showNotification(message) {
        // Create notification container if not exists
        let container = document.getElementById('notificationContainer');
        if (!container) {
            container = document.createElement('div');
            container.id = 'notificationContainer';
            container.style.position = 'fixed';
            container.style.top = '20px';
            container.style.right = '20px';
            container.style.zIndex = '10000';
            document.body.appendChild(container);
        }

        // Create notification element
        const notification = document.createElement('div');
        notification.textContent = message;
        notification.style.background = '#4caf50';
        notification.style.color = 'white';
        notification.style.padding = '15px 25px';
        notification.style.marginTop = '10px';
        notification.style.borderRadius = '8px';
        notification.style.boxShadow = '0 4px 8px rgba(0,0,0,0.2)';
        notification.style.fontSize = '16px';
        notification.style.fontWeight = 'bold';
        notification.style.opacity = '0';
        notification.style.transform = 'translateX(100%)';
        notification.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

        container.appendChild(notification);

        // Trigger animation: slide in and fade in
        requestAnimationFrame(() => {
            notification.style.opacity = '1';
            notification.style.transform = 'translateX(0)';
        });

        // After 3 seconds, slide out and fade out, then remove notification and redirect
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateX(100%)';
            notification.addEventListener('transitionend', function handler() {
                notification.removeEventListener('transitionend', handler);
                notification.remove();
                sessionStorage.removeItem('bookingData');
                window.location.href = 'analyze.php';
            });
        }, 3000);
    }
    </script>
</body>
</html>
