<x-guest-layout>
    <span class="tag">Recuperación</span>
    <h1>Nueva contraseña</h1>
    <p class="auth-copy">Elige una contraseña nueva para tu cuenta.</p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
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

        <button type="submit" class="btn btn-primary auth-submit">Restablecer contraseña</button>
    </form>
</x-guest-layout>
