<!DOCTYPE html>
<html lang="en">

<head>
  @vite('resources/css/app.css')
  <title>Laravel From Scratch Blog</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: Open Sans, sans-serif">
  <nav class="flex flex-col items-center p-4 md:flex md:justify-between md:items-center">
    <a class="w-40" href="/">
      <img class="w-full" src="images/logo.svg" alt="Laracasts Logo">
    </a>
    <div class="mt-8 md:mt-0">
      <a href="/" class="text-xs font-bold uppercase">Home Page</a>
      <a href="#" class="px-5 py-3 ml-3 text-xs font-semibold text-white uppercase bg-blue-500 rounded-full">
        Subscribe for Updates
      </a>
    </div>
  </nav>

	{{ $slot }}

  <footer class="px-10 py-16 mt-16 text-center bg-gray-100 border border-black border-opacity-5 rounded-xl">
    <img src="images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

    <div class="mt-10">
      <div class="relative inline-block mx-auto rounded-full lg:bg-gray-200">

        <form method="POST" action="#" class="text-sm lg:flex">
          <div class="flex items-center lg:py-3 lg:px-5">
            <label for="email" class="hidden lg:inline-block">
              <img src="images/mailbox-icon.svg" alt="mailbox letter">
            </label>

            <input id="email" type="text" placeholder="Your email address"
              class="py-2 pl-4 lg:bg-transparent lg:py-0 focus-within:outline-none">
          </div>

          <button type="submit"
            class="px-8 py-3 mt-4 text-xs font-semibold text-white uppercase transition-colors duration-300 bg-blue-500 rounded-full hover:bg-blue-600 lg:mt-0 lg:ml-3">
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </footer>
</body>

</html>
