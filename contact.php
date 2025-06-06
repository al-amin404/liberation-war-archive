<?php include('components/header.php') ?>

    <section class="page-banner-section relative h-[300px] flex items-center justify-center">
        <div class="absolute top-0 bottom-0 w-full h-full flex items-center justify-center backdrop-blur-md">
            <p class="text-4xl text-green-800 text-center font-serif font-bold bg-slate-100/80 p-8">Contact Us</p>
        </div>
    </section>

    <section class="contact-form">
        <div class="sm:p-10 my-auto">
            <section class="mx-auto max-w-screen-xl md:rounded-md md:border border-green-700 md:shadow-lg">
                <div class="grid grid-cols-4 text-gray-800 lg:grid-cols-3">
                    <div class="col-span-4 bg-gray-50 px-8 py-10 text-gray-800 md:col-span-2 md:border-r md:px-10 md:py-12 lg:col-span-1">
                        <ul>
                            <li class="mb-6 flex items-start text-left">
                                <svg class="shrink-0 mr-6 text-2xl text-gray-500" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5l-8-5V6l8 5l8-5v2z" />
                                </svg>
                                <div>
                                    <a class="cursor-pointer font-serif text-base md:text-lg" href="#">admin@liberationwararchive.com</a>
                                    <span class="block text-xs uppercase">email</span>
                                </div>
                            </li>
                            <li class="my-6 flex items-center text-left">
                                <svg class="shrink-0 mr-6 text-2xl text-gray-500" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd" d="M1 2.838A1.838 1.838 0 0 1 2.838 1H21.16A1.837 1.837 0 0 1 23 2.838V21.16A1.838 1.838 0 0 1 21.161 23H2.838A1.838 1.838 0 0 1 1 21.161V2.838Zm8.708 6.55h2.979v1.496c.43-.86 1.53-1.634 3.183-1.634c3.169 0 3.92 1.713 3.92 4.856v5.822h-3.207v-5.106c0-1.79-.43-2.8-1.522-2.8c-1.515 0-2.145 1.089-2.145 2.8v5.106H9.708V9.388Zm-5.5 10.403h3.208V9.25H4.208v10.54ZM7.875 5.812a2.063 2.063 0 1 1-4.125 0a2.063 2.063 0 0 1 4.125 0Z" clip-rule="evenodd" />
                                </svg>
                                <div>
                                    <p class="font-serif text-base md:text-lg">LiberationWarArchive</p>
                                    <span class="block text-xs uppercase">LinkedIn</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="order-first col-span-4 max-w-screen-md px-8 py-10 md:order-last md:col-span-2 md:px-10 md:py-12">
                        <h2 class="mb-8 text-2xl font-black">Get in touch</h2>
                        <p class="mt-2 mb-4 font-sans text-sm tracking-normal">Don't be ask your question.</p>
                        <form action="">
                            <div class="md:col-gap-4 mb-5 grid md:grid-cols-2">
                                <input class="col-span-1 w-full border-b py-3 text-sm outline-none focus:border-b-2 focus:border-black" type="text" placeholder="Name" name="name" />
                                <input class="col-span-1 w-full border-b py-3 text-sm outline-none focus:border-b-2 focus:border-black" type="email" placeholder="Email" name="email" />
                            </div>
                            <textarea class="mb-10 w-full resize-y whitespace-pre-wrap border-b py-3 text-sm outline-none focus:border-b-2 focus:border-black" id="" rows="6" placeholder="Question" name="question"></textarea>
                            <button type="submit" class="group flex cursor-pointer items-center rounded-xl bg-green-700 bg-none px-8 py-4 text-center font-semibold leading-tight text-white">
                                Send
                                <svg class="group-hover:ml-8 ml-4 transition-all" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.912 12H4L2.023 4.135A.662.662 0 0 1 2 3.995c-.022-.721.772-1.221 1.46-.891L22 12L3.46 20.896c-.68.327-1.464-.159-1.46-.867a.66.66 0 0 1 .033-.186L3.5 15" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </section>


<?php include('components/footer.php') ?>