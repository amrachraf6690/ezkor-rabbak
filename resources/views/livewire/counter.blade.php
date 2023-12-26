<div class="container center d-flex" wire:poll.50ms>
        <div class="square">
            <h1>و اذكر ربك</h1>
            @if(session('count'))
                <h1 class="mt-2 rounded-pill border border-light p-2">{{ session('count') }}</h1>   
             @else
                <h1 class="mt-2 rounded border border-light p-2">0</h1>
            @endif
            <h4></h4>
            <div class="btn-group"> 
                <button class="btn btn-m btn-light rounded-pill m-2" wire:click="plus">+</button>
                <button class="btn btn-m btn-light rounded-pill m-2" wire:click="minus">-</button>
                <button class="btn btn-m btn-dark rounded-pill m-2" wire:click="resetcount">إعادة تهيئة</button>
            </div>

            @if(session('count') == 99)
            <div class="btn-group text-light text-center mt-3 rounded border border-light p-2"> 
                ﴾ اللَّهُ لَا إِلَهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ لَا تَأْخُذُهُ سِنَةٌ وَلَا نَوْمٌ لَهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الْأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلَّا بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلَا يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلَّا بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالْأَرْضَ وَلاَ يَؤُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ ﴾
                [ البقرة: 255]
                <br>
            </div>
            <audio controls autoplay class="mt-2">
                <source id=mp3ppl src={{asset('002255.mp3')}} type=audio/mpeg>
                Your browser does not support the audio element.
            </audio>
            @else
            <div class="btn-group text-light text-center mt-3 rounded border border-light p-2"> 
                <span></p  class="text-lg">@lang('dates.days.'.now()->format('D')) ({{now()->format('d')}}-@lang('dates.months.'.now()->format('M')))</p>
                <p class="text-light">{{now()->format('h:i:s')}}</p></span>
            </div>
            @endif
            
        </div>
        @if(session('message'))
        <script>
        Toastify({
            text: "{{session('message')}}",
            className: "info",
            style: {
                background: "linear-gradient(142deg, rgba(238,174,202,1) 0%, rgba(80,160,255,1) 100%)",
            }
        }).showToast();
        </script>     
    @endif
</div>



