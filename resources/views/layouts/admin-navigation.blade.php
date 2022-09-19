<div class="flex">
    <aside class="sideBar bg-gray-900 min-h-screen hidden md:block">
        <!-- Logo -->
        <div class="flex items-center w-60 h-20 relative border-t border-b border-gray-400 border-solid">
            <a class="block w-full h-full mx-auto relative" href="{{ route('admin.dashboard') }}">
                <div class="w-4/5 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
                    <x-application-logo />

                </div>
            </a>
        </div>

        <!-- Company Info -->
        <div class="w-60 h-24 border-b border-gray-400 border-solid relative">
            <div class="text-white absolute top-1/2 -translate-y-1/2 ml-6">
                <p class="mb-2">管理者画面</p>
                <p class="leading-relaxed">
                    {{ Auth::user()->family_name }}
                    {{ Auth::user()->last_name }} さん
                </p>

            </div>
        </div>

        <!-- Navigation Links -->
        <div class="w-60 mt-8">
            <!-- 求人作成 -->
            <div class="ml-6 mr-6">
                <x-responsive-nav-link class="text-white bg-transparent border-yellow-500" :href="route('company.dashboard')"
                    :active="request()->routeIs('company.dashboard')">
                    {{ __('ホーム') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="text-white bg-transparent border-yellow-500 mt-8" :href="route('admin.company.index')"
                    :active="request()->routeIs('admin.company.index')">
                    {{ __('企業一覧') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="text-white bg-transparent border-yellow-500 mt-8" :href="route('admin.job.index')"
                    :active="request()->routeIs('admin.job.index')">
                    {{ __('求人一覧') }}
                </x-responsive-nav-link>

            </div>
        </div>

    </aside>
    <div class="w-full">
        <header class="bg-white h-16 relative shadow-md">
            <!-- Aside Hamburger -->
            {{-- <div class="absolute top-1/2 left-4 -translate-y-1/2 md:hidden">
                <button id="sideHamBtn">
                    <p>ハンバーガー</p>
                </button>
            </div> --}}

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 absolute top-1/2 right-4 -translate-y-1/2">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('company.logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('company.logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('ログアウト') }}
                                </x-dropdown-link>
                            </form>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        {{-- <form method="POST" action="{{ route('company.logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('company.logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form> --}}
                    </x-slot>
                </x-dropdown>
            </div>
        </header>
        <main class="main">
            <div class="m-12">
                {{ $title }}
                <div class="bg-white mt-8 rounded-lg border border-gray-400 border-solid p-4">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</div>
