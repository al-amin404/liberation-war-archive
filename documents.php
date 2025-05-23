<?php include('components/header.php') ?>


<section class="page-banner-section relative h-[300px] flex items-center justify-center">
    <div class="absolute top-0 bottom-0 w-full h-full flex items-center justify-center backdrop-blur-md">
        <p class="text-4xl text-green-800 text-center font-serif font-bold bg-slate-100/80 p-8">Historical War Documents</p>
    </div>
</section>

<section class="documents">
    <div class="container mx-auto mt-8 px-8">
        <div class="flex flex-row flex-start gap-4 p-4 border border-green-700 w-max text-green-700 rounded-md">
            <p>Sort by:</p>
            <select name="" id="filter-options">
                <option disabled value="">Filter Docs</option>
                <option value="">Date (newest first)</option>
                <option value="">Date (oldest first)</option>
                <option value="">Type (assending)</option>
                <option value="">Type (dessending)</option>
            </select>
        </div>
    </div>
    <div class="container py-12 flex flex-wrap justify-center gap-8 md:*:w-[20%]">
        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/declaration-signing.jpg" alt="" class="w-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> Declaration Signing </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/slider-img-2.jpg" alt="" class="h-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> Mass Genocide </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/slider-img-3.jpg" alt="" class="h-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> Foreign News Articles </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/slider-img-1.jpg" alt="" class="w-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> The Mighty War Heros </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/declaration-signing.jpg" alt="" class="w-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> Declaration Signing </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/slider-img-2.jpg" alt="" class="h-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> Mass Genocide </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/slider-img-3.jpg" alt="" class="h-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> Foreign News Articles </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="group flex flex-col gap-4 overflow-hidden rounded-lg border text-gray-700 shadow transition hover:shadow-lg pb-4">
            <img src="/images/slider-img-1.jpg" alt="" class="w-full object-cover text-gray-700" />
            <div class="flex flex-col justify-between pr-8 text-left sm:pl-4">
                <h3 class="text-sm text-gray-600">Invision</h3>
                <a href="#" class="mb-3 pr-7 text-xl text-red-800 font-serif font-semibold"> The Mighty War Heros </a>
                <p class="overflow-hidden pr-7 line-clamp-3 text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna .</p>

                <div class="mt-5 flex flex-col gap-4 space-y-3 text-sm font-medium text-gray-500 sm:flex-row sm:items-center sm:space-y-0 sm:space-x-2">
                    <a href="#" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Read Document</a>
                    <div>
                        <button class="mr-2" data-bs-toggle="tooltip" aria-label="Download Audio" data-bs-original-title="Download Audio">
                            <i class="fas fa-download text-green-700"></i>
                        </button>
                        <button class="btn btn-link" data-bs-toggle="tooltip" aria-label="Share" data-bs-original-title="Share">
                            <i class="fas fa-share-alt text-green-700"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex justify-center mb-8">
        <!-- Pagination -->
        <nav class="flex items-center -space-x-px" aria-label="Pagination">
            <button type="button" class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-green-200 text-green-800 hover:bg-green-100 focus:outline-hidden focus:bg-green-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Previous">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                <span class="hidden sm:block">Previous</span>
            </button>
            <button type="button" class="min-h-9.5 min-w-9.5 flex justify-center items-center bg-green-700 text-slate-200 border border-green-200 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-hidden focus:bg-green-300 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:focus:bg-green-700" aria-current="page">1</button>
            <button type="button" class="min-h-9.5 min-w-9.5 flex justify-center items-center border border-green-200 text-green-800 hover:bg-green-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-hidden focus:bg-green-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:focus:bg-white/10">2</button>
            <button type="button" class="min-h-9.5 min-w-9.5 flex justify-center items-center border border-green-200 text-green-800 hover:bg-green-100 py-2 px-3 text-sm first:rounded-s-lg last:rounded-e-lg focus:outline-hidden focus:bg-green-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:focus:bg-white/10">3</button>
            <button type="button" class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm first:rounded-s-lg last:rounded-e-lg border border-green-200 text-green-800 hover:bg-green-100 focus:outline-hidden focus:bg-green-100 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Next">
                <span class="hidden sm:block">Next</span>
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        </nav>
        <!-- End Pagination -->
    </div>
</section>



<?php include('components/footer.php') ?>