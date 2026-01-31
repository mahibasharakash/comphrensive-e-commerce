<template>

    <header class="w-full sticky z-50 top-0 bg-gray-100 drop-shadow-lg">
        <main class="w-full mx-auto max-w-7xl px-5 py-3 lg:py-0 flex justify-between items-center">
            <aside class="w-full lg:w-auto flex justify-between items-center">
                <a href="javascript:void(0)" class="decoration-0 inline-block font-semibold text-xl">
                    Marketo <span class="text-orange-700">.</span>
                </a>
                <button type="button" class="min-w-9 max-w-9 min-h-9 max-h-9 p-1 inline-flex lg:hidden rounded-full justify-center items-center bg-gray-300 cursor-pointer" @click.stop="openAsideMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                </button>
            </aside>
            <aside class="inline-block lg:flex justify-end items-center gap-2 fixed lg:static top-0 bottom-0 h-screen lg:h-auto min-w-72 lg:min-w-auto max-w-72 lg:max-w-auto bg-white lg:bg-transparent z-50 p-5 duration-500 drop-shadow-lg lg:drop-shadow-none lg:duration-0" :class="{ 'end-0' : asideIsActive, '-end-72' : !asideIsActive }" @click.stop>
                <div class="w-full flex lg:hidden justify-between items-center mb-3">
                    <div class="text-lg font-bold"> Menu </div>
                    <button type="button" class="min-w-8 max-w-8 min-h-8 max-h-8 p-1 inline-flex lg:hidden rounded-full justify-center items-center bg-gray-300 cursor-pointer" @click="closeAsideMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    Home
                </a>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    About
                </a>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    Contact
                </a>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    Blogs
                </a>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    Services
                </a>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    Products
                </a>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    Login
                </a>
                <a href="javascript:void(0)" class="block lg:inline-block mb-3 lg:mb-0 lg:py-1 lg:px-1.5 font-medium text-sm duration-500 hover:text-orange-700" @click="closeAsideMenu">
                    Registration
                </a>
            </aside>
        </main>
    </header>

</template>

<script>

export default {
    data() {
        return {
            asideIsActive: false,
        }
    },
    beforeUnmount() {
        window.removeEventListener('click', this.closeAsideMenu)
    },
    mounted() {
        window.addEventListener('click', this.closeAsideMenu)
    },
    methods: {

        openAsideMenu() {
            this.asideIsActive = true;
        },

        closeAsideMenu() {
            this.asideIsActive = false;
        },

    }
}

</script>
