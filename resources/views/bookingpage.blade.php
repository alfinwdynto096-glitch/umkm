<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-primary-fixed-variant": "#00531a",
                      "surface-container-high": "#e8e8e8",
                      "on-tertiary-container": "#1b3100",
                      "primary-fixed-dim": "#66df75",
                      "surface-tint": "#006e25",
                      "error": "#ba1a1a",
                      "on-tertiary-fixed": "#102000",
                      "on-tertiary": "#ffffff",
                      "surface-dim": "#dadada",
                      "on-error": "#ffffff",
                      "on-secondary-fixed-variant": "#474746",
                      "on-secondary-container": "#636262",
                      "tertiary-fixed-dim": "#91db2a",
                      "on-primary-fixed": "#002106",
                      "error-container": "#ffdad6",
                      "surface-container-lowest": "#ffffff",
                      "outline-variant": "#bdcab9",
                      "surface-container-low": "#f3f3f4",
                      "outline": "#6e7b6b",
                      "on-surface-variant": "#3e4a3c",
                      "secondary-fixed-dim": "#c8c6c5",
                      "on-background": "#1a1c1c",
                      "on-tertiary-fixed-variant": "#304f00",
                      "on-error-container": "#93000a",
                      "surface-bright": "#f9f9f9",
                      "secondary": "#5f5e5e",
                      "secondary-fixed": "#e5e2e1",
                      "secondary-container": "#e2dfde",
                      "inverse-primary": "#66df75",
                      "on-primary-container": "#00330d",
                      "tertiary-container": "#66a200",
                      "tertiary": "#416900",
                      "surface-variant": "#e2e2e2",
                      "inverse-surface": "#2f3131",
                      "background": "#f9f9f9",
                      "on-surface": "#1a1c1c",
                      "primary": "#006e25",
                      "inverse-on-surface": "#f0f1f1",
                      "primary-fixed": "#83fc8e",
                      "primary-container": "#28a745",
                      "tertiary-fixed": "#acf847",
                      "on-secondary": "#ffffff",
                      "surface-container-highest": "#e2e2e2",
                      "surface-container": "#eeeeee",
                      "surface": "#f9f9f9",
                      "on-primary": "#ffffff",
                      "on-secondary-fixed": "#1c1b1b"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "gutter": "1.5rem",
                      "stack-md": "1rem",
                      "base": "8px",
                      "container-max": "1320px",
                      "section-padding": "5rem",
                      "stack-sm": "0.5rem",
                      "stack-lg": "2rem"
              },
              "fontFamily": {
                      "label-bold": ["Lexend"],
                      "body-md": ["Lexend"],
                      "button": ["Lexend"],
                      "h2": ["Lexend"],
                      "body-lg": ["Lexend"],
                      "h1": ["Lexend"],
                      "h3": ["Lexend"]
              },
              "fontSize": {
                      "label-bold": ["14px", {"lineHeight": "1.2", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "button": ["16px", {"lineHeight": "1", "fontWeight": "700"}],
                      "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                      "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "700"}]
              }
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-background font-body-md text-on-background">
<!-- Top Navigation Shell -->
<header class="bg-white/90 dark:bg-zinc-950/90 backdrop-blur-md fixed top-0 w-full z-50 border-b border-zinc-200 dark:border-zinc-800 shadow-sm">
<div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
<div class="text-2xl font-black italic tracking-tighter text-zinc-950 dark:text-white uppercase">PITCHREADY</div>
<nav class="hidden md:flex gap-8">
<a class="text-green-600 dark:text-green-500 border-b-2 border-green-600 font-lexend font-bold uppercase tracking-wide py-1" href="#">Find a Pitch</a>
<a class="text-zinc-600 dark:text-zinc-400 font-medium font-lexend uppercase tracking-wide hover:text-green-500 transition-colors duration-200 py-1" href="#">Leagues</a>
<a class="text-zinc-600 dark:text-zinc-400 font-medium font-lexend uppercase tracking-wide hover:text-green-500 transition-colors duration-200 py-1" href="#">About Us</a>
</nav>
<div class="flex items-center gap-4">
<button class="hidden md:block text-zinc-600 font-button text-button hover:text-primary transition-all">Login</button>
<button class="bg-primary-container text-on-primary font-button text-button px-6 py-2 uppercase tracking-tight active:scale-95 transition-transform">Book Now</button>
</div>
</div>
</header>
<main class="pt-24 pb-20 md:pb-12 max-w-7xl mx-auto px-4 md:px-8">
<!-- Progress Stepper -->
<div class="flex items-center justify-center mb-12 overflow-x-auto scrollbar-hide py-4">
<div class="flex items-center gap-4 min-w-max">
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-sm">1</span>
<span class="font-label-bold text-label-bold text-primary">Pitch Selection</span>
</div>
<div class="w-12 h-px bg-outline"></div>
<div class="flex items-center gap-2">
<span class="w-8 h-8 rounded-full border-2 border-primary text-primary flex items-center justify-center font-bold text-sm">2</span>
<span class="font-label-bold text-label-bold text-primary">Details</span>
</div>
<div class="w-12 h-px bg-outline-variant"></div>
<div class="flex items-center gap-2 opacity-50">
<span class="w-8 h-8 rounded-full border-2 border-outline text-outline flex items-center justify-center font-bold text-sm">3</span>
<span class="font-label-bold text-label-bold text-outline">Payment</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Left Column: Booking Form -->
<div class="lg:col-span-8 space-y-8">
<!-- Section: Field Selection -->
<section class="bg-surface-container-lowest border border-outline-variant p-6 md:p-8">
<h2 class="font-h3 text-h3 mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">sports_soccer</span> Select Your Pitch
                    </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="relative group">
<input checked="" class="hidden peer" id="pitch1" name="pitch" type="radio"/>
<label class="block border-2 border-outline-variant peer-checked:border-primary cursor-pointer transition-all hover:shadow-md" for="pitch1">
<img class="w-full h-40 object-cover" data-alt="professional artificial turf mini soccer pitch with bright white lines and stadium lighting at night" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9GDRS27s6IUkJkZj2OL0dRFcGaNWHX7wCJ5sVNGXpCK7LepaI7hi2XEoaJdKUW8FpdCloyT0MDo66UlBqZXWzXoJ5w45wl2A1JDyubRxFdWvE5lLFek0u4i9zD-I3Y44eKYVB0C7T4W7KnjeDCCOFHbjnlwH_lp32c505io0onkwPCuWssToEhd_Yn1Slb3xkFFlMMG-LOAJouzHRBVnPC5upxNFMp-NAuRTWZUuxUoPw6HqBh1uUVOKN-2dleyMusi9KUlnD-pM"/>
<div class="p-4 bg-white">
<div class="flex justify-between items-start mb-2">
<h4 class="font-label-bold text-label-bold">Stadium Elite A</h4>
<span class="bg-primary/10 text-primary px-2 py-0.5 text-[10px] font-bold uppercase">5 vs 5</span>
</div>
<p class="text-xs text-secondary mb-4">Indoor, High-grade artificial turf</p>
<div class="flex justify-between items-center bg-zinc-950 p-2 -mx-4 -mb-4">
<span class="text-white font-bold text-sm px-2">$45.00/hr</span>
<span class="material-symbols-outlined text-primary px-2">check_circle</span>
</div>
</div>
</label>
</div>
<div class="relative group">
<input class="hidden peer" id="pitch2" name="pitch" type="radio"/>
<label class="block border-2 border-outline-variant peer-checked:border-primary cursor-pointer transition-all hover:shadow-md" for="pitch2">
<img class="w-full h-40 object-cover" data-alt="outdoor mini soccer pitch under floodlights with vibrant green grass and dark evening sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjLR_bKUsEVayTBiLfDffJa89BcVmXWUj_5s63mLJELD_DL77Y2WKHs5jRGkzQIKSbgy-cFHae5651jPpLClquwfk87YGMDoC_axrptmcxwBgNbGuCntGlL_Jtw15xf2JMqE-5AdmFuhZnB-8uMqRc2EFwrzF7MZFrng8x_lrHuwt_mso5lByTU-gFXRkg5lkgLPRAVzCKUYwpKaPAZT7kIt97HEoKnHCsYXHq6BzRFcVAOu9py-2pBIjGTcERR_H62NATRrhVOnQ"/>
<div class="p-4 bg-white">
<div class="flex justify-between items-start mb-2">
<h4 class="font-label-bold text-label-bold">Open Air Field B</h4>
<span class="bg-primary/10 text-primary px-2 py-0.5 text-[10px] font-bold uppercase">7 vs 7</span>
</div>
<p class="text-xs text-secondary mb-4">Outdoor, Floodlights available</p>
<div class="flex justify-between items-center bg-zinc-950 p-2 -mx-4 -mb-4">
<span class="text-white font-bold text-sm px-2">$60.00/hr</span>
<span class="material-symbols-outlined text-white/20 px-2">radio_button_unchecked</span>
</div>
</div>
</label>
</div>
</div>
</section>
<!-- Section: Date & Time -->
<section class="bg-surface-container-lowest border border-outline-variant p-6 md:p-8">
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
<h2 class="font-h3 text-h3 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">calendar_today</span> Choose Schedule
                        </h2>
<div class="flex gap-4">
<div class="flex items-center gap-1.5">
<div class="w-3 h-3 bg-white border border-outline-variant"></div>
<span class="text-[10px] font-bold uppercase text-secondary">Available</span>
</div>
<div class="flex items-center gap-1.5">
<div class="w-3 h-3 bg-zinc-200"></div>
<span class="text-[10px] font-bold uppercase text-secondary">Booked</span>
</div>
<div class="flex items-center gap-1.5">
<div class="w-3 h-3 bg-primary"></div>
<span class="text-[10px] font-bold uppercase text-secondary">Selected</span>
</div>
</div>
</div>
<!-- Date Selection -->
<div class="mb-8">
<label class="block font-label-bold text-label-bold mb-4">Select Date</label>
<div class="flex gap-3 overflow-x-auto scrollbar-hide pb-2">
<button class="flex flex-col items-center min-w-[80px] p-4 bg-primary text-on-primary">
<span class="text-[10px] font-bold uppercase opacity-80">Mon</span>
<span class="text-xl font-black">12</span>
</button>
<button class="flex flex-col items-center min-w-[80px] p-4 border border-outline-variant hover:bg-surface-container transition-colors">
<span class="text-[10px] font-bold uppercase text-secondary">Tue</span>
<span class="text-xl font-black">13</span>
</button>
<button class="flex flex-col items-center min-w-[80px] p-4 border border-outline-variant hover:bg-surface-container transition-colors">
<span class="text-[10px] font-bold uppercase text-secondary">Wed</span>
<span class="text-xl font-black">14</span>
</button>
<button class="flex flex-col items-center min-w-[80px] p-4 border border-outline-variant hover:bg-surface-container transition-colors">
<span class="text-[10px] font-bold uppercase text-secondary">Thu</span>
<span class="text-xl font-black">15</span>
</button>
<button class="flex flex-col items-center min-w-[80px] p-4 border border-outline-variant hover:bg-surface-container transition-colors">
<span class="text-[10px] font-bold uppercase text-secondary">Fri</span>
<span class="text-xl font-black">16</span>
</button>
</div>
</div>
<!-- Time Slots Grid -->
<div>
<label class="block font-label-bold text-label-bold mb-4">Available Time Slots</label>
<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
<!-- Slot Available -->
<button class="p-4 border-2 border-primary bg-primary text-white font-bold text-sm text-center">18:00 - 19:00</button>
<!-- Slot Booked -->
<div class="p-4 border-2 border-zinc-100 bg-zinc-100 text-zinc-400 font-bold text-sm text-center cursor-not-allowed line-through">19:00 - 20:00</div>
<button class="p-4 border-2 border-outline-variant hover:border-primary transition-all font-bold text-sm text-center">20:00 - 21:00</button>
<button class="p-4 border-2 border-outline-variant hover:border-primary transition-all font-bold text-sm text-center">21:00 - 22:00</button>
<button class="p-4 border-2 border-outline-variant hover:border-primary transition-all font-bold text-sm text-center">22:00 - 23:00</button>
<div class="p-4 border-2 border-zinc-100 bg-zinc-100 text-zinc-400 font-bold text-sm text-center cursor-not-allowed line-through">23:00 - 00:00</div>
</div>
</div>
</section>
<!-- Section: Contact Info -->
<section class="bg-surface-container-lowest border border-outline-variant p-6 md:p-8">
<h2 class="font-h3 text-h3 mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person</span> Contact Details
                    </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="relative">
<label class="block text-[10px] font-bold uppercase text-primary mb-1 ml-1">Full Name</label>
<input class="w-full bg-surface-container-low border-none border-b-2 border-outline-variant focus:border-primary focus:ring-0 font-body-md py-3 px-4 transition-all" placeholder="John Doe" type="text"/>
</div>
<div class="relative">
<label class="block text-[10px] font-bold uppercase text-primary mb-1 ml-1">Phone Number</label>
<input class="w-full bg-surface-container-low border-none border-b-2 border-outline-variant focus:border-primary focus:ring-0 font-body-md py-3 px-4 transition-all" placeholder="+1 (555) 000-0000" type="tel"/>
</div>
</div>
</section>
</div>
<!-- Right Column: Booking Summary -->
<div class="lg:col-span-4">
<div class="sticky top-28 bg-zinc-950 text-white p-8 border border-zinc-800">
<h3 class="font-h3 text-h3 mb-8 border-b border-zinc-800 pb-4 uppercase tracking-tight">Booking Summary</h3>
<div class="space-y-6">
<div class="flex justify-between items-start">
<div>
<p class="text-[10px] font-bold uppercase text-primary">Pitch</p>
<p class="font-label-bold">Stadium Elite A</p>
</div>
<span class="material-symbols-outlined text-zinc-500">sports_soccer</span>
</div>
<div class="flex justify-between items-start">
<div>
<p class="text-[10px] font-bold uppercase text-primary">Date &amp; Time</p>
<p class="font-label-bold">Mon, Dec 12 • 18:00 - 19:00</p>
</div>
<span class="material-symbols-outlined text-zinc-500">event</span>
</div>
<div class="pt-6 border-t border-zinc-800 space-y-2">
<div class="flex justify-between text-sm">
<span class="text-zinc-400">Pitch Rental</span>
<span>$45.00</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-zinc-400">Service Fee</span>
<span>$2.50</span>
</div>
</div>
<div class="pt-4 border-t border-zinc-800 flex justify-between items-end">
<span class="text-[10px] font-bold uppercase text-primary">Total Amount</span>
<span class="text-3xl font-black text-white">$47.50</span>
</div>
</div>
<button class="w-full bg-primary hover:bg-green-700 text-white font-button text-button py-5 mt-8 transition-all active:scale-[0.98] uppercase tracking-widest">
                        Proceed to Checkout
                    </button>
<p class="text-[10px] text-zinc-500 text-center mt-6 uppercase leading-relaxed">
                        By clicking "Proceed to Checkout" you agree to our Terms of Play and Cancellation Policy.
                    </p>
</div>
</div>
</div>
</main>
<!-- Footer Shell -->
<footer class="bg-zinc-950 w-full py-12 border-t border-zinc-900 mt-20">
<div class="flex flex-col md:flex-row justify-between items-center px-8 gap-4 max-w-7xl mx-auto">
<div class="text-lg font-black text-white uppercase tracking-tighter">PITCHREADY</div>
<div class="flex flex-wrap justify-center gap-6">
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all uppercase" href="#">Terms of Play</a>
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all uppercase" href="#">Privacy Policy</a>
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all uppercase" href="#">Contact Support</a>
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all uppercase" href="#">Partner with Us</a>
</div>
<div class="font-lexend text-xs text-zinc-500">© 2024 PITCHREADY. Engineered for the win.</div>
</div>
</footer>
<!-- Bottom Mobile Nav Shell -->
<nav class="lg:hidden fixed bottom-0 w-full border-t z-50 bg-white dark:bg-zinc-950 border-zinc-200 dark:border-zinc-800 shadow-[0_-4px_10px_rgba(0,0,0,0.05)] flex justify-around items-center pt-2 pb-6 px-4">
<a class="flex flex-col items-center text-zinc-400 dark:text-zinc-500 transition-all" href="#">
<span class="material-symbols-outlined">home</span>
<span class="font-lexend text-[10px] font-bold uppercase mt-1">Home</span>
</a>
<a class="flex flex-col items-center text-green-600 dark:text-green-400 scale-110 duration-200 transition-all" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_today</span>
<span class="font-lexend text-[10px] font-bold uppercase mt-1">Book</span>
</a>
<a class="flex flex-col items-center text-zinc-400 dark:text-zinc-500 transition-all" href="#">
<span class="material-symbols-outlined">history</span>
<span class="font-lexend text-[10px] font-bold uppercase mt-1">Activity</span>
</a>
<a class="flex flex-col items-center text-zinc-400 dark:text-zinc-500 transition-all" href="#">
<span class="material-symbols-outlined">person</span>
<span class="font-lexend text-[10px] font-bold uppercase mt-1">Profile</span>
</a>
</nav>
</body></html>