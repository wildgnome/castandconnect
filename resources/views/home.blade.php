<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cast and Connect</title>
</head>

<body>
    <header>
        @include('components.navbar3')
             <!-- Activate link highlighting when scrolled to page block -->
 </header>
    <main class="relative">
        @include('home.partials.hero')
        @include('home.partials.what-we-do')
        @include('home.partials.our-resources')
        @include('home.partials.customer-reviews')
        @include('home.partials.donate')
        @include('home.partials.contact-us')
        @include('home.partials.footer')

        <script>
          function highlightLinkWhenScrolled() {
            let hero = document.querySelector('#hero');
            let whatwedo = document.querySelector('#what-we-do');
            let ourresources = document.querySelector('#our-resources');
            let customerreviews = document.querySelector('#customer-reviews');
            let donate = document.querySelector('#donate');
            let contact = document.querySelector('#contact');
            let footer = document.querySelector('#footer');
            window.addEventListener('scroll', () => {
              if (hero.getBoundingClientRect().top < 0 && whatwedo.getBoundingClientRect().top > 0) {
                document.querySelector('a[href="#hero"]').classList.add('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#what-we-do"]').classList.remove('bg-gray-900' , 'text-white');
              } else if (whatwedo.getBoundingClientRect().top < 0 && ourresources.getBoundingClientRect().top > 0) {
                document.querySelector('a[href="#hero"]').classList.remove('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#what-we-do"]').classList.add('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#our-resources"]').classList.remove('bg-gray-900' , 'text-white');
              } else if (ourresources.getBoundingClientRect().top < 0 && customerreviews.getBoundingClientRect().top > 0) {
                document.querySelector('a[href="#what-we-do"]').classList.remove('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#our-resources"]').classList.add('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#customer-reviews"]').classList.remove('bg-gray-900' , 'text-white');
              } else if (customerreviews.getBoundingClientRect().top < 0 && donate.getBoundingClientRect().top > 0) {
                document.querySelector('a[href="#our-resources"]').classList.remove('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#customer-reviews"]').classList.add('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#donate"]').classList.remove('bg-gray-900' , 'text-white');
              } else if (donate.getBoundingClientRect().top < 0 && contact.getBoundingClientRect().top > 0) {
                document.querySelector('a[href="#customer-reviews"]').classList.remove('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#donate"]').classList.add('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#contact"]').classList.remove('bg-gray-900' , 'text-white');
               
              } else if (contact.getBoundingClientRect().top < 0 && footer.getBoundingClientRect().top > 0) {
                document.querySelector('a[href="#donate"]').classList.remove('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#contact"]').classList.add('bg-gray-900' , 'text-white');
              } else {
                document.querySelector('a[href="#hero"]').classList.remove('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#what-we-do"]').classList.remove('bg-gray-900' , 'text-white');
                document.querySelector('a[href="#contact"]').classList.remove('bg-gray-900' , 'text-white');
              }
            });
          }
          highlightLinkWhenScrolled();
          
        </script>

   

    </main>

</body>

</html>
