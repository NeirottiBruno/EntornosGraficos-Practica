# EJERCICIO 1

1) ¿Qué es CSS y para qué se usa?
CSS (Cascading Style Sheets) es un lenguaje de hojas de estilo que se utiliza para definir la apariencia visual (colores, fuentes, márgenes, disposición, etc.) de los elementos HTML en una página web, separando el contenido de la presentación.

2) CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?
Una regla CSS está compuesta por un selector (el elemento al que se aplican los estilos) y un bloque de declaración con una o más propiedades y sus valores:
selector {
  propiedad: valor;
  propiedad2: valor2;
}

3) ¿ Cuáles son las tres formas de dar estilo a un documento?
- En línea: dentro del atributo style de una etiqueta.
- Interna: dentro de un bloque <style> en el <head>.
- Externa: en un archivo .css vinculado mediante <link>.

4) ¿ Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.
- De etiqueta: p { color: blue; }
- De clase: .negrita { font-weight: bold; }
- De ID: #titulo { font-size: 24px; }
- Universal: * { margin: 0; }
- De atributo: a[href] { color: red; }
- Descendiente: div p { color: green; }
- Agrupado: h1, h2 { font-family: sans-serif; }

5) ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?
Es una palabra clave que se añade a un selector para definir un estado especial del elemento. Hay muchas pseudoclases, pero las más usadas en enlaces son:
a:link --> enlace normal
a:visited --> enlace ya visitado
a:hover --> cuando el mouse pasa por encima
a:active --> mientras se hace clic

6) ¿ Qué es la herencia?
Es el mecanismo por el cual ciertos estilos aplicados a un elemento padre son heredados por sus elementos hijos (por ejemplo, color, font-family, etc.).

7) ¿ En qué consiste el proceso denominado cascada?
Es el proceso mediante el cual el navegador decide qué estilo aplicar cuando hay varias reglas que afectan al mismo elemento. Se basa en:
- Especificidad del selector
- Orden de aparición
- Uso de !important

