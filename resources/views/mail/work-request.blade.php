<x-mail::message>
# Richiesta di lavoro

<b>{{ $name }}</b> ha inoltrato una richiesta di lavoro tramite il sito web di <b>{{ config('app.name') }}</b>.


Email: <b>{{ $email }}</b>.

@if($text)
Messaggio: <b>{{ $text }}</b>.
@endif

Grazie,<br>
{{ config('app.name') }}
</x-mail::message>
