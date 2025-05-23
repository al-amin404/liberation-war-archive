<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
    @theme {        
        --color-green-700: #006a4e;
    }    
    </style>
    <title>Liberation War Archive</title>
</head>

<body>
    <header class="flex flex-row justify-between items-center bg-green-700 p-4 px-8">
        <div class="logo">
            <a href="/"><img src="logo.png" alt="Liberation War Archive" class="font-bold font-serif text-2xl text-white hover:text-red-700"></a>
        </div>
        <nav>
            <input type="checkbox" id="sidebar-active">
            <label for="sidebar-active" class="open-sidebar-btn">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" aria-hidden="true"
                    data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </label>
            <label for="sidebar-active" id="overlay"></label>
            <div class="nav-links-container">
                <label for="sidebar-active" class="close-sidebar-btn self-end p-4">
                    <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 460.775 460.775" xml:space="preserve">
                        <path
                            d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55  c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55  c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505  c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55  l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719  c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z" />
                    </svg>
                </label>
                <ul
                    class="flex flex-col md:flex-row gap-4 md:gap-8 *:text-slate-300 *:hover:text-white *:text-lg font-serif *:font-semibold underline-offset-8 *:hover:underline">
                    <li><a href="/" class="<?= $_SERVER['REQUEST_URI'] == '/' ? 'text-white underline' : '' ?>">Home</a></li>
                    <li><a href="/documents.php" class="<?= $_SERVER['REQUEST_URI'] == '/documents.php' ? 'text-white underline' : '' ?>">War Documents</a></li>
                    <li><a href="/interviews.php" class="<?= $_SERVER['REQUEST_URI'] == '/interviews.php' ? 'text-white underline' : '' ?>">Interviews</a></li>
                    <li><a href="/gallery.php" class="<?= $_SERVER['REQUEST_URI'] == '/gallery.php' ? 'text-white underline' : '' ?>">Photographs</a></li>
                    <li><a href="/contact.php" class="<?= $_SERVER['REQUEST_URI'] == '/contact.php' ? 'text-white underline' : '' ?>">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>