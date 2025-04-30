# EJERCICIO 4

En base a estas declaraciones:

* { color: green; }
a:link { color: gray; }
a:visited { color: blue; }
a:hover { color: fuchsia; }
a:active { color: red; }
p { font-family: arial, helvetica; font-size: 10px; color: black; }
.contenido { font-size: 14px; font-weight: bold; }


En el caso 1:
- Hereda el tamaño de .contenido (14px), pero el style inline tiene más prioridad y anula el font-weight, por eso el texto no es bold.
- Color del texto: negro (por la regla de que la etiqueta especifica (p) que tiene más especificidad que el selector universal *).

En el caso 2:
- font-size: 14px y font-weight: bold del .contenido al <body> y a sus elementos hijos (por herencia).
- El <p> hereda ese estilo, por lo tanto el texto es más grande y en negrita.