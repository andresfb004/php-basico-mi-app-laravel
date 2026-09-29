<x-guest-layout>
    <span class="tag">Área segura</span>
    <h1>Confirma tu contraseña</h1>
    <p class="auth-copy">Por seguridad, confirma tu contraseña antes de continuar.</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
            @error('password') <span class="form-error">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary auth-submit">Confirmar</button>
    </form>
</x-guest-layout>
