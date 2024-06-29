<nav class="nav-bar fixed top-0 w-full transition-all duration-500 z-50 pt-5">
    <div class="px-8 mx-auto text-white ">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <div>
                    <a href="#" class="flex items-center py-4 px-3">
                        <img class="object-contain h-12" src={"./img/TFP-logo-carp-left.png"} alt="The Fishing Project Logo" />
                    </a>
                </div>
                <div class="hidden md:flex items-center font-bold space-x-1">
                    <a href="#" class="py-4 px-3 hover:text-orange-700">HOME</a>
                    <a href="#" class="py-4 px-3 hover:text-orange-700">WHAT WE DO</a>
                    <a href="#" class="py-4 px-3 hover:text-orange-700">OUR RESOURCES</a>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-1">
                <a href="#" class="py-5 px-3">Login</a>
                <a href="#" class="py-3 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>
            </div>

            <div class="md:hidden flex items-center z-50">
                <button class="mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    {{-- <div class="mobile-menu bg-blue-950 fixed top-0 right-0 bg-transparent w-0 h-full overflow-x-hidden duration-500 z-10">
        <div class="bg-orange-400">
            <a href="#" class="block py-2 px-4 text-sm text-white hover:text-orange-700">HOME</a>
            <a href="#" class="block py-2 px-4 text-sm text-white hover:text-orange-700">WHAT WE DO</a>
        </div>
    </div> --}}

    <nav class="flex justify-between items-center p-4">

        {{-- <div>
            <button class="mobile-menu-button">
                <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="18.853" height="12" viewBox="0 0 18.853 12">
                    <g id="Icon_feather-menu" data-name="Icon feather-menu" transform="translate(-4.5 -8)">
                        <path id="Path_3" data-name="Path 3" d="M4.5,18H23.353" transform="translate(0 -4)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="2" />
                        <path id="Path_4" data-name="Path 4" d="M4.5,9H23.353" transform="translate(0)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="2" />
                        <path id="Path_5" data-name="Path 5" d="M4.5,27H23.353" transform="translate(0 -8)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="2" />
                    </g>
                </svg>
            </button>
        </div> --}}

        <div id="sideBar" class="fixed top-0 left-0 bg-blue-950 w-0 h-full overflow-x-hidden duration-500 z-10">
        <button class="mobile-menu-exit">
                    <a class="text-3xl absolute top-0 right-0 mr-3 mt-2">&times;</a>
                </button>
            <div id="sideNav" class="fixed top-0 left-0 opacity-100 bg-blue-950 text-white w-0 h-full flex justify-center items-center overflow-x-hidden duration-500 font-bold z-50">

                <ul class="text-2xl sm:text-3xl">
                    <li class="p-2"><a href="#">Films</a></li>
                    <li class="p-2"><a href="#">Docus</a></li>
                    <li class="p-2"><a href="#">Notes</a></li>
                    <li class="p-2"><a href="#">Shop</a></li>
                </ul>
            </div>
        </div>
    </nav>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function ($) {

// Header fixed and Back to top button
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.back-to-top').fadeIn('slow');
    $('.nav-bar').addClass('bg-blue-950 bg-opacity-90');
    $('.nav-bar').removeClass('pt-5');
  } else {
    $('.back-to-top').fadeOut('slow');
    $('.nav-bar').removeClass('bg-blue-950 bg-opacity-90');
    $('.nav-bar').addClass('pt-5');
  }
});
$('.back-to-top').click(function () {
  $('html, body').animate({
    scrollTop: 0
  }, 1500, 'easeInOutExpo');
  return false;
});
});

const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
// menu.classList.toggle("hidden")
document.getElementById("sideBar").style.width = "100%";
document.getElementById("sideNav").style.width = "60%";
});

const exitBtn = document.querySelector("button.mobile-menu-exit");

exitBtn.addEventListener("click", () => {
document.getElementById("sideBar").style.width = "0";
document.getElementById("sideNav").style.width = "0";
});
</script>