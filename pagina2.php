<?php
   $xslDoc = new DOMDocument();
   $xslDoc->load("data1.xsl");

   $xmlDoc = new DOMDocument();
   $xmlDoc->load("data1.xml");

   $proc = new XSLTProcessor();
   $proc->importStylesheet($xslDoc);
   echo $proc->transformToXML($xmlDoc);
?>