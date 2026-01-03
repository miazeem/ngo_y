<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    @props(['stats'=>[]])
    <section>
            <div class="max-w-5xl mx-auto py-10 px-4 -mt-20 bg-gray-300 rounded-t-4xl">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                    @foreach ( $stats as $stat )

                        <div class="bg-white p-6 rounded-lg shadow text-center">
                            <h3 class=" text-6xl font-semibold mb-4 text-blue-600">{{ $stat['description'] }}</h3>
                             <p class="text-sm text-gray-500">{{ $stat['title'] }}</p>
                        </div>
                        
                        
                    @endforeach
                   
                   
                </div>
            </div>
        </section>
</div>