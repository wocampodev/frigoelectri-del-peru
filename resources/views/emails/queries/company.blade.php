@component('emails.message')
# Tienes una nueva nueva consulta

Desde tu página web han generado una consulta con los siguientes datos:

* **Nombres:** {{ $client['name'] }}
* **Compañia:** @if ($client['company']=='') {{'-'}} @else {{ $client['company'] }} @endif

* **Correo electronico:** {{ $client['email'] }}
* **Telefono:** {{ $client['phone'] }}
* **Descripcion de la consulta:** {{ $client['description'] }}
@endcomponent
