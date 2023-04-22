<?php

return [

    /*
     *  La cola predeterminada que debe usarse para enviar solicitudes de webhook.
     */
    'queue' => 'default',

    /*
     *  La conexión de cola predeterminada que debe usarse para enviar solicitudes de webhook..
     */
    'connection' => null,

    /*
     * El verbo http predeterminado para usar.
     */
    'http_verb' => 'post',

    /*
     * Esta clase es responsable de calcular la firma que se agregará a
     * los encabezados de la solicitud de webhook. Un cliente de webhook puede usar la firma
     * para verificar que la solicitud no haya sido manipulada.
     */
    'signer' => \Spatie\WebhookServer\Signer\DefaultSigner::class,

    /*
     * Este es el nombre del encabezado donde se agregará la firma..
     */
    'signature_header_name' => 'Signature',

    /*
     * Estos son los encabezados que se agregarán a todas las solicitudes de webhook.
     */
    'headers' => [
        'Content-Type' => 'application/json',
    ],

    /*
     * Si una llamada a un webhook tarda más de esta cantidad de segundos
     * el intento se considerará fallido.
     */
    'timeout_in_seconds' => 3,

    /*
     * La cantidad de veces que se debe llamar al webhook antes de que nos rindamos.
     */
    'tries' => 3,

    /*
     * Esta clase determina cuántos segundos debe haber entre intentos.
     */
    'backoff_strategy' => \Spatie\WebhookServer\BackoffStrategy\ExponentialBackoffStrategy::class,

    /*
     * Por defecto comprobaremos que el certificado ssl del destino
     * del webhook es válido
     */
    'verify_ssl' => true,

    /*
     * Cuando se establece en verdadero, se lanzará una excepción cuando falle el último intento
     */
    'throw_exception_on_failure' => false,

    /*
     * Al usar Laravel Horizon, puede especificar etiquetas que deben usarse en el
     * trabajo subyacente que realiza la solicitud de webhook.
     */
    'tags' => [],
];
