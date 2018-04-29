<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tweet Scheduler</title>
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <div>
      <header class="bg-grey-darkest text-white">
        <h1 class="p-4">Tweet Scheduler</h1>
        <nav>
          <ul>
            @if (session('twitter-user'))
              <li>
                <a href="/logout">Logout</a>
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
