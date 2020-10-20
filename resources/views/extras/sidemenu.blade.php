<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('main.post') }}" class="side-menu side-menu--active">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Posts </div>
            </a>
        </li>
        
    </ul>
</nav>