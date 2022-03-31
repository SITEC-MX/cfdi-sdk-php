<?PHP

/* Este archivo es generado autom�ticamente por la herramienta generar_openapi_json ### NO MODIFICAR MANUALMENTE ### */

$OPENAPI = array
(
	"/^estadoSAT$/U" => array("script_php_ruta"=>"estadoSAT", "variables"=>array(), "metodos"=>array("POST"=>array("autenticar"=>TRUE, "get"=>array(), "body"=>array("emisor_rfc"=>array("tipo"=>6, "requerido"=>TRUE), "receptor_rfc"=>array("tipo"=>6, "requerido"=>TRUE), "uuid"=>array("tipo"=>6, "requerido"=>TRUE), "total"=>array("tipo"=>5, "requerido"=>TRUE)), "body_tipo"=>"application/json", "respuesta"=>array("estado"=>array("tipo"=>3, "requerido"=>TRUE), "mensaje"=>array("tipo"=>6, "requerido"=>TRUE), "resultado"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("activo"=>array("tipo"=>1, "requerido"=>TRUE), "cancelable"=>array("tipo"=>1, "requerido"=>TRUE), "requireAceptacion"=>array("tipo"=>1, "requerido"=>TRUE), "cancelando"=>array("tipo"=>1, "requerido"=>TRUE), "cancelacion_expirada"=>array("tipo"=>1, "requerido"=>TRUE), "cancelacion_rechazada"=>array("tipo"=>1, "requerido"=>FALSE)))), "respuesta_tipo"=>"application/json"))),
	"/^emitir$/U" => array("script_php_ruta"=>"emitir", "variables"=>array(), "metodos"=>array("POST"=>array("autenticar"=>TRUE, "get"=>array(), "body"=>array("Emisor"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array("Rfc"=>array("tipo"=>6, "requerido"=>TRUE), "Nombre"=>array("tipo"=>6, "requerido"=>FALSE), "RegimenFiscal"=>array("tipo"=>6, "requerido"=>TRUE), "FacAtrAdquirente"=>array("tipo"=>6, "requerido"=>FALSE))), "Comprobante"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array("Version"=>array("tipo"=>6, "requerido"=>TRUE), "Serie"=>array("tipo"=>6, "requerido"=>FALSE), "Folio"=>array("tipo"=>6, "requerido"=>FALSE), "Fecha"=>array("tipo"=>6, "requerido"=>TRUE), "Sello"=>array("tipo"=>6, "requerido"=>FALSE), "FormaPago"=>array("tipo"=>6, "requerido"=>FALSE), "NoCertificado"=>array("tipo"=>6, "requerido"=>FALSE), "Certificado"=>array("tipo"=>6, "requerido"=>FALSE), "CondicionesDePago"=>array("tipo"=>6, "requerido"=>FALSE), "SubTotal"=>array("tipo"=>6, "requerido"=>FALSE), "Descuento"=>array("tipo"=>6, "requerido"=>FALSE), "Moneda"=>array("tipo"=>6, "requerido"=>TRUE), "TipoCambio"=>array("tipo"=>6, "requerido"=>FALSE), "Total"=>array("tipo"=>6, "requerido"=>TRUE), "TipoDeComprobante"=>array("tipo"=>6, "requerido"=>TRUE), "Exportacion"=>array("tipo"=>6, "requerido"=>FALSE), "MetodoPago"=>array("tipo"=>6, "requerido"=>FALSE), "LugarExpedicion"=>array("tipo"=>6, "requerido"=>TRUE), "Confirmacion"=>array("tipo"=>6, "requerido"=>FALSE))), "Receptor"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array("Rfc"=>array("tipo"=>6, "requerido"=>TRUE), "Nombre"=>array("tipo"=>6, "requerido"=>TRUE), "DomicilioFiscalReceptor"=>array("tipo"=>6, "requerido"=>TRUE), "ResidenciaFiscal"=>array("tipo"=>6, "requerido"=>FALSE), "NumRegIdTrib"=>array("tipo"=>3, "requerido"=>FALSE), "RegimenFiscalReceptor"=>array("tipo"=>6, "requerido"=>FALSE), "UsoCFDI"=>array("tipo"=>6, "requerido"=>TRUE))), "Conceptos"=>array("tipo"=>12, "requerido"=>TRUE, "arreglo"=>array("Concepto"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array("ClaveProdServ"=>array("tipo"=>6, "requerido"=>TRUE), "NoIdentificacion"=>array("tipo"=>6, "requerido"=>FALSE), "Cantidad"=>array("tipo"=>3, "requerido"=>TRUE), "ClaveUnidad"=>array("tipo"=>6, "requerido"=>TRUE), "Unidad"=>array("tipo"=>6, "requerido"=>FALSE), "Descripcion"=>array("tipo"=>6, "requerido"=>TRUE), "ValorUnitario"=>array("tipo"=>5, "requerido"=>TRUE), "Importe"=>array("tipo"=>5, "requerido"=>FALSE), "Descuento"=>array("tipo"=>5, "requerido"=>FALSE), "ObjetoImp"=>array("tipo"=>6, "requerido"=>FALSE))), "Impuestos"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("Retenciones"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("Base"=>array("tipo"=>5, "requerido"=>TRUE), "Impuesto"=>array("tipo"=>6, "requerido"=>TRUE), "TipoFactor"=>array("tipo"=>6, "requerido"=>TRUE), "TasaOCuota"=>array("tipo"=>6, "requerido"=>FALSE), "Importe"=>array("tipo"=>5, "requerido"=>FALSE))), "Traslados"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("Base"=>array("tipo"=>5, "requerido"=>TRUE), "Impuesto"=>array("tipo"=>6, "requerido"=>TRUE), "TipoFactor"=>array("tipo"=>6, "requerido"=>TRUE), "TasaOCuota"=>array("tipo"=>6, "requerido"=>FALSE), "Importe"=>array("tipo"=>5, "requerido"=>FALSE))))))), "Impuestos"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("TotalImpuestosRetenidos"=>array("tipo"=>5, "requerido"=>FALSE), "TotalImpuestosTrasladados"=>array("tipo"=>5, "requerido"=>FALSE), "Retenciones"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("Impuesto"=>array("tipo"=>6, "requerido"=>TRUE), "Importe"=>array("tipo"=>5, "requerido"=>TRUE))), "Traslados"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("Impuesto"=>array("tipo"=>6, "requerido"=>TRUE), "TipoFactor"=>array("tipo"=>6, "requerido"=>TRUE), "TasaOCuota"=>array("tipo"=>6, "requerido"=>TRUE), "Importe"=>array("tipo"=>5, "requerido"=>TRUE))))), "Complementos"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("cartaporte"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("informacion"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("TranspInternac"=>array("tipo"=>6, "requerido"=>TRUE), "EntradaSalidaMerc"=>array("tipo"=>6, "requerido"=>FALSE), "PaisOrigenDestino"=>array("tipo"=>6, "requerido"=>FALSE), "ViaEntradaSalida"=>array("tipo"=>6, "requerido"=>FALSE), "TotalDistRec"=>array("tipo"=>5, "requerido"=>FALSE))), "ubicaciones"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("TipoUbicacion"=>array("tipo"=>6, "requerido"=>TRUE), "IDUbicacion"=>array("tipo"=>6, "requerido"=>FALSE), "RFCRemitenteDestinatario"=>array("tipo"=>6, "requerido"=>TRUE), "NombreRemitenteDestinatario"=>array("tipo"=>6, "requerido"=>FALSE), "NumRegIdTrib"=>array("tipo"=>6, "requerido"=>FALSE), "ResidenciaFiscal"=>array("tipo"=>6, "requerido"=>FALSE), "NumEstacion"=>array("tipo"=>6, "requerido"=>FALSE), "NombreEstacion"=>array("tipo"=>6, "requerido"=>FALSE), "NavegacionTrafico"=>array("tipo"=>6, "requerido"=>FALSE), "FechaHoraSalidaLlegada"=>array("tipo"=>6, "requerido"=>FALSE), "TipoEstacion"=>array("tipo"=>6, "requerido"=>FALSE), "DistanciaRecorrida"=>array("tipo"=>5, "requerido"=>FALSE), "domicilio"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("Calle"=>array("tipo"=>6, "requerido"=>FALSE), "NumeroExterior"=>array("tipo"=>6, "requerido"=>FALSE), "NumeroInterior"=>array("tipo"=>6, "requerido"=>FALSE), "Colonia"=>array("tipo"=>6, "requerido"=>FALSE), "Localidad"=>array("tipo"=>6, "requerido"=>FALSE), "Referencia"=>array("tipo"=>6, "requerido"=>FALSE), "Municipio"=>array("tipo"=>6, "requerido"=>FALSE), "Estado"=>array("tipo"=>6, "requerido"=>TRUE), "Pais"=>array("tipo"=>6, "requerido"=>TRUE), "CodigoPostal"=>array("tipo"=>6, "requerido"=>TRUE))))), "mercancias"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("BienesTransp"=>array("tipo"=>6, "requerido"=>TRUE), "ClaveSTCC"=>array("tipo"=>6, "requerido"=>FALSE), "Descripcion"=>array("tipo"=>6, "requerido"=>TRUE), "Cantidad"=>array("tipo"=>3, "requerido"=>TRUE), "ClaveUnidad"=>array("tipo"=>6, "requerido"=>TRUE), "Unidad"=>array("tipo"=>6, "requerido"=>FALSE), "Dimensiones"=>array("tipo"=>6, "requerido"=>FALSE), "MaterialPeligroso"=>array("tipo"=>6, "requerido"=>FALSE), "CveMaterialPeligroso"=>array("tipo"=>6, "requerido"=>FALSE), "Embalaje"=>array("tipo"=>6, "requerido"=>FALSE), "DescripEmbalaje"=>array("tipo"=>6, "requerido"=>FALSE), "PesoEnKg"=>array("tipo"=>5, "requerido"=>TRUE), "ValorMercancia"=>array("tipo"=>5, "requerido"=>FALSE), "Moneda"=>array("tipo"=>6, "requerido"=>FALSE), "FraccionArancelaria"=>array("tipo"=>6, "requerido"=>FALSE), "UUIDComercioExt"=>array("tipo"=>6, "requerido"=>FALSE))), "autotransporte"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("PermSCT"=>array("tipo"=>6, "requerido"=>TRUE), "NumPermisoSCT"=>array("tipo"=>6, "requerido"=>TRUE), "identificacionvehicular"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("ConfigVehicular"=>array("tipo"=>6, "requerido"=>TRUE), "PlacaVM"=>array("tipo"=>6, "requerido"=>TRUE), "AnioModeloVM"=>array("tipo"=>6, "requerido"=>TRUE))), "seguros"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("AseguraRespCivil"=>array("tipo"=>6, "requerido"=>TRUE), "PolizaRespCivil"=>array("tipo"=>6, "requerido"=>TRUE), "AseguraMedAmbiente"=>array("tipo"=>6, "requerido"=>FALSE), "PolizaMedAmbiente"=>array("tipo"=>6, "requerido"=>FALSE), "AseguraCarga"=>array("tipo"=>6, "requerido"=>FALSE), "PolizaCarga"=>array("tipo"=>6, "requerido"=>FALSE), "PrimaSeguro"=>array("tipo"=>5, "requerido"=>FALSE))))), "figuratransporte"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("TipoFigura"=>array("tipo"=>6, "requerido"=>TRUE), "RFCFigura"=>array("tipo"=>6, "requerido"=>FALSE), "NumLicencia"=>array("tipo"=>6, "requerido"=>FALSE), "NombreFigura"=>array("tipo"=>6, "requerido"=>FALSE), "NumRegIdTribFigura"=>array("tipo"=>6, "requerido"=>FALSE), "ResidenciaFiscalFigura"=>array("tipo"=>6, "requerido"=>FALSE))))), "pago"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("informacion"=>array("tipo"=>11, "requerido"=>FALSE, "propiedades"=>array("FechaPago"=>array("tipo"=>6, "requerido"=>TRUE), "FormaDePagoP"=>array("tipo"=>6, "requerido"=>FALSE), "MonedaP"=>array("tipo"=>6, "requerido"=>FALSE), "TipoCambioP"=>array("tipo"=>6, "requerido"=>FALSE), "Monto"=>array("tipo"=>6, "requerido"=>FALSE), "NumOperacion"=>array("tipo"=>6, "requerido"=>FALSE), "RfcEmisorCtaOrd"=>array("tipo"=>6, "requerido"=>FALSE), "NomBancoOrdExt"=>array("tipo"=>6, "requerido"=>FALSE), "CtaOrdenante"=>array("tipo"=>6, "requerido"=>FALSE), "RfcEmisorCtaBen"=>array("tipo"=>6, "requerido"=>FALSE), "CtaBeneficiario"=>array("tipo"=>6, "requerido"=>FALSE), "TipoCadPago"=>array("tipo"=>6, "requerido"=>FALSE), "CertPago"=>array("tipo"=>6, "requerido"=>FALSE), "CadPago"=>array("tipo"=>6, "requerido"=>FALSE), "SelloPago"=>array("tipo"=>6, "requerido"=>FALSE))), "pagos"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("IdDocumento"=>array("tipo"=>6, "requerido"=>TRUE), "Serie"=>array("tipo"=>6, "requerido"=>FALSE), "Folio"=>array("tipo"=>6, "requerido"=>FALSE), "MonedaDR"=>array("tipo"=>6, "requerido"=>TRUE), "TipoCambioDR"=>array("tipo"=>6, "requerido"=>FALSE), "MetodoDePagoDR"=>array("tipo"=>6, "requerido"=>FALSE), "NumParcialidad"=>array("tipo"=>6, "requerido"=>FALSE), "ImpSaldoAnt"=>array("tipo"=>6, "requerido"=>FALSE), "ImpPagado"=>array("tipo"=>6, "requerido"=>FALSE), "ImpSaldoInsoluto"=>array("tipo"=>6, "requerido"=>FALSE)))))))), "body_tipo"=>"application/json", "respuesta"=>array("estado"=>array("tipo"=>3, "requerido"=>TRUE), "mensaje"=>array("tipo"=>6, "requerido"=>TRUE), "resultado"=>array("tipo"=>6, "requerido"=>TRUE)), "respuesta_tipo"=>"application/xml"))),
	"/^cancelar$/U" => array("script_php_ruta"=>"cancelar", "variables"=>array(), "metodos"=>array("POST"=>array("autenticar"=>TRUE, "get"=>array(), "body"=>array("uuid"=>array("tipo"=>6, "requerido"=>TRUE), "motivocancelacion"=>array("tipo"=>6, "requerido"=>TRUE)), "body_tipo"=>"application/json", "respuesta"=>array("estado"=>array("tipo"=>3, "requerido"=>TRUE), "mensaje"=>array("tipo"=>6, "requerido"=>TRUE), "resultado"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array())), "respuesta_tipo"=>"application/json"))),
	"/^(?<uuid>[a-zA-Z0-9+_.-]+)$/U" => array("script_php_ruta"=>"raiz", "variables"=>array("uuid"=>array("tipo"=>6)), "metodos"=>array("GET"=>array("autenticar"=>TRUE, "get"=>array(), "body"=>array(), "body_tipo"=>"application/json", "respuesta"=>array("estado"=>array("tipo"=>3, "requerido"=>TRUE), "mensaje"=>array("tipo"=>6, "requerido"=>TRUE), "resultado"=>array("tipo"=>6, "requerido"=>TRUE)), "respuesta_tipo"=>"application/xml")))
);