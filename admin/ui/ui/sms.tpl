<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Credit Purchase</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Mulish Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</
{include file="sections/header.tpl"}


<body class="font-mulish bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">SMS Credit Purchase</h1>
        <p class="text-lg mb-4">The minimum credit you can purchase is 30 KES and SMS rates are 0.4 KES per SMS.</p>

        <!-- Payment Method Selection -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <label class="block text-gray-700 font-semibold mb-2">Select Payment Method:</label>
            <div class="mb-4">
                <input type="radio" id="onlinePayment" name="paymentMethod" value="online" class="mr-2">
                <label for="onlinePayment" class="mr-4">Online STK Payment</label>
                <input type="radio" id="offlinePayment" name="paymentMethod" value="offline" class="mr-2">
                <label for="offlinePayment">Offline Payment</label>
            </div>
        </div>

        <!-- Purchase Form -->
        <div id="purchaseFormContainer" class="bg-white rounded-lg shadow-md p-6 hidden">
            <form id="purchaseForm">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="amount" class="block text-gray-700 font-semibold mb-2">Amount (KES)</label>
                    <input type="number" id="amount" name="amount" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
        // Handle payment method selection
        document.querySelectorAll('input[name="paymentMethod"]').forEach((elem) => {
            elem.addEventListener("change", function(event) {
                var value = event.target.value;
                if (value === "online") {
                    document.getElementById("purchaseFormContainer").classList.remove("hidden");
                } else {
                    document.getElementById("purchaseFormContainer").classList.add("hidden");
                    Swal.fire({
                        icon: 'info',
                        title: 'Offline Payment',
                        text: 'Please contact the admin for recharge.'
                    });
                }
            });
        });

        // Handle form submission
        document.getElementById("purchaseForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var amount = document.getElementById("amount").value;
            if (email && phone && amount && amount >= 3) {
                // Initialize Paystack with the amount
                payWithPaystack(email, phone, amount);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Input',
                    text: 'Please enter a valid email, phone number, and amount (minimum 30 KES).'
                });
            }
        });

        // Function to initialize Paystack
        function payWithPaystack(email, phone, amount) {
            var handler = PaystackPop.setup({
                key: 'pk_live_0f510ebbcfbbb6448b74ed8371e548077d128f0e', // Replace with your Paystack public key
                email: email, // User's email
                amount: amount * 100, // Amount in kobo
                currency: 'KES', // Currency code
                metadata: {
                    custom_fields: [
                        { display_name: "Phone Number", variable_name: "phone_number", value: phone }
                    ]
                },
                callback: function(response) {
                    if (response.status == "success") {
                        // Payment was successful
                        // You can send a request to your endpoint here to add the amount
                        // Example:
                        sendRequestToAddAmount(amount);
                        Swal.fire({
                            icon: 'success',
                            title: 'Payment Successful',
                            text: 'Your SMS balance has been updated successfully!'
                        });
                        // You might want to update the SMS balance displayed on the page here
                        document.getElementById("smsBalance").textContent = parseInt(document.getElementById("smsBalance").textContent) + parseInt(amount);
                    } else {
                        // Payment failed
                        Swal.fire({
                            icon: 'error',
                            title: 'Payment Failed',
                            text: 'Sorry, payment was not successful. Please try again later.'
                        });
                    }
                }
            });
            handler.openIframe(); // Open Paystack iframe
        }

        // Function to send request to update balance
        function sendRequestToAddAmount(amount) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://rainlink.netguru.co.ke/update_balance.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                    // You can handle the response if needed
                }
            };
            var data = JSON.stringify({
                amount: amount
            });
            xhr.send(data);
        }
      </script>
</body>
{include file="sections/footer.tpl"}
</html>
