<x-mail::message>
# Richiesta di un preventivo

<b>{{ $name }}</b> ha inoltrato una richiesta di preventivo tramite il sito web di <b>{{ config('app.name') }}</b>.

Tipo di servizio richiesto: <b>{{ $service }}</b>.

Email: <b>{{ $email }}</b>.

@if($text)
Messaggio: <b>{{ $text }}</b>.
@endif

Grazie,<br>
{{ config('app.name') }}
</x-mail::message>
