<x-guest-layout>
    <span class="tag">Recuperación</span>
    <h1>¿Olvidaste tu contraseña?</h1>
    <p class="auth-copy">Escribe tu correo y te enviaremos un enlace para crear una nueva.</p>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary auth-submit">Enviar enlace</button>

        <div class="auth-links">
            <a href="{{ route('login') }}">← Volver al inicio de sesión</a>
        </div>
    </form>
</x-guest-layout>
