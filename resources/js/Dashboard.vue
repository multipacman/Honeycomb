<template>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative h-full bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div
                class="relative z-10 pb-8 py-28 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32"
            >
                <div
                    class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"
                >
                    <h1
                        class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl"
                    >
                        <span class="block text-yellow-500 xl:inline"
                            >Honeycomb</span
                        >
                    </h1>
                </div>
                <main
                    class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"
                >
                    <div class="sm:text-center lg:text-left">
                        <h1
                            class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl"
                        >
                            <span class="block xl:inline"
                                >Organize your work</span
                            ><br />
                            <span class="block text-yellow-500 xl:inline"
                                >in cards</span
                            >
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0"
                        >
                            Honeycomb is a Kanban Board management system. It
                            specializes in organizing tasks into cards which
                            belong to specific given board names.
                        </p>
                        <div
                            class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start"
                        >
                            <div class="rounded-md shadow">
                                <router-link
                                    :to="{ name: 'login' }"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-500 hover:bg-opacity-75 md:py-4 md:text-lg md:px-10"
                                >
                                    Login/Register
                                </router-link>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img
                class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                alt=""
            />
        </div>
    </div>
</template>
