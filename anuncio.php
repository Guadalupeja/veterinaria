
<?php 

require "includes/funciones.php";

incluirTemplate("header");
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                   <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                   <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                 </li>

                 <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                 </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id interdum ante.
                 In sed iaculis purus, sed elementum est. Etiam condimentum libero a sem finibus scelerisque. 
                 Donec congue efficitur viverra. Etiam a ligula felis. Duis commodo sapien nec mi elementum, 
                 quis mattis ex pretium. Ut quis rhoncus dui. 
                Proin auctor nec quam quis lobortis. Mauris consectetur dictum enim, eget tristique tellus posuere a.
            </p>
            <p>
                Nam interdum sapien et turpis eleifend, eget condimentum leo fringilla. 
                Proin non dictum libero. Orci varius natoque penatibus et magnis dis parturient montes, 
                nascetur ridiculus mus. In vel arcu lacus. Morbi eleifend rhoncus mollis. Maecenas fringilla,
                 neque non lacinia laoreet, erat augue viverra lectus, ac lacinia purus magna vitae nibh. 
                 Quisque nibh felis, imperdiet et consectetur eget, sagittis eu eros. Nunc rhoncus odio non 
                 orci vulputate tempus. Etiam pulvinar elit libero, vel vulputate magna facilisis in. 
                 Duis pellentesque laoreet urna,
                 quis accumsan ligula accumsan eget. Etiam porttitor felis nec nunc rutrum, id elementum odio lobortis.
            </p>
        </div>
    </main>
    <?php 
    incluirTemplate("footer");
 ?>