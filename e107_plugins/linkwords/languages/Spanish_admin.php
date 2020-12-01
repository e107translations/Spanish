<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Spanish Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2020/11/17 20:06:17
|
|        $Author: tgtje $
+---------------------------------------------------------------+
*/

define("LWLAN_4", "No hay palabras de enlace definidos todavía.");
define("LWLAN_5", "Palabras");
define("LWLAN_6", "Enlace");
define("LWLAN_7", "¿Activo?");
define("LWLAN_21", "Palabra de autolink (o lista de palabras separados por comas)");
define("LWLAN_26", "Zonas en las que permitan linkwords");
define("LWLAN_28", "Páginas en que desactivar el linkwords");
define("LWLAN_33", "Áreas de título");
define("LWLAN_34", "Resúmenes del artículo");
define("LWLAN_35", "Cuerpo del texto");
define("LWLAN_36", "Descripciones (links etc.)");
define("LWLAN_40", "Títulos introducidos por el usuario (por ejemplo, foro)");
define("LWLAN_41", "Texto introducido por el usuario (por ejemplo, foro)");
define("LWLAN_50", "Información sobre herramientas");
define("LWLAN_52", "Linkword sólo");
define("LWLAN_53", "Sugerencia solamente");
define("LWLAN_54", "Linkword y descripción");
define("LWLAN_55", "Abrir enlace en nueva ventana");
define("LWLAN_58", "Gancho de Pref convertido al formato 0,8");
define("LWLAN_59", "Habilitar la funcionalidad de Ajax");
define("LWLAN_64", "Suprimir el enlace en la página actual");
define("LWLAN_66", "Clase CSS personalizada");
define("LWLAN_67", "Máximo de enlaces/consejos");
define("LAN_LW_HELP_01", "  <b>Áreas para permitir</b><br>muchas áreas de texto tienen un \'context\ asociado', y linkwords se mostrará sólo en áreas de coincidencia de ese contexto.<br><br>
  <b>Desactivar Linkwords</b><br>Linkwords puede ser desactivada en específico de páginas, o páginas que empareja un patrón. Entre estos aquí (misma sintaxis en cuanto a menús), un patrón por la línea. 
  Si el patrón termina en \ '! \', esto corresponde a \'end de query\, y suele ser una coincidencia exacta. De lo contrario coincidirá con cualquier URL que contiene la cadena especificada.<br>Observe que linkwords <i>no</i> aparece en las páginas de admin.<br><br>
  <b>Habilitar la funcionalidad de Ajax</b><br>La información sobre herramientas puede utilizar Ajax para obtener información para su presentación. Esto generalmente requiere algunas custom de codificación.<br><br>
  <b>Suprimir el enlace en la página actual</b><br>Generalmente su sentido para el usuario poder hacer clic en un enlace si they\ 're ya en la página. Marque esta casilla para quitar la opción,<br>");
define("LAN_LW_HELP_02", "Definir las palabras que se convierten en enlaces cliqueables, o que muestre texto en mouseover, aquí<br><br>
  <b><u>Palabra enlace</u></b><br>Esto es entre mayúsculas y minúsculas. Para varias palabras con los mismos enlaces y descripciones, sepárelos por comas (sin espacios)<br><br>
  <b><u>Enlace</u></b><br>Definir un enlace clic aquí. Si su un enlace externo, [i] debe [/ i] empezar \'http://\'. Si es un enlace dentro de este sitio, pueden utilizarse las constantes normales {e_XXX}.<br><br>
  <b><u>Información sobre herramientas</u></b><br>Esto define el texto que aparece cuando el user\ «s del mouse pasa sobre la palabra.<br><br>
  <b><u>LW ID (identificador descripción)</u></b><br><br>Esto define un identificador numérico opcional para ser utilizado con Ajax de procesamiento. Si en blanco, se utiliza el número de registro de base de datos.<br><br>
  <b><u>¿Activar?</u></b><br>Define las opciones que están activas.");
define("LAN_LW_HELP_03", "Normalmente no tiene sentido que el usuario pueda hacer clic en un enlace si ya está en la página a la que enlaza. Cuando esta opción está desactivada, las palabras de enlace no se activan en este caso.");
define("LAN_LW_HELP_04", "Las palabras de enlace pueden ser desactivadas en páginas específicas, o páginas que coincidan con un patrón. Introduzca estas aquí (la misma sintaxis que para la visibilidad del menú), un patrón por línea. Si el patrón termina en '!', esto corresponde al 'fin de la consulta', y suele ser una coincidencia exacta. De lo contrario, cualquier URL que contenga la cadena especificada coincidirá.");
define("LAN_LW_HELP_05", "Añadirá esta clase a todos los enlaces generados.");
define("LAN_LW_HELP_10", "Aquí puedes definir las palabras que se convierten en enlaces clicables, o que muestran el texto al pasar el ratón por encima.");
define("LAN_LW_HELP_11", "Esto es insensible a los casos. Para el mapeo de múltiples palabras a los mismos enlaces y tooltips, sepárelos con comas (sin espacios)");
define("LAN_LW_HELP_12", "Defina un enlace en el que se pueda hacer clic aquí. Si es un enlace externo, DEBE comenzar con 'http(s)://'. Si es un enlace dentro de este sitio, las constantes normales {e_XXX} pueden ser usadas.");
define("LAN_LW_HELP_13", "Define qué opciones están activas.");
define("LAN_LW_HELP_14", "Esto define el texto que se mostrará cuando el ratón del usuario pase por encima de la palabra.");
define("LAN_LW_HELP_15", "Cantidad máxima de las mismas palabras de enlace. Debe ser un número positivo. Se usa cuando la misma palabra se encuentra varias veces en un texto.");
define("LAN_LW_HELP_16", "Esto define una identificación numérica opcional para ser usada con el procesamiento de Ajax. Debe ser un número positivo. Si está en blanco, se utiliza el número de registro de la base de datos");
define("LAN_LW_HELP_17", "Cuando se enciende, el enlace se abre en una nueva pestaña/ventana del navegador");
