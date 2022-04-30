
<?php 

require "includes/funciones.php";

incluirTemplate("header", $inicio = true);
 ?>

    <main class="contenedor seccion">
      


    <section class="seccion contenedor">
            <h2>Iniciar sesión</h2>
            <div class="contenedor-anuncios">
                <div class="anuncio">
                <h3>Veterinario</h3>
                    <picture>
                        <source srcset="build/img/veterinario.webp" type="image/webp">
                        <source srcset="build/img/veterinario.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/veterinario.jpg" alt="veterinario">
                    </picture>

                    <div class="contenido-anuncio">

                  
            < <a class="boton-verde" href="/admin">Iniciar sesión</a>
      

                    </div> <!--contenido anuncio-->
                </div>  <!--anuncio-->


                <div class="anuncio">
                <h3>Dueño</h3>
                    <picture>
                        <source srcset="build/img/dueño.webp" type="image/webp">
                        <source srcset="build/img/dueño.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/dueño.jpg" alt="dueño">
                    </picture>

                    <div class="contenido-anuncio">
               <a class="boton-verde" href="/admin/propiedades/crear.php">Iniciar sesión</a>
          
       
                       </div> <!--contenido anuncio-->
                </div>  <!--anuncio-->



            </div><!--contenido anuncios-->

            <div class="alinear-derecha">
                <a href="anuncios.php" class="boton-verde">Ver todas</a>
            </div>
        </section>



    </main>
        


        <section class="imagen-contacto">
            <h2>El mejor servicio y accesible para todos</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
            <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
        </section>
        <div class="contenedor seccion seccion-inferior">
            <section class="blog">
                <h3>Nuestro blog</h3>
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source  srcset="build/img/blog.webp" type="image/webp">
                            <source  srcset="build/img/blog.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/blog.jpg" alt="Texto Entrada Blog">
                        </picture>
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.php">
                            <h4>Mejora la calidad de vida de tus mascotas</h4>
                            <p class="informacion-meta">Escrito el: <span>20:10:2021</span>POR: <span>Admin</span></p>
                            <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                             and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source  srcset="build/img/blog-2.webp" type="image/webp">
                            <source  srcset="build/img/blog-2.jpg" type="image/jpeg">
                            <img loading="lazy" src="build/img/blog-2.jpg" alt="Texto Entrada Blog">
                        </picture>
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.php">
                            <h4>Cuida los dientes de tus mascotas</h4>
                            <p class="informacion-meta">Escrito el: <span>20:10:2021</span>POR: <span>Admin</span></p>
                            <p>
                                Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y
                                colores para darle vida a tu espacio
                            </p>
                        </a>
                    </div>
                </article>
            </section>
            <section class="testimoniales">
                <h3>Testimoniales</h3>
                <div class="testimonial">
                    <blockquote>
                        El personal se comportó de una excelente forma, muy buena atención y el servicio que nos
                        ofrecieron a mi y a mi mascota cumple con todas las expectativas.
                    </blockquote>
                    <p>-Guadalupe Juárez</p>
                </div>
            </section>
        </div>

   
        <?php 
    incluirTemplate("footer");
 ?>

