<x-app-layout>
    <section class="bg-white">
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
                    aria-hidden="true">
                    <defs>
                        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
                            patternUnits="userSpaceOnUse">
                            <path d="M100 200V.5M.5 .5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path
                            d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                            stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0"
                        fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                </svg>
            </div>
            <div class="mx-auto gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:items-start lg:gap-y-10">
                <div class="lg:mx-auto lg:w-full lg:max-w-7xl lg:gap-x-8 lg:px-8 mt-10">
                    <div class="lg:pr-4">
                        <div class="w-full ml-5 mb-5">
                            <p class="text-base font-semibold leading-7 text-indigo-600">{{ $post->category->name }}</p>
                            <h1 class="mt-2 text-3xl w-3/4 font-bold tracking-tight text-gray-900 sm:text-4xl">
                                {{ $post->title }}</h1>
                            <div class="flex items-center mt-6 mb-10">
                                <img class="object-cover object-center w-8 h-8 2xl:w-10 2xl:h-10 rounded-full"
                                    src="{{ $post->user->profile_photo_url }}" alt="">
                                <div class="mx-4">
                                    <h1 class="text-xs 2xl:text-sm text-black"> {{ $post->user->name }}</h1>
                                </div>
                            </div>
                            <p class="w-3/4 text-2xl leading-8 text-gray-500">{{ $post->extract }}</p>


                        </div>
                    </div>
                </div>

                <div>

                </div>
                <figure class="flex justify-center">
                    <div class="w-9/12 h-42">
                        @if ($post->image)
                            <img src="/img/{{ $post->image->url }}" alt="" class="w-screen">
                        @else
                            <img src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?auto=format&fit=crop&q=80&w=2896&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        @endif
                    </div>
                </figure>
                <div class="sm:mx-14 md:mx-14 xl:mx-24 2xl:mx-24 3xl:mx-24 my-4">
                    <p class="text-2xl text-black">{!! $post->body !!}</p>
                </div>
            </div>

        </div>
    </section>

    {{-- Contenido relacionado --}}
    {{-- <div>
  <aside>
    <h2>
      Mas en: {{$post->category->name}}
    </h2>
    <li>
      @foreach ($similares as $similar)
          <a class="flex" href="{{route('posts.show', $similar)}}">
            <img class="img-fluid" src="{{Storage::url($similar->image->url)}}" alt="">
            <span>{{$similar->name}}</span>
          </a>
      @endforeach
    </li>
  </aside>
</div> --}}
</x-app-layout>
