<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PITCHREADY | Arena Manager Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        body {
            font-family: 'Lexend', sans-serif;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body class="bg-background text-on-surface">
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="bg-zinc-950 text-white h-screen w-64 border-r border-zinc-800 hidden lg:flex flex-col py-6 sticky top-0 left-0">
<div class="text-xl font-black text-white px-6 mb-8 uppercase tracking-tighter">
                Arena Manager
            </div>
<div class="px-6 mb-8">
<div class="flex items-center gap-3 p-3 bg-zinc-900 rounded-lg">
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-white overflow-hidden">
<img class="w-full h-full object-cover" data-alt="professional male sports administrator headshot in a studio setting with neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB36TOuSk6P8drXY_XBB_-uBSFUrmR7ThK1lJ2ZHAdbQpaCVYV4EH-ab_m2HuemFGdGOtiwwVIogRxxU2FkutkRu2CI5YPIq0eCkXDvY9GD5TIn5HqeDMcUV295sfxaRbdgnjg0Lo9wTXsBWq416K94ocQyzJx3ASiT-vWJo59PRkrH3LXClQK3UAkF6iJqlHhmedz-8ezT5TXuvJ79LJuwjKqdZolF2Cn8OIDnqGdtEcjaLWndn2Xf3j1VbXm1F1GOvf3YLh3a8fw"/>
</div>
<div>
<div class="text-xs font-bold uppercase text-zinc-400">Elite Sports Center</div>
<div class="text-sm font-medium">Admin Profile</div>
</div>
</div>
</div>
<nav class="flex-grow">
<ul class="space-y-1">
<li>
<a class="flex items-center gap-4 bg-green-600 text-white rounded-r-full mr-4 px-6 py-3 transition-all cursor-pointer" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-lexend text-sm font-medium">Overview</span>
</a>
</li>
<li>
<a class="flex items-center gap-4 text-zinc-400 hover:text-white hover:bg-zinc-900 px-6 py-3 transition-all cursor-pointer" href="#">
<span class="material-symbols-outlined" data-icon="sports_soccer">sports_soccer</span>
<span class="font-lexend text-sm font-medium">Pitch Management</span>
</a>
</li>
<li>
<a class="flex items-center gap-4 text-zinc-400 hover:text-white hover:bg-zinc-900 px-6 py-3 transition-all cursor-pointer" href="#">
<span class="material-symbols-outlined" data-icon="event_available">event_available</span>
<span class="font-lexend text-sm font-medium">Reservations</span>
</a>
</li>
<li>
<a class="flex items-center gap-4 text-zinc-400 hover:text-white hover:bg-zinc-900 px-6 py-3 transition-all cursor-pointer" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span class="font-lexend text-sm font-medium">Revenue</span>
</a>
</li>
<li>
<a class="flex items-center gap-4 text-zinc-400 hover:text-white hover:bg-zinc-900 px-6 py-3 transition-all cursor-pointer" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-lexend text-sm font-medium">Settings</span>
</a>
</li>
</ul>
</nav>
<div class="px-6 mt-auto">
<button class="w-full py-3 bg-green-500 text-zinc-950 font-bold uppercase text-xs rounded hover:bg-green-400 transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="add_circle">add_circle</span>
                    New Tournament
                </button>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-grow lg:pb-0 pb-20">
<!-- Header/TopBar (Simplified for Dashboard) -->
<header class="bg-white/90 backdrop-blur-md border-b border-zinc-200 sticky top-0 z-40 px-6 py-4 flex justify-between items-center max-w-full">
<div class="flex flex-col">
<h1 class="text-h3 font-h3 text-on-surface uppercase tracking-tight">Overview</h1>
<p class="text-label-bold text-secondary font-label-bold">Monday, October 21, 2024</p>
</div>
<div class="flex items-center gap-4">
<div class="relative hidden md:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400" data-icon="search">search</span>
<input class="pl-10 pr-4 py-2 border border-zinc-200 rounded-full text-sm focus:ring-primary focus:border-primary" placeholder="Search bookings..." type="text"/>
</div>
<button class="p-2 rounded-full hover:bg-zinc-100 relative">
<span class="material-symbols-outlined text-zinc-600" data-icon="notifications">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
</div>
</header>
<div class="p-6 md:p-8 space-y-8 max-w-7xl mx-auto">
<!-- Quick Stats Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white border border-zinc-200 p-6 rounded-lg shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-green-100 text-green-700 rounded-lg">
<span class="material-symbols-outlined" data-icon="stadium">stadium</span>
</div>
<span class="text-xs font-bold text-green-600">+12% vs last week</span>
</div>
<p class="text-zinc-500 text-xs font-bold uppercase mb-1">Total Bookings</p>
<h3 class="text-2xl font-black text-on-surface">1,284</h3>
</div>
<div class="bg-white border border-zinc-200 p-6 rounded-lg shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-blue-100 text-blue-700 rounded-lg">
<span class="material-symbols-outlined" data-icon="monetization_on">monetization_on</span>
</div>
<span class="text-xs font-bold text-green-600">+8.4%</span>
</div>
<p class="text-zinc-500 text-xs font-bold uppercase mb-1">Total Revenue</p>
<h3 class="text-2xl font-black text-on-surface">$24,500</h3>
</div>
<div class="bg-white border border-zinc-200 p-6 rounded-lg shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-orange-100 text-orange-700 rounded-lg">
<span class="material-symbols-outlined" data-icon="group">group</span>
</div>
<span class="text-xs font-bold text-zinc-400">Stable</span>
</div>
<p class="text-zinc-500 text-xs font-bold uppercase mb-1">Active Users</p>
<h3 class="text-2xl font-black text-on-surface">432</h3>
</div>
<div class="bg-white border border-zinc-200 p-6 rounded-lg shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-purple-100 text-purple-700 rounded-lg">
<span class="material-symbols-outlined" data-icon="timer">timer</span>
</div>
<span class="text-xs font-bold text-error">-2%</span>
</div>
<p class="text-zinc-500 text-xs font-bold uppercase mb-1">Avg. Slot Time</p>
<h3 class="text-2xl font-black text-on-surface">75m</h3>
</div>
</section>
<!-- Booking Management Table Section -->
<section class="bg-white border border-zinc-200 rounded-lg shadow-sm overflow-hidden">
<div class="px-6 py-5 border-b border-zinc-200 flex flex-col md:flex-row justify-between items-center gap-4">
<div>
<h2 class="text-h3 font-h3 text-on-surface">Active Reservations</h2>
<p class="text-body-md text-secondary font-body-md">Real-time schedule for today's matches.</p>
</div>
<div class="flex gap-2 w-full md:w-auto">
<button class="flex-1 md:flex-none px-4 py-2 bg-white border border-zinc-300 text-zinc-700 font-bold uppercase text-xs rounded hover:bg-zinc-50 transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="filter_list">filter_list</span>
                                Filter
                            </button>
<button class="flex-1 md:flex-none px-4 py-2 bg-primary text-white font-bold uppercase text-xs rounded hover:bg-on-primary-fixed-variant transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                                Add Entry
                            </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-zinc-50 text-zinc-500 text-xs font-black uppercase tracking-wider">
<th class="px-6 py-4 border-b border-zinc-200">User / Team</th>
<th class="px-6 py-4 border-b border-zinc-200">Pitch / Location</th>
<th class="px-6 py-4 border-b border-zinc-200">Time Slot</th>
<th class="px-6 py-4 border-b border-zinc-200">Status</th>
<th class="px-6 py-4 border-b border-zinc-200 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-zinc-100 text-sm">
<tr class="hover:bg-zinc-50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-zinc-200 overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="close-up portrait of a young male soccer player with focused expression" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPr2i9aQQAX7X_hI4eh5_jLjixOYr3HZGDdQVzPjvExXpMxBp_57hCqXpjFlDzyC9N5qoE4m45hj8qgJRS4dwDTqpftAiD7e9fjP0PKV8XRs1KIvCWtwY-sVTRTuyaLbJoRWck3yrj8aXrYbMA-hl_cUN4kazmXxPeIQcl9Esk5xOTetDF_4Ow0AQgc4Ougrv_Q7n-4K8De5zhO6s8JhdE8-tPNqGBE5Pl70Ea1ao2P8s1T1RNafae3aT1DG44DXSFco5UAp02cok"/>
</div>
<div>
<div class="font-bold text-on-surface">Marcus Silva</div>
<div class="text-xs text-zinc-500">FC United Organizers</div>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="font-medium text-zinc-700">Arena A - North Wing</div>
<div class="text-xs text-zinc-400">Indoor Synthetic</div>
</td>
<td class="px-6 py-4">
<div class="font-medium text-zinc-700">18:00 - 19:30</div>
<div class="text-xs text-zinc-400">90 Minutes</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                            Confirmed
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-zinc-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-1.5 text-zinc-400 hover:text-error transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-zinc-50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-zinc-200 overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="close-up portrait of a female soccer coach with a headset in professional athletic gear" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBc0-AzR_WhkCBt7i3jsxAcY7edzNaxrZNcVJdFCArpoSlxGrWX2P1ufHq2iNSqC4Tc2aq5rvcaicbyU5lqPw5AOR8iVfXtQuQG7KO2qRdsDzpgJyESiyGA_p-B8ORXeuL-nEFKPmz3a5UrKW4SWwbckpG7O06raH9cjNAyxqL4KqaCnGvf-mpnFCoJzPsFeHhvZuS1MtVHU1rq_k3yJVC3F9lyhl4v7pPwapbLmB5ze8TA5Wgo6Sz5xJ46NPypgPoLI4HTpX4YX34"/>
</div>
<div>
<div class="font-bold text-on-surface">Elena Rodriguez</div>
<div class="text-xs text-zinc-500">Starlight Academy</div>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="font-medium text-zinc-700">Arena C - Outdoor</div>
<div class="text-xs text-zinc-400">Natural Grass</div>
</td>
<td class="px-6 py-4">
<div class="font-medium text-zinc-700">19:00 - 20:00</div>
<div class="text-xs text-zinc-400">60 Minutes</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-zinc-100 text-zinc-700">
                                            Checked-In
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-zinc-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-1.5 text-zinc-400 hover:text-error transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-zinc-50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-zinc-200 overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="professional male portrait with soft studio lighting and blurred office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7QmJ9N21h2jCCbyfZW2_uGIgZnMSr3BmGBhu6r10G7OCrUgaFDQujKs4E6-A1-zhPg_DCzFJ9n5Rg29A3Zp5dIPZTo41K0ptOeizTgYDxxPvdgTJcEl5s2otS6xjJFKyCjewf-mv8p1qJxRkXDfGADgKxvFzQUISb6YlIdaqfC8GUvQKHC_Fr14Yx6WrWQjs2lUTRjStfp0mFiQldQFeZ-IHludYui7PQAGcDM99TibsTMIjCYoHLTvXLzgBuvBVGcXVlne5CIi4"/>
</div>
<div>
<div class="font-bold text-on-surface">David Chen</div>
<div class="text-xs text-zinc-500">Corporate Cup 2024</div>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="font-medium text-zinc-700">Elite Stadium Pitch</div>
<div class="text-xs text-zinc-400">Hybrid Turf</div>
</td>
<td class="px-6 py-4">
<div class="font-medium text-zinc-700">20:30 - 22:30</div>
<div class="text-xs text-zinc-400">120 Minutes</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
                                            Pending Payment
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-zinc-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="edit">edit</span>
</button>
<button class="p-1.5 text-zinc-400 hover:text-error transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 border-t border-zinc-200 flex justify-between items-center">
<div class="text-xs text-zinc-500 font-medium">Showing 3 of 42 bookings</div>
<div class="flex gap-1">
<button class="px-3 py-1 border border-zinc-200 rounded hover:bg-zinc-50 text-xs font-bold">Prev</button>
<button class="px-3 py-1 bg-primary text-white border border-primary rounded text-xs font-bold">1</button>
<button class="px-3 py-1 border border-zinc-200 rounded hover:bg-zinc-50 text-xs font-bold">2</button>
<button class="px-3 py-1 border border-zinc-200 rounded hover:bg-zinc-50 text-xs font-bold">3</button>
<button class="px-3 py-1 border border-zinc-200 rounded hover:bg-zinc-50 text-xs font-bold">Next</button>
</div>
</div>
</section>
<!-- Analytics & Schedule Preview (Asymmetric Layout) -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Schedule Management Card -->
<div class="lg:col-span-2 bg-zinc-950 text-white rounded-lg p-6 overflow-hidden relative">
<div class="absolute top-0 right-0 w-64 h-64 bg-green-500/10 blur-[100px] rounded-full -mr-20 -mt-20"></div>
<div class="relative z-10 h-full flex flex-col">
<div class="flex justify-between items-center mb-6">
<h3 class="text-h3 font-h3 uppercase tracking-tighter">Pitch Availability</h3>
<button class="text-xs font-bold uppercase text-green-500 hover:underline">View Calendar</button>
</div>
<div class="space-y-4 flex-grow">
<div class="flex items-center gap-4">
<div class="w-24 text-xs font-bold text-zinc-500">PITCH A</div>
<div class="flex-grow grid grid-cols-6 gap-1">
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-zinc-800 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-zinc-800 rounded-sm"></div>
<div class="h-8 bg-zinc-800 rounded-sm"></div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-24 text-xs font-bold text-zinc-500">PITCH B</div>
<div class="flex-grow grid grid-cols-6 gap-1">
<div class="h-8 bg-zinc-800 rounded-sm"></div>
<div class="h-8 bg-zinc-800 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-zinc-800 rounded-sm"></div>
<div class="h-8 bg-zinc-800 rounded-sm"></div>
<div class="h-8 bg-zinc-800 rounded-sm"></div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-24 text-xs font-bold text-zinc-500">PITCH C</div>
<div class="flex-grow grid grid-cols-6 gap-1">
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
<div class="h-8 bg-green-600 rounded-sm"></div>
</div>
</div>
</div>
<div class="mt-8 flex gap-4 text-xs">
<div class="flex items-center gap-2"><div class="w-3 h-3 bg-green-600 rounded-full"></div> Booked</div>
<div class="flex items-center gap-2"><div class="w-3 h-3 bg-zinc-800 rounded-full"></div> Available</div>
</div>
</div>
</div>
<!-- Side Card - Quick Actions -->
<div class="bg-white border border-zinc-200 rounded-lg p-6 shadow-sm">
<h3 class="text-h3 font-h3 text-on-surface mb-6">Upcoming Events</h3>
<div class="space-y-6">
<div class="flex gap-4 border-l-4 border-primary pl-4">
<div>
<div class="text-xs font-black text-primary uppercase">Tomorrow</div>
<div class="font-bold text-on-surface">Regional Qualifiers</div>
<p class="text-xs text-zinc-500">Arena A - Arena B | 08:00 AM</p>
</div>
</div>
<div class="flex gap-4 border-l-4 border-zinc-300 pl-4">
<div>
<div class="text-xs font-black text-zinc-400 uppercase">Oct 24</div>
<div class="font-bold text-on-surface">Night League Finals</div>
<p class="text-xs text-zinc-500">Elite Stadium | 09:00 PM</p>
</div>
</div>
<div class="pt-4 border-t border-zinc-100">
<button class="w-full py-2 bg-zinc-100 hover:bg-zinc-200 text-zinc-700 font-bold uppercase text-xs rounded transition-colors">
                                    Manage Events
                                </button>
</div>
</div>
</div>
</section>
</div>
<footer class="bg-zinc-950 w-full py-12 flex flex-col md:flex-row justify-between items-center px-8 gap-4 mt-12">
<div class="text-lg font-black text-white uppercase tracking-tighter">PITCHREADY</div>
<div class="flex flex-wrap justify-center gap-6">
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all" href="#">Terms of Play</a>
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all" href="#">Privacy Policy</a>
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all" href="#">Contact Support</a>
<a class="font-lexend text-xs text-zinc-500 hover:text-green-500 underline transition-all" href="#">Partner with Us</a>
</div>
<div class="font-lexend text-xs text-zinc-500 text-center">© 2024 PITCHREADY. Engineered for the win.</div>
</footer>
</main>
</div>
<!-- Mobile Bottom NavBar (Only Visible on Mobile) -->
<nav class="lg:hidden fixed bottom-0 w-full bg-white border-t border-zinc-200 z-50 shadow-[0_-4px_10px_rgba(0,0,0,0.05)] flex justify-around items-center pt-2 pb-safe px-4 h-16">
<a class="flex flex-col items-center text-green-600 transition-transform active:scale-110" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="font-lexend text-[10px] font-bold uppercase">Home</span>
</a>
<a class="flex flex-col items-center text-zinc-400 transition-transform active:scale-110" href="#">
<span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
<span class="font-lexend text-[10px] font-bold uppercase">Book</span>
</a>
<a class="flex flex-col items-center text-zinc-400 transition-transform active:scale-110" href="#">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="font-lexend text-[10px] font-bold uppercase">Activity</span>
</a>
<a class="flex flex-col items-center text-zinc-400 transition-transform active:scale-110" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-lexend text-[10px] font-bold uppercase">Profile</span>
</a>
</nav>
</body></html>