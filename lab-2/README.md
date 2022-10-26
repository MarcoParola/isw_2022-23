# Laboratorio 2
In questo laboratorio spiegheremo come creare un form di login e registrazioni all'interno di un'applicazione web Laravel.

**Cosa ci fornisce Laravel per gestire l'autenticazione?**
Laravel si impegna a fornire gli strumenti necessari per implementare l'autenticazione in modo rapido e sicuro. Le strutture di autenticazione di Laravel sono costituite da ``guards`` e ``providers``. Le guards definiscono il modo in cui gli utenti vengono autenticati per ogni richiesta. Ad esempio, Laravel viene fornito con una ``session`` guard che mantiene lo stato utilizzando la memorizzazione della sessione e i cookie. I provider definiscono il modo in cui gli utenti vengono recuperati dallo storage persistente. Se la guard richiede che l'utente sia convalidato rispetto allo storage di back-end, l'implementazione del recupero dell'utente va nel provider di autenticazione. Il file di configurazione dell'autenticazione dell'applicazione si trova in ``config/auth.php``. 

In questi laboratori useremo le impostazioni di default di Laravel.



## Creare una nuova applicazione laravel
TODO usa file bat??
```
composer create-project --prefer-dist laravel/laravel "nome_progetto"
```


## Creare le view
Creiamo il seguente file ``resources\views\home.blade.php`` che ci fornisce il template, TODO spiega @guest, ..., @yield('content')
```html
<!DOCTYPE html>
<html>
<head>
    <title>ISW lab 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">ISW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>

            
        </div>
    </nav>
    @yield('content')
</body>
</html>
```

Implementiamo le viste per il login o la registrazione. Creiamo una sottocartella auth all'interno di views.
Notiamo che entrambe le view estendono 'home'.

resources\views\auth\registration.blade.php
```html
@extends('home')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
```

resources\views\auth\login.blade.php
```html
@extends('home')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
```

Per testare il corretto funzionamento delle view che abbiamo definito, dobbiamo aggiungere una nuova rotta al file web.php

```php
Route::get('/', function () { return view('home'); });
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/registration', function () { return view('auth.registration'); })->name('register-user');
```

NB questo ultimo blocco di codice lo abbiamo inserito momentaneamente per testare le view di login e registrazione. Inoltre, le pagine di login e registrazione ancora non funzionano.


## Creare un controller per il login
Un nuovo controller può essere definito da CLI o da GUI.
Collegarsi ad Artisan GUI e cercare il comando ``make:controller``, speficare un nome intuitivo come ``LoginController`` e valorizzare l'opzione Type con la stringa ``plain``.


```php
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('home');
    } 

    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }
}
```

Inoltre dobbiamo cambiare le rotte precedentemente definite e far gestire la callback da LoginController. (Aggiungiamo altre rotte che useremo nei prossimi passi).


```php
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'index']); 
Route::get('/home', [LoginController::class, 'home']); 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [LoginController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/signout', [LoginController::class, 'signOut'])->name('signout');
```




## Creare e configurare il database
Avviare XAMPP e collegarsi a http://localhost/phpmyadmin/ e creare un nuovo database assegnando un nome ``nome_db``. Ora dobbiamo aggiungere il nome del database, il nome utente e la password nel file di configurazione ``.env`` per collegare l'applicazione laravel al database.

```sql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_db
DB_USERNAME=root
DB_PASSWORD=
```

Se si utilizza il server locale MAMP in macOs, assicurarsi di aggiungere UNIX_SOCKET e DB_SOCKET sotto le credenziali del database nel file ``.env``.

```sql
UNIX_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
```

L'applicazione laravel viene fornita con il modello User di default e un file di migrazione predefiniti e dobbiamo solo eseguire l'apposito comanda artisan per creare la nuova tabella nel database o sfruttare l'interfaccia grafica Artisan GUI.
Collegarsi ad Artisan GUI, selezionare il comando ``migrate`` e specificare ``mysql`` nel campo ``Database``