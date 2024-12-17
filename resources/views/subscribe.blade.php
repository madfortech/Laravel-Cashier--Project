<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscribe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="" class="bg-gray-300 p-3 px-5">
                        <input id="card-holder-name" class="w-full mb-3 border rounded-full px-2 py-2" type="text" placeholder="Card holder name">
 
                        <!-- Stripe Elements Placeholder -->
                        <div id="card-element" class="w-full mb-3 border  py-5 rounded-full"></div>
                 
                        <button id="card-button" class="bg-gray-700 border rounded-full px-5 py-2 text-white">
                            Process Payment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
       <script src="https://js.stripe.com/v3/"></script>
       <script>
            const stripe = Stripe('pk_test_51ORYMvSEDfwL5yh1doyU8GcrNFP14LxnZ5kC6rqHwiXSNlDzlGidPvfDUm1wbGRgl4GqPog49NuE3Ak7xpajAgZP00tciZyxHF');
        
            const elements = stripe.elements({
                
            });
            const cardElement = elements.create('card');
        
            cardElement.mount('#card-element');

            
        </script>
    @endpush
</x-app-layout>
