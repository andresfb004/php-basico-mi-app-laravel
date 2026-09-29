<x-guest-layout>
    <span class="tag">Nueva cuenta</span>
    <h1>Crear cuenta</h1>
    <p class="auth-copy">Regístrate para gestionar los carros de AutoMundo.</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @error('name') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            @error('email') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
            @error('password') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar contraseña</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary auth-submit">Registrarme</button>

        <div class="auth-links">
            <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
        </div>
    </form>
</x-guest-layout>
