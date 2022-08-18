

<!DOCTYPE html>
<html>
    <body>
        <p>Welcome! You are authenticated. <a href="{{ route('logout') }}">Log out</a></p>
        <div>
            <pre><?php

            use Illuminate\Support\Facades\Auth;

            print_r(Auth::user()) ?></pre>
        </div>
    </body>
</html>