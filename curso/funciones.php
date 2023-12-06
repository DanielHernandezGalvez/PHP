<?php
$nombre = "Daniel";
function saludo($nombre) {
    echo "hola " . $nombre;
};

saludo($nombre);

function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
    // echo $resultado;
}
echo "<br/>";
$resultadi = sumar(3,56);
echo $resultadi;

# Área de un triángulo
function calcular_area_triangulo($base, $altura) {
    $resultado = ($base * $altura) / 2;
    return $resultado;
}

echo calcular_area_triangulo(10, 10);

# Funciones con strings 

/*
addcslashes — Quote string with slashes in a C style
addslashes — Quote string with slashes
bin2hex — Convert binary data into hexadecimal representation
chop — Alias of rtrim
chr — Generate a single-byte string from a number
chunk_split — Split a string into smaller chunks
convert_cyr_string — Convert from one Cyrillic character set to another
convert_uudecode — Decode a uuencoded string
convert_uuencode — Uuencode a string
count_chars — Return information about characters used in a string
crc32 — Calculates the crc32 polynomial of a string
crypt — One-way string hashing
echo — Output one or more strings
explode — Split a string by a string
fprintf — Write a formatted string to a stream
get_html_translation_table — Returns the translation table used by htmlspecialchars and htmlentities
hebrev — Convert logical Hebrew text to visual text
hebrevc — Convert logical Hebrew text to visual text with newline conversion
hex2bin — Decodes a hexadecimally encoded binary string
html_entity_decode — Convert HTML entities to their corresponding characters
htmlentities — Convert all applicable characters to HTML entities
htmlspecialchars_decode — Convert special HTML entities back to characters
htmlspecialchars — Convert special characters to HTML entities
implode — Join array elements with a string
join — Alias of implode
lcfirst — Make a string's first character lowercase
levenshtein — Calculate Levenshtein distance between two strings
localeconv — Get numeric formatting information
ltrim — Strip whitespace (or other characters) from the beginning of a string
md5_file — Calculates the md5 hash of a given file
md5 — Calculate the md5 hash of a string
metaphone — Calculate the metaphone key of a string
money_format — Formats a number as a currency string
nl_langinfo — Query language and locale information
nl2br — Inserts HTML line breaks before all newlines in a string
number_format — Format a number with grouped thousands
ord — Convert the first byte of a string to a value between 0 and 255
parse_str — Parses the string into variables
print — Output a string
printf — Output a formatted string
quoted_printable_decode — Convert a quoted-printable string to an 8 bit string
quoted_printable_encode — Convert a 8 bit string to a quoted-printable string
quotemeta — Quote meta characters
rtrim — Strip whitespace (or other characters) from the end of a string
setlocale — Set locale information
sha1_file — Calculate the sha1 hash of a file
sha1 — Calculate the sha1 hash of a string
similar_text — Calculate the similarity between two strings
soundex — Calculate the soundex key of a string
sprintf — Return a formatted string
sscanf — Parses input from a string according to a format
str_contains — Determine if a string contains a given substring
str_decrement — Decrement an alphanumeric string
str_ends_with — Checks if a string ends with a given substring
str_getcsv — Parse a CSV string into an array
str_increment — Increment an alphanumeric string
str_ireplace — Case-insensitive version of str_replace
str_pad — Pad a string to a certain length with another string
str_repeat — Repeat a string
str_replace — Replace all occurrences of the search string with the replacement string
str_rot13 — Perform the rot13 transform on a string
str_shuffle — Randomly shuffles a string
str_split — Convert a string to an array
str_starts_with — Checks if a string starts with a given substring
str_word_count — Return information about words used in a string
strcasecmp — Binary safe case-insensitive string comparison
strchr — Alias of strstr
strcmp — Binary safe string comparison
strcoll — Locale based string comparison
strcspn — Find length of initial segment not matching mask
strip_tags — Strip HTML and PHP tags from a string
stripcslashes — Un-quote string quoted with addcslashes
stripos — Find the position of the first occurrence of a case-insensitive substring in a string
stripslashes — Un-quotes a quoted string
stristr — Case-insensitive strstr
strlen — Get string length
strnatcasecmp — Case insensitive string comparisons using a "natural order" algorithm
strnatcmp — String comparisons using a "natural order" algorithm
strncasecmp — Binary safe case-insensitive string comparison of the first n characters
strncmp — Binary safe string comparison of the first n characters
strpbrk — Search a string for any of a set of characters
strpos — Find the position of the first occurrence of a substring in a string
strrchr — Find the last occurrence of a character in a string
strrev — Reverse a string
strripos — Find the position of the last occurrence of a case-insensitive substring in a string
strrpos — Find the position of the last occurrence of a substring in a string
strspn — Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask
strstr — Find the first occurrence of a string
strtok — Tokenize string
strtolower — Make a string lowercase
strtoupper — Make a string uppercase
strtr — Translate characters or replace substrings
substr_compare — Binary safe comparison of two strings from an offset, up to length characters
substr_count — Count the number of substring occurrences
substr_replace — Replace text within a portion of a string
substr — Return part of a string
trim — Strip whitespace (or other characters) from the beginning and end of a string
ucfirst — Make a string's first character uppercase
ucwords — Uppercase the first character of each word in a string
utf8_decode — Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable characters
utf8_encode — Converts a string from ISO-8859-1 to UTF-8
vfprintf — Write a formatted string to a stream
vprintf — Output a formatted string
vsprintf — Return a formatted string
wordwrap — Wraps a string to a given number of characters
*/

# Funciones de Arrays
/*
array_change_key_case — Cambia a mayúsculas o minúsculas todas las claves en un array
array_chunk — Divide un array en fragmentos
array_column — Devuelve los valores de una sola columna del array de entrada
array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
array_count_values — Cuenta todos los valores de un array
array_diff_assoc — Calcula la diferencia entre arrays con un chequeo adicional de índices
array_diff_key — Calcula la diferencia entre arrays empleando las claves para la comparación
array_diff_uassoc — Calcula la diferencia entre arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada suministrada por el usuario
array_diff_ukey — Calcula la diferencia entre arrays usando una función de devolución de llamada en las keys para comparación
array_diff — Calcula la diferencia entre arrays
array_fill_keys — Llena un array con valores, especificando las keys
array_fill — Llena un array con valores
array_filter — Filtra elementos de un array usando una función de devolución de llamada
array_flip — Intercambia todas las claves de un array con sus valores asociados
array_intersect_assoc — Calcula la intersección de arrays con un chequeo adicional de índices
array_intersect_key — Calcula la intersección de arrays usando sus claves para la comparación
array_intersect_uassoc — Calcula la intersección de arrays con una comprobación adicional de índices, los cuales se comparan con una función de retrollamada
array_intersect_ukey — Calcula la intersección de arrays usando una función de devolución de llamada en las claves para la comparación
array_intersect — Calcula la intersección de arrays
array_is_list — Checks whether a given array is a list
array_key_exists — Verifica si el índice o clave dada existe en el array
array_key_first — Obtiene la primera clave de un array
array_key_last — Obtiene la última clave de un array
array_keys — Devuelve todas las claves de un array o un subconjunto de claves de un array
array_map — Aplica la retrollamada a los elementos de los arrays dados
array_merge_recursive — Une dos o más arrays recursivamente
array_merge — Combina dos o más arrays
array_multisort — Ordena varios arrays, o arrays multidimensionales
array_pad — Rellena un array a la longitud especificada con un valor
array_pop — Extrae el último elemento del final del array
array_product — Calcula el producto de los valores de un array
array_push — Inserta uno o más elementos al final de un array
array_rand — Seleccionar una o más claves aleatorias de un array
array_reduce — Reduce iterativamente un array a un solo valor usando una función llamada de retorno
array_replace_recursive — Reemplaza los elementos de los arrays pasados al primer array de forma recursiva
array_replace — Reemplaza los elementos del array original con elementos de array adicionales
array_reverse — Devuelve un array con los elementos en orden inverso
array_search — Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito
array_shift — Quita un elemento del principio del array
array_slice — Extraer una parte de un array
array_splice — Elimina una porción del array y la reemplaza con otra cosa
array_sum — Calcular la suma de los valores de un array
array_udiff_assoc — Computa la diferencia entre arrays con una comprobación de indices adicional, compara la información mediante una función de llamada de retorno
array_udiff_uassoc — Computa la diferencia entre arrays con una verificación de índices adicional, compara la información y los índices mediante una función de llamada de retorno
array_udiff — Computa la diferencia entre arrays, usando una llamada de retorno para la comparación de datos
array_uintersect_assoc — Calcula la intersección de arrays con una comprobación de índices adicional, compara la información mediante una función de retrollamada
array_uintersect_uassoc — Calcula la intersección de arrays con una comprobación de índices adicional, compara la información y los índices mediante funciones de retrollamada por separado
array_uintersect — Computa una intersección de arrays, compara la información mediante una función de llamada de retorno
array_unique — Elimina valores duplicados de un array
array_unshift — Añadir al inicio de un array uno a más elementos
array_values — Devuelve todos los valores de un array
array_walk_recursive — Aplicar una función de usuario recursivamente a cada miembro de un array
array_walk — Aplicar una función proporcionada por el usuario a cada miembro de un array
array — Crea un array
arsort — Ordena un array en orden inverso y mantiene la asociación de índices
asort — Ordena un array y mantiene la asociación de índices
compact — Crear un array que contiene variables y sus valores
count — Cuenta todos los elementos de un array o algo de un objeto
current — Devuelve el elemento actual en un array
each — Devolver el par clave/valor actual de un array y avanzar el cursor del array
end — Establece el puntero interno de un array a su último elemento
extract — Importar variables a la tabla de símbolos actual desde un array
in_array — Comprueba si un valor existe en un array
key_exists — Alias de array_key_exists
key — Obtiene una clave de un array
krsort — Ordena un array por clave en orden inverso
ksort — Ordena un array por clave
list — Asignar variables como si fueran un array
natcasesort — Ordenar un array usando un algoritmo de "orden natural" insensible a mayúsculas-minúsculas
natsort — Ordena un array usando un algoritmo de "orden natural"
next — Avanza el puntero interno de un array
pos — Alias de current
prev — Rebobina el puntero interno del array
range — Crear un array que contiene un rango de elementos
reset — Establece el puntero interno de un array a su primer elemento
rsort — Ordena un array en orden inverso
shuffle — Mezcla un array
sizeof — Alias de count
sort — Ordena un array
uasort — Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices
uksort — Ordena un array según sus claves usando una función de comparación definida por el usuario
usort — Ordena un array según sus valores usando una función de comparación definida por el usuario
*/

$text = "< > & ' ";
$text_usuario = "<h1>Hola mundo</h1>";
# Evita que el usuario pueda meter código
echo htmlspecialchars($text_usuario);
echo $text_usuario;
// echo start


?>