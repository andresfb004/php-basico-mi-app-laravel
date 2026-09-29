<x-guest-layout>
    <span class="tag">Zona de gestión</span>
    <h1>Iniciar sesión</h1>
    <p class="auth-copy">Ingresa para administrar el catálogo de carros.</p>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
            @error('password') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <label for="remember_me" class="auth-check">
            <input id="remember_me" type="checkbox" name="remember">
            <span>Recordarme</span>
        </label>

        <button type="submit" class="btn btn-primary auth-submit">Entrar</button>

        <div class="auth-links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
            @endif
            <a href="{{ route('register') }}">Crear una cuenta</a>
        </div>
    </form>
</x-guest-layout>
