<?php

return [
    'configs' => [
        [
            /*
             * Este paquete admite varios puntos finales de recepción de webhooks. si solo tienes
             * un punto final que recibe webhooks, puede usar 'predeterminado'.
             */
            'name' => 'default',

            /*
             * Esperamos que cada llamada de webhook se firme con un secreto. este secreto
             * se utiliza para verificar que la carga útil no haya sido manipulada.
             */
            'signing_secret' => env('WEBHOOK_CLIENT_SECRET'),

            /*
             * El nombre del encabezado que contiene la firma.
             */
            'signature_header_name' => 'Signature',

            /*
             * Esta clase verificará que el contenido del encabezado de la firma sea válido.
             *
             * Debería implementar \Spatie\WebhookClient\SignatureValidator\SignatureValidator
             */
            'signature_validator' => \Spatie\WebhookClient\SignatureValidator\DefaultSignatureValidator::class,

            /*
             * Esta clase determina si la llamada del webhook debe almacenarse y procesarse.
             */
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,

            /*
             * Esta clase determina la respuesta en una llamada de webhook válida..
             */
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,

            /*
             * El nombre de clase del modelo que se usará para almacenar llamadas de webhook. La clase debe
             * ser igual o extender Spatie\WebhookClient\Models\WebhookCall.
             */
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,

            /*
             * En esta matriz, puede pasar los encabezados que deben almacenarse en
             * el modelo de llamada de webhook cuando entra un webhook.
             *
             * Para almacenar todos los encabezados, establezca este valor en `*`.
             */
            'store_headers' => [

            ],

            /*
             * El nombre de clase del trabajo que procesará la solicitud de webhook.
             *
             * Debe establecerse en una clase que extienda \Spatie\WebhookClient\Jobs\ProcessWebhookJob.
             */
            'process_webhook_job' => '',
        ],
    ],
];
