@component('emails.message')
# ¡Petición de servicio enviado con exito!

Su pedido: 

* {{ $service['name'] }} 

fue solicitado y enviado con éxito, pronto le daremos una respuesta. Gracias.

### También puedes contactarnos a través de: 
* Correo: {{ $company['email'] }}
* Telefono: {{ $company['phone'] }}
@endcomponent
