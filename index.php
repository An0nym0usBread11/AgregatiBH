<?php
// File to store count
$counterFile = "visitors.txt";

// Cookie settings
$cookieName = "unique_visitor";

// Check if the cookie is NOT set
if (!isset($_COOKIE[$cookieName])) {
    // Read current count
    $count = (int)file_get_contents($counterFile);
    $count++;

    // Save updated count
    file_put_contents($counterFile, $count);

    // Set cookie so next visit from same device doesn't increment
    setcookie($cookieName, "true");
} else {
    // Read count without incrementing
    $count = (int)file_get_contents($counterFile);
}
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregati BH</title>
        <link rel="short icon" href="slike/Kompanija/logo.png" />
        <link rel="stylesheet" href="/TailwindCSS/output.css"/>
    </head>

    <body class="bg-gray-50">
        <!-- Navigation -->
        <nav class="bg-white shadow-md fixed w-full z-50">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-800 font-bold text-xl">
                            <a href="#home">
                                <img src="slike/Kompanija/biglogo.png" style="height: 1.2cm; width: 6cm;">
                            </a>
                        </span>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex space-x-8">
                        <a href="#home" class="text-gray-700 hover:text-amber-600 font-medium transition-colors">Početak</a>
                        <a href="#about" class="text-gray-700 hover:text-amber-600 font-medium transition-colors">O&nbsp;nama</a>
                        <a href="#products" class="text-gray-700 hover:text-amber-600 font-medium transition-colors">Proizvodi</a>

                        <div class="relative group">
                            <button class="text-gray-700 hover:text-amber-600 font-medium transition-colors flex items-center">
                                Naše&nbsp;usluge
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                                <div class="py-2 px-4">
                                    <a href="#delivery" class="block py-2 text-sm text-gray-700 hover:text-amber-600 transition-colors">Dostava</a>
                                    <a href="#consulting" class="block py-2 text-sm text-gray-700 hover:text-amber-600 transition-colors">Konsultacije</a>
                                    <a href="#quality-testing" class="block py-2 text-sm text-gray-700 hover:text-amber-600 transition-colors">Servis proizvoda</a>
                                    <a href="#custom-orders" class="block py-2 text-sm text-gray-700 hover:text-amber-600 transition-colors">Planiranje</a>
                                </div>
                            </div>
                        </div>
                        <a href="#contact" class="text-gray-700 hover:text-amber-600 font-medium transition-colors">Kontakt</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-500 hover:text-amber-600 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div id="mobile-menu" class="md:hidden hidden pb-4">
                    <a href="#home" class="block py-2 text-gray-700 hover:text-amber-600 font-medium">Početak</a>
                    <a href="#about" class="block py-2 text-gray-700 hover:text-amber-600 font-medium">O nama</a>
                    <a href="#products" class="block py-2 text-gray-700 hover:text-amber-600 font-medium">Proizvodi</a>

                    <div class="relative">
                        <button id="mobile-dropdown-button" class="flex justify-between items-center w-full py-2 text-gray-700 hover:text-amber-600 font-medium">
                            Naše&nbsp;usluge
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div id="mobile-dropdown" class="hidden pl-4 border-l-2 border-gray-200 ml-2 mt-1">
                            <a href="#delivery" class="block py-2 text-sm text-gray-700 hover:text-amber-600">Dostava</a>
                            <a href="#consulting" class="block py-2 text-sm text-gray-700 hover:text-amber-600">Konsultacije</a>
                            <a href="#quality-testing" class="block py-2 text-sm text-gray-700 hover:text-amber-600">Servis proizvoda</a>
                            <a href="#custom-orders" class="block py-2 text-sm text-gray-700 hover:text-amber-600">Planiranje</a>
                        </div>
                    </div>
                    <a href="#contact" class="block py-2 text-gray-700 hover:text-amber-600 font-medium">Kontakt</a>
                </div>
            </div>
        </nav>
        
        <!-- Hero Section -->
        <section id="home" class="hero-bg pt-28 pb-20 md:pt-32 md:pb-24">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0 slide-in">

                        <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-4">Glavni distributer agregata, UPS uređaja, invertera u BiH</h1>
                        <p class="text-gray-200 text-lg mb-8">Uvoz, servis i prodaja najefikasnijih agregata na području BiH</p>

                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href="#products" class="btn-primary text-white font-medium py-3 px-6 rounded-md text-center">Naši proizvodi</a>
                            <a href="#contact" class="bg-transparent border-2 border-white text-white font-medium py-3 px-6 rounded-md hover:bg-white hover:text-gray-800 transition-all duration-300 text-center">Kontaktirajte nas</a>
                        </div>

                    </div>
                    <div class="md:w-1/2 md:pl-10 animate-float">
                        <div class="rounded-lg shadow-lg"><img class=" w-full rounded-lg" src="slike/reklame/mini-reklama.png"></div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- About Section -->
        <section id="about" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Agregati BH</h2>
                    <div class="w-20 h-1 bg-amber-500 mx-auto"></div>
                </div>

                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-10">
                        <div class="w-full"><img src="slike/Uredjaji/fmt-bigsection.png" class="fmt-reklama"></div>
                    </div>

                    <!--Description-->
                    <div class="md:w-1/2 fade-in" style="opacity: 1;">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Vaš pouzdani distributer i serviser agregata</h3>
                        <p class="text-gray-600 mb-4">
                            Sa iskusnim osobljem i vrhunskom opremom, izdvajamo se kao jedna od najnaprednijih firmi u ovom polju.
                            Pored servisa i prodaje, spremni smo pružiti našim kupcima podršku. 
                        </p>
                        <p class="text-gray-600 mb-6">
                            Vodimo brigu o kvaliteti, ispravnosti i efikasnosti naših uređaja, kao i zadovoljstvu naših kupaca.
                            Stoga smo najbolji izbor za firme, domaćinstva i individualne kupce.
                        </p>

                        <!--Why we are the best-->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex items-start">
                                <div class="bg-amber-100 p-2 rounded-md mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="font-medium text-gray-800">Kvalitetni Materijali</h4>
                                    <p class="text-sm text-gray-600">Temeljito testirani uređaji za ispravnost</p>
                                </div>

                            </div>
                            <div class="flex items-start">
                                <div class="bg-amber-100 p-2 rounded-md mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1v-1h5.05a2.5 2.5 0 014.9 0H20a1 1 0 001-1V5a1 1 0 00-1-1H3z"></path>
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="font-medium text-gray-800">Brza Dostava</h4>
                                    <p class="text-sm text-gray-600">Dostavljamo na vrijeme na vašu adresu</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-amber-100 p-2 rounded-md mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="font-medium text-gray-800">Iskusno Osoblje</h4>
                                    <p class="text-sm text-gray-600">Nudimo profesionalno savjetovanje</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-amber-100 p-2 rounded-md mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="font-medium text-gray-800">Povoljna Cijena</h4>
                                    <p class="text-sm text-gray-600">Najbolja vrijednost za vaše ulaganje</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Products Section -->
        <section id="products" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Naši proizvodi</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Nudimo vam najpovoljnije uređaje za vaše potrebe</p>
                    <div class="w-20 h-1 bg-amber-500 mx-auto mt-4"></div>
                </div>

                <!-- Agregati -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div><img src="slike\Uredjaji\Fmt-Agregat.png" style="margin-left: auto; margin-right: auto"></div> 
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Agregati</h3>
                            <p class="text-gray-600 mb-4">Idealni za veće firme ili stambene objekte</p>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-amber-600 font-medium">Svjetski Brendovi</span>
                                <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-md transition-colors">Više Detalja</button>
                            </div>
                        </div>
                    </div>

                    <!-- UPS uređaji -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div><img src="slike\Uredjaji\Fmt-UPS.png" style="margin-left: auto; margin-right: auto; height:265px;"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">UPS Uređaji</h3>
                            <p class="text-gray-600 mb-4">Idealni za domaćinstvo, manje objekte, vrlo korisni u data-centrima u slučaju nestanka struje</p>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-amber-600 font-medium">Kvalitetni i Ispravni</span>
                                <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-md transition-colors">Više Detalja</button>
                            </div>
                        </div>
                    </div>

                    <!-- Inverteri -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div><img src="slike/Uredjaji/Fmt-Inverter.png" style="margin-left: auto; margin-right: auto; height:260px;"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Inverteri</h3>
                            <p class="text-gray-600 mb-4">Odličan izbor za data-centre. Moguća je kombinacija uz naše UPS uređaje</p>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-amber-600 font-medium">Kompatibilnost</span>
                                <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-md transition-colors">Više Detalja</button>
                            </div>
                        </div>
                    </div>

                    <!-- Stabilizatori napona -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div><img src="slike\Uredjaji\Fmt-Stabilizer.png"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Stabilizatori Napona</h3>
                            <p class="text-gray-600 mb-4">Riješite vaše probleme sa naponom koristeći naše Stabilizatore napona</p>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-amber-600 font-medium">Visoka Efikasnost</span>
                                <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-md transition-colors">Više Detalja</button>
                            </div>
                        </div>
                    </div>

                    <!-- Transformatori -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div><img src="slike/Uredjaji/Fmt-Transformator.png" style="margin-left: auto; margin-right: auto; height:8cm"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Transformatori</h3>
                            <p class="text-gray-600 mb-4">Profesionalni industrijski tip transformatora, najefikasniji na tržištu</p>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-amber-600 font-medium">Najpovoljnije Cijene</span>
                                <button class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-md transition-colors">Više Detalja</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="#contact" class="btn-primary text-white font-medium py-3 px-8 rounded-md inline-block">Započni razgovor</a>
                </div>
            </div>
        </section>
    
        <!-- Services Section -->
        <section id="services" class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Naše Usluge</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Šta možete očekivati od nas?</p>
                    <div class="w-20 h-1 bg-amber-500 mx-auto mt-4"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <!-- Delivery -->
                    <div id="delivery" class="bg-gray-50 rounded-lg p-8 fade-in" style="opacity: 1;">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Dostava na adresu</h3>
                        </div>
                        
                        <p class="text-gray-600 mb-4">
                            Dostavljamo vaše narudžbe direktno na adresu objekta. 
                            Garantujemo sigurnost transporta vaše narudžbe.
                        </p>
                        
                        <!-- Delivery benefits -->
                        <ul class="space-y-2 mb-6">

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Brze i sigurne dostave</span>
                            </li>
                            
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Fleksibilne opcije za vrijeme dostavljanja</span>
                            </li>
                        </ul>
                    </div>

                    <!-- customer service -->
                    <div id="consulting" class="bg-gray-50 rounded-lg p-8 fade-in" style="animation-delay: 0.2s; opacity: 1;">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Konsultovanje</h3>
                        </div>

                        <p class="text-gray-600 mb-4">
                            Nešto nije kako ste zamislili ili imate neku nejasnoću? 
                            Nudimo vam opciju uživo ili online konsultovanja sa našim timom.
                        </p>

                        <!-- Customer service benefits -->
                        <ul class="space-y-2 mb-6">

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Konsultacije uživo u našoj poslovnici</span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Mogućnost konsultovanja preko telefona</span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Iskustvo osoblja sa kojim razgovarate</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Upkeep -->
                    <div id="quality-testing" class="bg-gray-50 rounded-lg p-8 fade-in" style="animation-delay: 0.4s; opacity: 1;">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Servisiranje i održavanje</h3>
                        </div>

                        <p class="text-gray-600 mb-4">
                            Vršimo redovno održavanje proizvoda svih naših kupaca. 
                            U slučaju kvara reagujemo brzo i promišljeno.
                        </p>

                        <!-- upkeep benefits -->
                        <ul class="space-y-2 mb-6">

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Povoljna cijena servisa</span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Servisiranje na terenu</span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Vodimo brigu o redovnom održavanju</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Smart planning -->
                    <div id="custom-orders" class="bg-gray-50 rounded-lg p-8 fade-in" style="animation-delay: 0.6s; opacity: 1;">
                        <div class="flex items-center mb-4">
                            <div class="bg-amber-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">Precizno planiranje</h3>
                        </div>

                        <p class="text-gray-600 mb-4">
                            Razumijemo da je svaki projekat specifičan, 
                            stoga prije izrade vršimo temeljito planiranje u vidu smanjenja troškova, 
                            odabira najprikladnijeg proizvoda...
                        </p>

                        <!-- Smart planning -->
                        <ul class="space-y-2 mb-6">

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Precizno planiranje i dogovaranje uživo</span>
                            </li>

                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Fleksibilnost naših uposlenika tokom planiranja i izrade</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Contact Section -->
        <section id="contact" class="py-16 md:py-24 bg-gray-50">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Kontaktirajte nas</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">
                        Pored agregata, UPS uređaja, transformatora i ostalih uređaja u ponudi,<br> 
                        spremni smo vam pružiti i vrhunsku podršku.
                    </p>
                    <div class="w-20 h-1 bg-amber-500 mx-auto mt-4"></div>
                </div>

                    <!--contact info-->
                    <div style="margin-left: auto; margin-right: auto;" class="lg:w-1/2">
                        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Kontakt</h3>
                            <div class="space-y-4">
                                <!--Address-->
                                <div class="flex items-start">
                                <div class="bg-amber-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
    
                                    <div>
                                        <h4 class="font-medium text-gray-800">Adresa</h4>
                                        <a class="text-gray-600 location" href="https://maps.app.goo.gl/9A3vh3X52qAyvyub9" target="_blank">&nbsp; <u>Josipa Slavenskog bb, Sarajevo</u> &nbsp;</a>
                                    </div>
                                </div>

                                <!--Phone number-->
                                <div class="flex items-start">
                                    <div class="bg-amber-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                        </svg>
                                    </div>

                                    <div>
                                        <h4 class="font-medium text-gray-800">Telefon</h4>
                                        <span class="text-gray-600 file-path">&nbsp; +387 62 182 000 &nbsp;</span>
                                    </div>
                                </div>

                                <!--Email-->
                                <div class="flex items-start">
                                    <div class="bg-amber-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                    </div>

                                    <div>
                                        <h4 class="font-medium text-gray-800">E-mail</h4>
                                        <span class="text-gray-600 folder-path">&nbsp; agregatibh@gmail.com &nbsp;</span>
                                    </div>
                                </div>

                                <!--Working hours-->
                                <div class="flex items-start">
                                    <div class="bg-amber-100 p-3 rounded-full mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
      
                                    <div>
                                        <h4 class="font-medium text-gray-800">Radno vrijeme</h4>
                                        <p class="text-gray-600">Ponedjeljak - Petak:<b>&ensp;9:00 - 17:00</b></p>
                                        <p class="text-gray-600">Subota:<b>&ensp;Zatvoreno</b></p>
                                        <p class="text-gray-600">Nedjelja:<b>&ensp;Zatvoreno</b></p>
                                    </div>
                                </div>
                            
                                <!--Socials-->
                                <h3 class="text-2xl font-semibold text-gray-800 mb-6" style="margin-top:50px;">Zapratite nas</h3>
                                <div class=" flex items-start">
                                    <div class="flex space-x-4">
                                        <a href="https://www.facebook.com/profile.php?id=61575506717186" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition-colors" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                                            </svg>
                                        </a>

                                        <a href="https://www.instagram.com/agregati_bh/" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition-colors" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                            </svg>
                                        </a>

                                        <a href="https://www.linkedin.com/in/agregatibh/" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition-colors" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Visitor counter--> 
                <div class="bg-white rounded-lg shadow-md p-8" style="margin-left:auto; margin-right: auto; width: max-content;">         
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Broj posjetitelja: <?php echo $count; ?></h2>
                </div>
            </div>
        </section>
    
        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4 md:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center space-x-2 mb-6">
                            <div class="w-10 h-10 bg-amber-600 rounded-md flex items-center justify-center">
                                <span class="text-white font-bold text-xl"><img src="slike/Kompanija/whitelogo.png" style="width:100%; height:100%"></span>
                            </div>
                            <span class="text-white font-bold text-xl">Agregati BH</span>
                        </div>
                        
                        <p class="text-gray-300 mb-6">Vaš pouzdani distributer i serviser <br>agregata u Bosni i Hercegovini.</p>
                        
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/profile.php?id=61575506717186" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                                </svg>
                            </a>

                            <a href="https://www.instagram.com/agregati_bh/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                </svg>
                            </a>

                            <a href="https://www.linkedin.com/in/agregatibh/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!--Footer quick links-->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Pogledajte</h3>
                        <ul class="space-y-3">
                            <li><a href="#home" class="text-gray-300 hover:text-white transition-colors">Početak</a></li>
                            <li><a href="#about" class="text-gray-300 hover:text-white transition-colors">O nama</a></li>
                            <li><a href="#products" class="text-gray-300 hover:text-white transition-colors">Proizvodi</a></li>
                            <li><a href="#services" class="text-gray-300 hover:text-white transition-colors">Servisne usluge</a></li>
                            <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors">Kontakt informacije</a></li>
                        </ul>
                    </div>

                    <!--Footer services-->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Servisne usluge</h3>
                        <ul class="space-y-3">
                            <li><a href="#delivery" class="text-gray-300 hover:text-white transition-colors">Dostava</a></li>
                            <li><a href="#consulting" class="text-gray-300 hover:text-white transition-colors">Konsultacije</a></li>
                            <li><a href="#quality-testing" class="text-gray-300 hover:text-white transition-colors">Servis proizvoda</a></li>
                            <li><a href="#custom-orders" class="text-gray-300 hover:text-white transition-colors">Planiranje</a></li>
                        </ul>
                    </div>

                    <!--Footer contact info-->
                    <div>
                        <h3 class="text-lg font-semibold mb-6">Kontakt informacije</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <a class="text-gray-300 location" href="https://maps.app.goo.gl/9A3vh3X52qAyvyub9" target="_blank">&nbsp; <u>Josipa Slavenskog bb, Sarajevo</u> &nbsp;</a>
                            </li>

                            <li class="flex items-start">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>

                                <butotn class="text-gray-300 file-path">&nbsp; +387 62 182 000 &nbsp;</button>
                            </li>

                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                <span class="text-gray-300 folder-path">&nbsp; agregatibh@gmail.com &nbsp;</span>
                            </li>
                        </ul>
                    </div>
                </div>

            <!--Bottom of page copyrights-->
                <div class="border-t border-gray-700 mt-10 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 mb-4 md:mb-0">© 2025 Agregati BH</p>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 mb-4 md:mb-0">Made by CodeX</p>
                    </div>
                </div> 
                </div>
            </div>
        </footer>
    <script src="script.js"></script>
    </body>
</html>