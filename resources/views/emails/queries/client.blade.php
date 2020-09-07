@component('emails.message')
# Tu consulta nos ha llegado exitosamente

Gracias **{{ $client['name'] }}**
@if ($client['company']!='') **({{ $client['company'] }})** @endif por consultarnos tu duda.
Te daremos una respuesta a tu consulta lo más pronto posible.

## Tambien puedes contactarnos a través de: 
* **Correo:** {{ $company['email'] }}
* **Telefono:** {{ $company['phone'] }}
@endcomponent
