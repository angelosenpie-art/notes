<html>
  <head>
    <title>Laravel Class</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
  </style>
  </head>
  <body class="bg-gray-200" style="background-image: url('https://www.zebrapen.com/wp-content/uploads/2019/10/10_24_NotesBlog-e1570723912946.jpg')">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            @auth
            <li>
                <a href="{{ route('profile')}}" class="p-3">Profile</a>
            </li>
            <li>
                <a href="{{ route('notes.create')}}" class="p-3">Notes</a>
            </li>
            @endauth
            <li>
                <a href="{{ route('author')}}" class="p-3 text-blue-500"> Project Author </a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li>
                <a href="" class="p-3">Welcome  {{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout')}}" method="post" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{ route('register')}}" class="p-3">Register</a>
                </li>
                <li>
                <a href="{{ route('login')}}" class="p-3">Login</a>
                </li>
            @endguest
        </ul>
    </nav>
    <main class="mt-10 mx-auto flex justify-center sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        @yield('content')
    </main>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
