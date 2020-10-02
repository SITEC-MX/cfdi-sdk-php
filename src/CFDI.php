<?php
/**
 * Sistemas Especializados e Innovación Tecnológica, SA de CV
 * Mpsoft.CFDI - Comprobantes Fiscales Digitales por Internet
 *
 * v.1.0.0.0 - 2018-11-18
 */
namespace Mpsoft\CFDI;

class CFDI
{
    private $servidor = "cfdi.svc-sitec.com";
    private $token;
    const NOINICIALIZADO = 0;
    const ERRORCURL = -9999;
    const ERRORRESPUESTA = -99999;

    public function __construct($token)
    {
        $this->token = $token;
    }

    private function APICALL($accion, $parametros)
    {
        $url = "https://{$this->servidor}/{$accion}";

        $parametros["Token"] = $this->token;

        $content = json_encode($parametros);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);


        $json_response = curl_exec($curl);


        $estado = array("estado"=>self::NOINICIALIZADO, "mensaje"=>"No inicializado");

        if (curl_error($curl)) // Error al procesar la solicitud
        {
            $estado["estado"] = self::ERRORCURL;
            $estado["mensaje"] = curl_error($curl);
        }
        else // Éxito al procesar la solicitud
        {
            if($estado = json_decode($json_response, true)) // Si se obtiene un JSON válido
            {
                // Éxito
            }
            else // Si no se obtiene un JSON válido
            {
                $estado["estado"] = self::ERRORRESPUESTA;
                $estado["mensaje"] = "La respuesta no se reconoce cómo válida. Error desconocido.";
            }
        }

        curl_close($curl);

        return $estado;
    }

    public function Certificar($cfdi)
    {
        return $this->APICALL("emitir", $cfdi);
    }

    public function Cancelar($rfc, $uuid)
    {
        $parametros = array
            (
                "rfc" => $rfc,
                "uuid" => $uuid,
            );

        return $this->APICALL("cancelar", $parametros);
    }
}