@section('title')
    My Coding Journey | About
@endsection

@section('body')
<div>
    <div class="space-y-2 pb-8 md:space-y-5">
        <h1 class="text-3xl mb-2 font-bold dark:text-white">About</h1>
        <hr>
    </div>
    <div class="flex items-start justify-center">
        <div class="p-4">
            <img src="https://avatars.githubusercontent.com/u/55631515?v=4" alt="" class="rounded-full">
            <div class="flex flex-col items-center">
                <h3 class="pt-4 text-2xl font-bold leading-8 mb-2 tracking-tight">Emad Malekpour</h3>
                <div class="text-gray-500 dark:text-gray-400">Professor of Atmospheric Science</div>
            </div>
        </div>
        <div class="prose max-w-none p-6 dark:prose-dark">
            <p>Tails Azimuth is a professor of
                atmospheric sciences at the Stanford AI Lab. His research interests includes complexity modelling of
                tailwinds, headwinds and crosswinds.
            </p>
            <p>He leads the clean energy group which develops 3D air pollution-climate models, writes differential
                equation solvers, and manufactures titanium plated air ballons. In his free time he bakes raspberry
                pi.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque elit, tristique placerat feugiat
                ac, facilisis vitae arcu. Proin eget egestas augue. Praesent ut sem nec arcu pellentesque aliquet.
                Duis dapibus diam vel metus tempus vulputate.
            </p>
        </div>
    </div>
</div>
@endsection
