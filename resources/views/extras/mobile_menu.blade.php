<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('images/logo.svg') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="{{ route('main.post') }}" class="menu menu--active">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Posts </div>
            </a>
        </li>
   
    </ul>
</div>