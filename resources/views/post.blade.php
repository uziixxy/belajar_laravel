<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$post ['title']}}</h3>
  <div class="text-base text-gray-900">
    <a href="#">{{$post ['author']}}</a> | 5 April 2025
</div>
  <p class="my-4 font-light">{{ ($post ['body'])}}</p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Back to posts </a>
</article>
</x-layout>