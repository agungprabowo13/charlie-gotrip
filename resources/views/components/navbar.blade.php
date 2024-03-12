<div class="navbar bg-base-100 max-w-6xl mx-auto">
  <div class="navbar-start">
    <div class="dropdown ">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li class=" {{ (request()->is('/')) ? 'rounded bg-slate-200' : '' }}"><a href="/">Home</a></li>
        <li  class=" {{ (request()->is('about')) ? 'rounded bg-slate-200' : '' }}" ><a href="/about">About</a></li>
        <li  class=" {{ (request()->is('packages')) ? 'rounded bg-slate-200' : '' }}"><a href="/packages">Packages</a></li>
        <li  class=" {{ (request()->is('gallery')) ? 'rounded bg-slate-200' : '' }}"><a href="/gallery">Gallery</a></li>
        <li><a >Testimonials</a></li>
        <li><a  >Contact Us</a></li>
      </ul>
    </div>
    <a class="font-bold text-2xl text-slate-800"><span class="text-blue-500">Go</span>Trip</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li class=" {{ (request()->is('/')) ? 'rounded bg-slate-200' : '' }}"><a href="/">Home</a></li>
      <li class=" {{ (request()->is('about')) ? 'rounded bg-slate-200' : '' }}"><a href="/about">About</a></li>
      <li class=" {{ (request()->is('packages')) ? 'rounded bg-slate-200' : '' }}"><a href="/packages">Packages</a></li>
      <li class=" {{ (request()->is('gallery')) ? 'rounded bg-slate-200' : '' }}"><a href="/gallery">Gallery</a></li>
      <li><a >Testimonials</a></li>
      <li><a >Contact Us</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    @if (Route::has('login'))
    @auth
    <a class="btn bg-blue-500 text-white px-6 font-semibold" href="{{ url('/dashboard') }}">{{ Auth::user()->name }}</a>
    @else
    <a class="btn bg-blue-500 text-white px-6 font-semibold" href="{{ route('login') }}">Login</a>
    @endauth
    @endif
  </div>
</div>