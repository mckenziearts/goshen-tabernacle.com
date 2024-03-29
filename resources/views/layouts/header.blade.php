<header x-data="{open: false}" class="relative bg-white backdrop-filter backdrop-blur z-20">
    <div class="h-10 bg-gradient-to-r from-violet-500 via-purple-600 to-purple-800">
        <div class="max-w-7xl relative mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-10">
                <div class="flex items-center space-x-2 text-sm text-white">
                    <a href="#" class="hover:underline hover:text-purple-100">{{ __('Faire un don') }}</a>
                    <span aria-hidden="true">·</span>
                    <a href="#" class="hover:underline hover:text-purple-100">{{ __('Contact') }}</a>
                    {{--<div class="hidden animate-fade pl-4 sm:block">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-md text-sm font-medium bg-white text-gray-900">
                            <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-red-600" fill="currentColor" viewBox="0 0 8 8">
                                <circle cx="4" cy="4" r="3" />
                            </svg>
                            {{ __('Nous sommes en Live') }}
                        </span>
                    </div>--}}
                </div>
                <div class="flex items-center space-x-5">
                    <a href="{{ route('facebook') }}" class="text-sm font-medium text-white hover:text-purple-300">
                        <span class="sr-only">Facebook</span>
                        <x-icons.facebook class="h-5 w-5"/>
                    </a>
                    <a href="{{ route('instagram') }}" class="text-sm font-medium text-white hover:text-purple-300">
                        <span class="sr-only">Instagram</span>
                        <x-icons.instagram class="h-5 w-5"/>
                    </a>
                    <a href="{{ route('pinterest') }}" class="text-sm font-medium text-white hover:text-purple-300">
                        <span class="sr-only">Pinterest</span>
                        <x-icons.pinterest class="h-5 w-5"/>
                    </a>
                    <a href="{{ route('youtube') }}" class="text-sm font-medium text-white hover:text-purple-300">
                        <span class="sr-only">Youtube</span>
                        <x-icons.youtube class="h-5 w-5"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="max-w-7xl relative mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between py-4">
            <div>
                <a href="{{ route('home') }}" class="flex">
                    <span class="sr-only">Goshen Tabernacle</span>
                    <x-application-logo class="w-auto h-10 text-purple-600 sm:h-12 lg:hidden" />
                    <x-application-logo-large class="hidden w-auto h-16 text-purple-600 lg:block" />
                </a>
            </div>
            <div class="-mr-2 -my-2 lg:hidden">
                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500" @click="open = !open" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                    <span class="sr-only">Open menu</span>
                    <x-heroicon-o-menu-alt-3 class="h-6 w-6" />
                </button>
            </div>
            <div class="hidden space-x-5 lg:flex lg:items-center lg:flex-end lg:ml-10">
                <div class="relative" x-data="{ open: false }" @keydown.escape="open = false">
                    <button type="button"
                            class="inline-flex items-center font-medium text-gray-600 hover:text-gray-900 focus:outline-none"
                            :class="{ 'text-gray-900': open, 'text-gray-600': !(open) }"
                            aria-expanded="true"
                            @click="open = !open"
                            @mousedown="if (open) $event.preventDefault()"
                            :aria-expanded="open.toString()"
                    >
                        <span>{{ __("L'église") }}</span>
                        <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-600" :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-xs sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                         x-ref="panel"
                         x-cloak
                         @click.away="open = false"
                    >
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-6">

                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <x-heroicon-o-document-text class="shrink-0 h-6 w-6 text-purple-600"/>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ __('A propos') }}
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <x-heroicon-o-office-building class="shrink-0 h-6 w-6 text-purple-600"/>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ __('Construction') }}
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <x-heroicon-o-calendar class="shrink-0 h-6 w-6 text-purple-600" />
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ __('Événements') }}
                                        </p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative" x-data="{ open: false }" @keydown.escape="open = false">
                    <button type="button"
                            class="inline-flex items-center font-medium text-gray-600 hover:text-gray-900 focus:outline-none"
                            :class="{ 'text-gray-900': open, 'text-gray-500': !(open) }"
                            aria-expanded="true"
                            @click="open = !open"
                            @mousedown="if (open) $event.preventDefault()"
                            :aria-expanded="open.toString()"
                    >
                        <span>W.M. Brahnam</span>
                        <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-600" :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                         x-ref="panel"
                         x-cloak
                         @click.away="open = false"
                    >
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-6">

                                <a href="{{ route('wmb.about') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <img class="shrink-0 h-6 w-6 rounded-md" src="{{ asset('images/william-branham.jpeg') }}" alt="William Marrion Brahnam"/>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ __('Qui est William Marrion Brahnam ?') }}
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ __('Découvrez toute la biographie du prophète et son histoire.') }}
                                        </p>
                                    </div>
                                </a>

                                <a href="{{ route('brochures') }}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <x-heroicon-o-book-open class="shrink-0 h-6 w-6 text-purple-600"/>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ __('Brochures') }}
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ __('Téléchargez les brochures pour connaitre le Message qu\'il apporte.') }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="font-medium text-gray-600 hover:text-gray-900">{{ __('Conventions') }}</a>
                <a href="#" class="font-medium text-gray-600 hover:text-gray-900">{{ __('Galerie') }}</a>
                <div class="relative" x-data="{ open: false }" @keydown.escape="open = false">
                    <button type="button"
                            class="inline-flex items-center font-medium text-gray-600 hover:text-gray-900 focus:outline-none"
                            :class="{ 'text-gray-900': open, 'text-gray-600': !(open) }"
                            aria-expanded="true"
                            @click="open = !open"
                            @mousedown="if (open) $event.preventDefault()"
                            :aria-expanded="open.toString()"
                    >
                        <span>{{ __('Prédications') }}</span>
                        <svg x-state:on="Item active" x-state:off="Item inactive" class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-600" :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-xs sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                         x-ref="panel"
                         x-cloak
                         @click.away="open = false"
                    >
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-6">

                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <x-heroicon-o-video-camera class="shrink-0 h-6 w-6 text-purple-600"/>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ __('Cultes') }}
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ __('Revivez les cultes pour maintenir votre atmosphère spirituelle.') }}
                                        </p>
                                    </div>
                                </a>

                                <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                    <x-heroicon-o-microphone class="shrink-0 h-6 w-6 text-purple-600"/>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-gray-900">
                                            {{ __('Podcasts') }}
                                        </p>
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ __('Les enseignements et études Biblique en audio.') }}
                                        </p>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('chants.index') }}" class="font-medium {{ active(['chants*'], 'text-purple-600 hover:text-purple-800', 'text-gray-600 hover:text-gray-900') }}">{{ __('Chants') }}</a>
                <a href="{{ route('live') }}" class="hidden bg-red-600 px-3 py-1.5 text-sm leading-5 rounded-full inline-flex items-center font-medium text-white hover:bg-red-500 xl:block">
                    {{ __('Live Stream') }}
                </a>
            </div>
        </div>
    </nav>
    <div x-show="open"
         x-transition:enter="duration-200 ease-out"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="duration-100 ease-in"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden"
         x-ref="panel"
         @click.away="open = false"
         style="display: none;"
    >
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <x-application-logo class="h-12 w-auto text-purple-600" />
                    </div>
                    <div class="-mr-2">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500" @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <x-heroicon-o-x class="h-6 w-6"/>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <x-heroicon-o-document-text class="shrink-0 h-6 w-6 text-purple-600"/>
                            <span class="ml-3 text-base font-medium text-gray-900">
                                {{ __('A propos de l\'église') }}
                            </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <x-heroicon-o-office-building class="shrink-0 h-6 w-6 text-purple-600"/>
                            <span class="ml-3 text-base font-medium text-gray-900">
                                {{ __('Construction') }}
                            </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <svg class="flex-shrink-0 h-6 w-6 text-purple-600" x-description="Heroicon name: outline/shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">
                                {{ __('Événements') }}
                            </span>
                        </a>

                        <a href="{{ route('wmb.about') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <img class="shrink-0 h-6 w-6 rounded-md" src="{{ asset('images/william-branham.jpeg') }}" alt="William Marrion Brahnam"/>
                            <span class="ml-3 text-base font-medium text-gray-900">
                                {{ __('William Marrion Brahnam') }}
                            </span>
                        </a>

                        <a href="{{ route('brochures') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <x-heroicon-o-book-open class="shrink-0 h-6 w-6 text-purple-600"/>
                            <span class="ml-3 text-base font-medium text-gray-900">
                                {{ __('Brochures') }}
                            </span>
                        </a>

                    </nav>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="{{ route('live') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Live Streaming
                    </a>

                    <a href="{{ route('chants.index') }}" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        {{ __('Chants') }}
                    </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        {{ __('Conventions') }}
                    </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        {{ __('Galerie') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
