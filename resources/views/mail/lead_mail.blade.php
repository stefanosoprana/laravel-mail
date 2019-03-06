@component('mail::message')
  C'è una nuova richiesta di info da parte di {{ $lead->name }}. <br>
  {{ $lead->message }} <br>
  Contattalo all'indirizzo {{ $lead->email }}
@endcomponent
