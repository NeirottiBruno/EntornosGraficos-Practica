# EJERCICIO 3

p.quitar {
  color: red;
}
*.desarrollo {
  font-size: 8px;
}
.importante {
  font-size: 20px;
}

<p class="desarrollo">
    En este primer párrafo trataremos lo siguiente:
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
    Este párrafo debe ser quitado de la obra…
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p >
    En este otro párrafo trataremos otro tema:<br />
    xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
    Y este es el párrafo más importante de la obra…
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</ p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>


Los párrafos con class="quitar" tendrán color rojo. Cualquier etiqueta con class="desarrollo" tendrá tamaño de fuente 8 pixeles, y cualquier etiqueta con class="importante" tendrá tamaño de fuente de 20 pixeles.
