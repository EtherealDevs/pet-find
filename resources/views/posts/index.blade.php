<x-app-layout>
<section class="bg-white bg-[url(https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&q=80&w=3346&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)] bg-center backdrop-blur-2xl">

    <div class="backdrop-blur-2xl w-full 2xl:w-screen">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 ">
            <h1 class="text-black text-3xl flex justify-center font-extrabold mt-16 mb-10">Posts y Anuncios</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($posts as $post)
                {{-- @dd($post->image) --}}
                @php
                try {

                    $test = `bg-[url('/storage/app/{$post->image->url}')]`;
                } catch (\Throwable $th) {
                    //throw $th;
                }
                @endphp
                @if($post->image)
                    <article style="background-image: url('{{ url(Storage::url($post->image->url)) }}'); background-position: center; " class="bg-black/20 rounded-lg p-8 md:p-12 @if($loop->first) md:col-span-2 mb-8 @endif">

                        @else
                        <article class="bg-center bg-cover bg-[url(https://images.unsplash.com/photo-1552832230-c0197dd311b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1592&q=80)] bg-black/20 p-8 rounded-lg md:p-12 @if($loop->first) md:col-span-2 mb-8 @endif">
                        @endif
                        <a href="#" class="bg-white text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md mb-2">
                            <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                            </svg>
                            {{$post->category->name}}
                        </a>
                        <h2 class="text-white text-2xl font-extrabold mb-2">{{$post->title}}</h2>
                        <p class="text-lg font-normal text-white mb-4">{{$post->extract}}</p>
                        <a href="/posts/{{$post->id}}" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-lime-700 hover:bg-lime-800 hover:text-white focus:ring-4 focus:ring-blue-200">
                          Ver Más
                          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                    </article>
                    @endforeach
                </div>
          </div>
    </div>

</section>
</x-app-layout>
