<x-guest-layout>
    <span class="tag">Verificación</span>
    <h1>Verifica tu correo</h1>
    <p class="auth-copy">¡Gracias por registrarte! Antes de empezar, verifica tu correo con el enlace que te enviamos. Si no te llegó, podemos enviarte otro.</p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success">Te enviamos un nuevo enlace de verificación.</div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary auth-submit">Reenviar correo de verificación</button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="auth-links">
        @csrf
        <button type="submit" class="link-button">Cerrar sesión</button>
    </form>
</x-guest-layout>
