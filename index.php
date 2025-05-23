<?php include('components/header.php') ?>

    <section class="hero-section relative min-h-[90vh] flex items-center justify-center">
        <div class="absolute top-0 bottom-0 w-full h-full bg-linear-to-b from-green-700/90 from-20% to-red-700/60"></div>
        <div class="hero-content py-8 px-4 md:py-20 md:px-16 bg-slate-100/20 backdrop-blur-lg md:w-[60%]">
            <p class="text-4xl text-white font-serif font-bold">Welcome to <span class="text-green-800">Liberation War
                    Archive</span></p>
            <p class="mt-4 mb-8 text-base text-white text-justify">
                Liberation War e-Archive, is a 'Library, Archive & Research' organization, founded in 2007, working with
                collection, preservation & distribution of historical documents & research on the Liberation War of
                Bangladesh and Genocide of Innocent Bengali People in 1971. It was previously known as 'Bangladesh
                Liberation War Library & Research Centre', later in March 2016, it was registered under existing Trust
                Law of Bangladesh as 'Muktijuddho e-Archive Trust' On 14 November 2016, it was officially
                inaugurated
            </p>
            <a href="#" class="py-3 px-6 bg-green-700 rounded-md text-white">Read More</a>
        </div>
    </section>

    <section class="documents relative flex flex-col items-center justify-center bg-slate-200">
        <!-- Slider -->
        <div class="banner relative flex items-center justify-center w-full">
            <button id="prev">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                    height="30px" width="30px" version="1.1" id="Capa_1" viewBox="0 0 55.753 55.753" xml:space="preserve">
                    <g>
                        <path
                            d="M12.745,23.915c0.283-0.282,0.59-0.52,0.913-0.727L35.266,1.581c2.108-2.107,5.528-2.108,7.637,0.001   c2.109,2.108,2.109,5.527,0,7.637L24.294,27.828l18.705,18.706c2.109,2.108,2.109,5.526,0,7.637   c-1.055,1.056-2.438,1.582-3.818,1.582s-2.764-0.526-3.818-1.582L13.658,32.464c-0.323-0.207-0.632-0.445-0.913-0.727   c-1.078-1.078-1.598-2.498-1.572-3.911C11.147,26.413,11.667,24.994,12.745,23.915z" />
                    </g>
                </svg>
            </button>
            <div class="slider transition-all *:w-[80vw] overflow-hidden my-8">
                <div class="img relative flex flex-col items-center justify-center">
                    <img src="/images/slider-img-1.jpg" alt="image-1" width="100%">
                    <div class="slider-caption max-w-[80%] flex flex-col gap-8 bg-green-700/80 text-white p-4 md:p-8 hidden md:block absolute md:bottom-[150px]">
                        <h2 class="text-2xl text-slate-100 font-semibold font-serif">Liberation War Heroes</h2>
                        <p class="mb-4">Stories of bravery and sacrifice that shaped our nation.</p>
                        <a href="/interviews.php" class="py-2 px-4 bg-red-700 rounded-md text-white w-max">Listen to Their Stories</a>
                    </div>
                </div>
                <div class="img flex items-center justify-center">
                    <img src="/images/slider-img-2.jpg" alt="image-1" width="100%">
                    <div class="slider-caption max-w-[60%] flex flex-col gap-8 bg-green-700/80 text-white p-4 md:p-8 hidden md:block absolute md:bottom-[150px]">
                        <h2 class="text-2xl text-slate-100 font-semibold font-serif">Historical War Documents</h2>
                        <p class="mb-4">Document and Stories of bravery and sacrifice that shaped our nation.</p>
                        <a href="/documents.php" class="py-2 px-4 bg-red-700 rounded-md text-white w-max">Read Documents</a>
                    </div>
                </div>
                <div class="img flex items-center justify-center">
                    <img src="/images/slider-img-3.jpg" alt="image-1" width="100%">
                    <div class="slider-caption max-w-[80%] flex flex-col gap-8 bg-green-700/80 text-white p-4 md:p-8 hidden md:block absolute md:bottom-[150px]">
                        <h2 class="text-2xl text-slate-100 font-semibold font-serif">Photo Gallery</h2>
                        <p class="mb-4">A visual journey through the Liberation War of Bangladesh. Stories of bravery and sacrifice.</p>
                        <a href="/gallery.php" class="py-2 px-4 bg-red-700 rounded-md text-white w-max">View Gallery</a>
                    </div>
                </div>
            </div>
            <button id="next">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                    height="30px" width="30px" version="1.1" id="Capa_1" viewBox="0 0 55.752 55.752" xml:space="preserve">
                    <g>
                        <path
                            d="M43.006,23.916c-0.28-0.282-0.59-0.52-0.912-0.727L20.485,1.581c-2.109-2.107-5.527-2.108-7.637,0.001   c-2.109,2.108-2.109,5.527,0,7.637l18.611,18.609L12.754,46.535c-2.11,2.107-2.11,5.527,0,7.637c1.055,1.053,2.436,1.58,3.817,1.58   s2.765-0.527,3.817-1.582l21.706-21.703c0.322-0.207,0.631-0.444,0.912-0.727c1.08-1.08,1.598-2.498,1.574-3.912   C44.605,26.413,44.086,24.993,43.006,23.916z" />
                    </g>
                </svg>
            </button>
        </div>

        <div class="archives flex flex-col justify-center min-h-[60vh]">
            <h1 class="text-4xl text-center text-red-400 font-serif underline mt-4">War Archives</h1>
            <div class="flex flex-wrap mb-12 *:max-w-[80%] sm:*:w-[320px] md:*:w-[25%] justify-center gap-3 py-8 md:py-12 transition-all *:bg-slate-100 *:border *:border-green-700 *:shadow-md *:hover:shadow-lg *:hover:-translate-y-2 *:transition-all *:duration-300">
                <div class="flex flex-col gap-3 p-4 md:p-8 items-center justify-between">
                    <i class="fas fa-file-alt fa-3x text-green-700 mb-3 text-primary"></i>
                    <h2 class="text-xl text-center font-serif font-semibold text-green-700">Historical Documents</h2>
                    <p class="text-center mb-2">Explore official correspondence, treaties, and declarations from the
                        Liberation War period.</p>
                    <a href="/documents.php" class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">View Documents
                    </a>
                </div>
                <div class="flex flex-col gap-3 p-4 md:p-8 items-center justify-center">
                    <i class="fas fa-microphone-alt text-green-700 fa-3x mb-3 text-primary"></i>
                    <h2 class="text-xl text-center font-serif font-semibold text-green-700">Oral Histories</h2>
                    <p class="text-center mb-2">Listen to firsthand accounts from freedom fighters and witnesses of the
                        Liberation War.</p>
                    <a href="/interviews.php"
                        class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Listen
                        Recording</a>
                </div>
                <div class="flex flex-col gap-3 p-4 md:p-8 items-center justify-center">
                    <i class="fas fa-file-alt fa-3x text-green-700 mb-3 text-primary"></i>
                    <h2 class="text-xl text-center font-serif font-semibold text-green-700">Photo Gallery</h2>
                    <p class="text-center mb-2">Browse through our collection of historical photographs documenting the
                        struggle for independence.</p>
                    <a href="/gallery.php"
                        class="py-2 px-3 border border-green-700 hover:bg-green-700 rounded-md text-green-700 hover:text-white">Browse
                        Gallery</a>
                </div>
            </div>
        </div>

    </section>

    <section class="about-section py-8 md:py-16">
        <div class="flex flex-col items-center mx-auto justify-center w-[80vw]">
            <h1 class="text-4xl text-red-400 font-serif underline mb-4">About Liberation War Archive</h1>
            <div class="flex flex-col-reverse lg:flex-row gap-4 justify-center items-center">
                <div class="content font-serif lg:w-[50%]">
                    <p class="font-serif text-justify"><span class="text-xl text-green-700"> Liberation War Archive for Bangladesh</span>, often known as the Muktijuddho e-Archive, is a
                        significant digital initiative dedicated to preserving and providing access to historical
                        documents and resources related to the 1971 Bangladesh Liberation War. It serves as a valuable
                        repository for researchers, students, and the general public interested in learning about this
                        pivotal period in Bangladesh's history.
                        The initiative began its journey in 2007 under the name "Bangladesh Liberation War Library &
                        Research Centre." Initially, the focus was on collecting books. However, recognizing the
                        limitations of a physical library in reaching a wider audience, the vision evolved towards
                        creating a digital archive.

                        The digital library project, the Muktijuddho e-Archive, officially started on May 4, 2014, with
                        the goal of digitizing and publicly distributing historical documents. The organization was
                        later registered under the Trust Law of Bangladesh as the "Muktijuddho e-Archive Trust" in March
                        2016 and was officially inaugurated on November 14, 2016.

                        The creation of the archive was driven by the need to provide easy and widespread access to
                        authentic information about the Liberation War, especially for those living abroad or with
                        limited access to physical libraries and archives in Bangladesh. The initiative was inspired, in
                        part, by institutions like the Library of Congress in the US.

                        Over the years, the archive has grown significantly through dedicated efforts to collect
                        materials from various sources, including personal collections, libraries, and commercial data
                        archives. It continues to expand its collection to ensure a comprehensive digital record of the
                        Bangladesh Liberation War.</p>
                </div>
                <div>
                    <img src="/images/hero-bg.jpg" alt="Liberation Artwork">
                </div>
            </div>
        </div>
    </section>

<script src="/slider.js"></script>
<?php include('components/footer.php') ?>