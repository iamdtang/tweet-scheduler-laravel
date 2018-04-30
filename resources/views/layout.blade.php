<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tweet Scheduler</title>
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <div>
      <header class="flex bg-grey-darkest text-white">
        <h1 class="p-4 w-1/2">Tweet Scheduler</h1>
        <nav class="w-1/2 p-4">
          <ul class="list-reset text-right">
            @if (session('twitter-user'))
              <li>
                <a href="/logout" class="text-orange no-underline">Logout</a>
              </li>
            @endif
          </ul>
        </nav>
      </header>

      @yield('content')
    </div>

    @yield('scripts')
  </body>
</html>
