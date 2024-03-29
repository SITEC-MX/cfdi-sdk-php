<?php
/**
 * Sistemas Especializados e Innovación Tecnológica, SA de CV
 * Mpsoft.CFDI - Comprobantes Fiscales Digitales por Internet
 *
 * v.2.0.0.0 - 2022-03-31
 */
namespace Mpsoft\CFDI;

use \GuzzleHttp\Client;
use \Exception;
use \Throwable;

class CFDI
{
    private $rfc = NULL;
    private $token = NULL;

    private $host = "cfdi.sitec-mx.com";

    private $guzzle = NULL;
    private $openapi = NULL;

    public const NO_IMPLEMENTADO = 0;
    public const ENDPOINT_ERROR_GENERAR = 950;
    public const RESPUESTA_NO_DISPONIBLE = 951;

    function __construct(string $rfc, string $token)
    {
        $this->rfc = $rfc;
        $this->token = $token;

        $this->guzzle = new Client();
    }

    private function ObtenerURLEndPoint(string $url, array $variables, ?array $querystrings)
    {
        $endpoint_elementos = array();
        $endpoint_elementos[] = $this->host;

        $url_elementos = explode("/", $url);
        foreach($url_elementos as $url_elemento) // Para cada elemento de la URL
        {
            if($url_elemento[0] == "<") // Si es una variable
            {
                $variable_nombre = substr($url_elemento, 1, -1);

                if( isset($variables[$variable_nombre]) ) // Si se proporciona la variable requerida
                {
                    $endpoint_elementos[] = $variables[$variable_nombre];
                }
                else // Si no se proporciona la variable requerida
                {
                    throw new Exception("No se proporcionó la variable '{$variable_nombre}'.");
                }
            }
            else // Si no es una variable
            {
                $endpoint_elementos[] = $url_elemento;
            }
        }

        $querystring = NULL;
        if($querystrings) // Si se proporciona query-string
        {
            $querystring = "?" . http_build_query($querystrings);
        }

        $endpoint_url = implode("/", $endpoint_elementos);
        return "https://{$endpoint_url}{$querystring}";
    }


    private function API_CALL(string $metodo, string $url, ?array $variables=NULL, ?array $querystrings=NULL, ?array $body=NULL)
    {
        $estado = array("estado"=>CFDI::NO_IMPLEMENTADO, "mensaje"=>"OK");

        if(!$variables) // Si no se proporcionan las variables
        {
            $variables = array();
        }

        // Calculamos la URL de la llamada
        $endpoint_url = NULL;
        try
        {
            $endpoint_url = $this->ObtenerURLEndPoint($url, $variables, $querystrings);
        }
        catch(Throwable $t) // Error al generar la URL de la llamada
        {
            $estado = array("estado"=>CFDI::ENDPOINT_ERROR_GENERAR, "mensaje"=>"Error al generar la URL de la llamada.", "debug"=> utf8_encode($t->getMessage()));
        }

        if($endpoint_url) // Si se obtiene la URL de la llamada
        {
            // Generamos las opciones
            $opciones = array();
            $opciones["auth"] = array($this->rfc, $this->token);

            if($body)
            {
                $opciones["json"] = $body;
            }

            $response = NULL;
            try
            {
                $response = $this->guzzle->request($metodo, $endpoint_url, $opciones);
            }
            catch(Throwable $t) // Error al generar la URL del Endpoint
            {
                $response = $t->getResponse();
            }

            if($response) // Si hay respuesta
            {
                $response_text = $response->getBody();
                $estado = json_decode($response_text, TRUE);
            }
            else // Si no hay respuesta
            {
                $estado = array("estado"=>CFDI::RESPUESTA_NO_DISPONIBLE, "mensaje"=>"Error al obtener la respuesta de la llamada.");
            }
        }

        return $estado;
    }

    private function ObtenerFirmaDeVariables(?array $variables = NULL)
    {
        if(!$variables)
        {
            $variables = array();
        }

        if(! in_array("empresa", $variables)) // Si no se proporciona empresa como variable
        {
            $variables["empresa"] = NULL;
        }

        $variables_proporcionadas = array_keys($variables);
        asort($variables_proporcionadas);
        $variables_key = implode("-", $variables_proporcionadas);

        return $variables_key;
    }

    public function GenerarCadenaOriginal(string $TimbreFiscalDigital_str)
    {
        $TimbreFiscalDigital = simplexml_load_string($TimbreFiscalDigital_str);

        $xsl = new \DOMDocument();
        $xsl->load(__DIR__ . "/xslt/cadenaoriginal_TFD_1_1.xslt");

        $proc = new \XSLTProcessor();
        $proc->importStyleSheet($xsl);

        return $proc->transformToXML($TimbreFiscalDigital);
    }


	public function POST_EstadoSAT(?array $variables=NULL,?array $querystrings=NULL,?array $body=NULL){ $url = "estadoSAT"; return $this->API_CALL("POST", $url, $variables, $querystrings, $body); }
	public function POST_DescargaMasivaSAT(?array $variables=NULL,?array $querystrings=NULL,?array $body=NULL){ $url = "descargaMasivaSAT"; return $this->API_CALL("POST", $url, $variables, $querystrings, $body); }
	public function GET_DescargaMasivaSAT(?array $variables=NULL,?array $querystrings=NULL){ $url = "descargaMasivaSAT/<id>"; return $this->API_CALL("GET", $url, $variables, $querystrings, NULL); }
	public function POST_Emitir(?array $variables=NULL,?array $querystrings=NULL,?array $body=NULL){ $url = "emitir"; return $this->API_CALL("POST", $url, $variables, $querystrings, $body); }
	public function POST_Cancelar(?array $variables=NULL,?array $querystrings=NULL,?array $body=NULL){ $url = "cancelar"; return $this->API_CALL("POST", $url, $variables, $querystrings, $body); }
	public function POST_GenerarPDF(?array $variables=NULL,?array $querystrings=NULL,?array $body=NULL){ $url = "generarPDF"; return $this->API_CALL("POST", $url, $variables, $querystrings, $body); }
	public function GET_Raiz(?array $variables=NULL,?array $querystrings=NULL){ $url = "<uuid>"; return $this->API_CALL("GET", $url, $variables, $querystrings, NULL); }

}
