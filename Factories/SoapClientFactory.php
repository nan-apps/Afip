<?php
namespace AfipClient\Factories;

use AfipClient\ACHelper;

class SoapClientFactory
{

    /**
     * Crea un cliente soap
     * @param string $wsdl
     * @param string $end_point
     * @return SoapClient
     */
    public static function create($wsdl, $end_point)
    {
        return new \SoapClient(
        
            $wsdl,
                [
                    'soap_version'   => SOAP_1_2,
                    'location'       => $end_point,
                    'stream_context' => stream_context_create(['ssl' => ['ciphers'=>'DEFAULT@SECLEVEL=1']])
                ]
        
        );
    }
}
