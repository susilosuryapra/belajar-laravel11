<x-layout>
  {{-- variable title yang dikirimkan halaman routes/web.php --}}
  <x-slot:title>{{ $title }}</x-slot:title>
  
  {{-- isi variable slot di dalam tag <main> di layout.blade.php --}}
  <h3 class="text-xl">Welcome to My Blog</h3>
</x-layout>