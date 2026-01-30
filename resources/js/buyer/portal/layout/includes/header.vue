<template>

    <header class="w-full static bg-gray-100">
        <main class="w-full mx-auto max-w-7xl px-5 py-3 flex justify-between items-center">
            <aside class="flex justify-between items-center">
                <a href="javascript:void(0)" class="decoration-0 inline-block font-semibold text-xl">
                    Marketo <span class="text-orange-700">.</span>
                </a>
                <button type="button" class="min-w-9 max-w-9 min-h-9 max-h-9 p-1 inline-flex lg:hidden rounded-full justify-center items-center bg-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                </button>
            </aside>
            <aside class="flex justify-end items-center gap-2">
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    Home
                </a>
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    About
                </a>
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    Contact
                </a>
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    Blogs
                </a>
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    Services
                </a>
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    Products
                </a>
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    Login
                </a>
                <a href="javascript:void(0)" class="inline-block py-1 px-1.5 font-medium text-sm duration-500 hover:text-orange-700">
                    Registration
                </a>
                <div class="relative">
                    <button type="button" class="inline-flex justify-center items-center rounded-full p-1 min-w-9 max-w-9 min-h-9 max-h-9 bg-white cursor-pointer" @click.stop="openDropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                        </svg>
                    </button>
                    <div class="min-w-36 bg-white drop-shadow-md drop-shadow-gray-400 block absolute top-auto mt-1 end-0 rounded-md overflow-hidden duration-500" :class="{ 'max-h-0' : !dropdownIsActive, 'max-h-96' : dropdownIsActive }" @click.stop>
                        <button type="button" class="cursor-pointer flex justify-start items-center py-3 px-3.5 font-medium text-sm bg-transparent hover:bg-orange-50 duration-500 hover:text-orange-700 w-full" @click="closeDropdown">
                            English
                        </button>
                        <button type="button" class="cursor-pointer flex justify-start items-center py-3 px-3.5 font-medium text-sm bg-transparent hover:bg-orange-50 duration-500 hover:text-orange-700 w-full" @click="closeDropdown">
                            Bangla
                        </button>
                    </div>
                </div>
            </aside>
        </main>
    </header>

</template>

<script>

export default {
    data() {
        return {
            dropdownIsActive: false,
        }
    },
    beforeUnmount() {
        window.removeEventListener('click', this.closeDropdown)
    },
    mounted() {
        window.addEventListener('click', this.closeDropdown)
    },
    methods: {

        openDropdown() {
            this.dropdownIsActive = true;
        },

        closeDropdown() {
            this.dropdownIsActive = false;
        },

    }
}

</script>
