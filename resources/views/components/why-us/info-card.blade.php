@props(['icon' =>'','title'=>'','description'=>''])

<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->


    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
        <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center mb-6">
            <i class="fa-solid fa-{{ $icon }} text-xl"></i>
        </div>
        <h3 class="text-xl font-bold text-slate-800 mb-4">{{ $title }}</h3>
        <p class="text-slate-500 text-sm leading-relaxed">{{ $description }}</p>
    </div>

</div>
