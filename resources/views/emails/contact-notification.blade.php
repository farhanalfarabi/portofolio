<x-mail::message>
# Ada Pesan Baru Masuk!

Seseorang telah mengisi contact form di portfolio kamu.

<x-mail::panel>
**Nama:** {{ $senderName }}

**Email:** {{ $senderEmail }}

**Pesan:**
{{ $note }}
</x-mail::panel>

Balas langsung ke pengirim melalui email mereka:

<x-mail::button :url="'mailto:' . $senderEmail">
Balas {{ $senderName }}
</x-mail::button>

Salam,
{{ config('app.name') }}
</x-mail::message>
