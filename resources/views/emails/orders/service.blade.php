@component('emails.message')
# Pedido de Servicios

**{{ $client['name'] }}**@if($client['company']!='') **({{ $client['company']}})**@endif, 
desea saber el costo por el servicio de **{{ $service['name'] }}**.

## Puedes contactarte con el(lla) a través de: 
* **Compañia:** @if($client['company']!='') {{ $client['company'] }} @else - @endif

* **Correo:** {{ $client['email'] }}
* **Telefono:** {{ $client['phone'] }}
* **Mensaje:** {{ $client['msg'] }}

@endcomponent
