<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hope horizon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite('resources/css/app.css', 'resources/js/app.js')

</head>
<body class="font-sans bg-gray-100">
    <header class="sticky top-0 z-50 bg-white">
        <nav class="flex items-center justify-between p-2 bg-gray-100 w-full mx-auto shadow-blue-600">

            {{-- <h3 class="font-semibold">Hope <span class="text-blue-600">Horizon</span> </h3> --}}

            <img src="{{ asset('assets/img/yesdo_logo.jpg') }}" class="h-16" alt="">

            <ul class="flex space-x-4 text-gray-700 font-bold">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Our Causes</a></li>
                <li><a href="">Stories</a></li>
            </ul>

            
            <a href="" class="bg-blue-500 text-white px-4 py-2 rounded-full block">Donate Now</a>
            
        </nav>
    </header>

    <main>



    <section style="background-image: url('{{ asset('assets/img/hero_child1.jpg') }}')" class="h-screen bg-cover bg-center">
        <div class="w-full h-full flex flex-col items-start justify-center text-left text-white p-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Together We Can <br><span class="text-green-600">Heal the World.</span> </h1>
            <p class="text-2xl mb-8">Join millions of people helping to build a sustainable future.<br>We provide education, clean water, and healthcare to those in need.</p>
            <div>
                <a href="" class="bg-blue-500  text-white px-6 py-3 rounded-full text-lg ">View Causes</a>
                <a href="" class="bg-gray-500 opacity-70 text-white px-6 py-3 rounded-full text-lg border-2 border-amber-50">Learn More</a>
            </div>
        </div>

     

    </section>

    <section>
        <div class="max-w-7xl mx-auto py-16 px-4 -mt-32 bg-gray-300 rounded-t-4xl">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h3 class=" text-6xl font-semibold mb-4 text-blue-600">50k+</h3>
                    <p>Lives Impacted</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h3 class="text-6xl font-semibold mb-4  text-green-600">120</h3>
                    <p>Projects Done</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h3 class="text-6xl font-semibold mb-4  text-blue-600">800+</h3>
                    <p>Volunteers</p>
                </div>
                 <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h3 class="text-6xl font-semibold mb-4  text-green-600">15</h3>
                    <p>Years Active</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Why We Do What We Do</h2>
            <p class="text-lg text-gray-600">We believe that every human being deserves a dignified life. Our mission is to
                bridge the
                gap between resources and needs.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6 p-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-leaf text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4">Sustainability</h3>
                <p class="text-slate-500 text-sm leading-relaxed">We focus on long-term solutions, ensuring communities can
                    thrive independently after our projects conclude.</p>
            </div>
        
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                <div class="w-12 h-12 bg-green-50 text-green-500 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-heart-pulse text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4">Healthcare</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Providing essential medicines and health checkups to remote
                    villages where access is scarce.</p>
            </div>
        
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                <div class="w-12 h-12 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-book-open text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-4">Education</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Building schools and providing supplies to ensure every child
                    has the power of knowledge.</p>
            </div>


          
      
    </section>













    </main>
</body>
</html>
