# EJERCICIO 2

p#normal {
    font-family: arial,helvetica;
    font-size: 11px;
    font-weight: bold;
}
*#destacado {
    border-style: solid;
    border-color: blue;
    border-width: 2px;
}
#distinto {
    background-color: #9EC7EB;
    color: red;
}

<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
<p id="distinto">Este es el último párrafo</p>


Primer bloque (p#normal):
- Selecciona el elemento <p> con id="normal"
- Aplica fuente Arial o Helvetica, tamaño 11px, y texto en negrita (bold).

Segundo bloque (*#destacado):
- Afecta a cualquier elemento con id="destacado":
- Aplica borde sólido, color azul y ancho de borde de 2px.
- Se aplica tanto al párrafo como a la tabla, porque ambos tienen ese ID.

Tercer bloque (#distinto):
- Selecciona el elemento con id="distinto":
- Aplica fondo celeste claro y texto en rojo.

