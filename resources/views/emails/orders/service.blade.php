@component('emails.message')
# Pedido de Servicios

**{{ $client['name'] }}**, acaba de solicitar el servicio de **{{ $service['name'] }}** para el **{{ $client['date'] }}**.

## Puedes contactarte con el(lla) a través de:

* **Correo:** {{ $client['email'] }}
* **Telefono:** {{ $client['phone'] }}
* **Mensaje:** {{ $client['msg'] }}

@endcomponent
