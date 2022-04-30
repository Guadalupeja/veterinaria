
<?php 

require "includes/funciones.php";

incluirTemplate("header");
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

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
                    <p>Escrito el: <span>20:10:2021</span>POR: <span>Admin</span></p>
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
                    <p>Escrito el: <span>20:10:2021</span>POR: <span>Admin</span></p>
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
                    <source  srcset="build/img/blog-3.webp" type="image/webp">
                    <source  srcset="build/img/blog-3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog-3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Divertidas app para jugar con tu gato</h4>
                    <p>Escrito el: <span>20:10:2021</span>POR: <span>Admin</span></p>
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
                    <source  srcset="build/img/gatitos.webp" type="image/webp">
                    <source  srcset="build/img/gatitos.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/gatitos.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Gatos, el mejor amigo del hombre y la mujer</h4>
                    <p>Escrito el: <span>20:10:2021</span>POR: <span>Admin</span></p>
                    <p>
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </a>
            </div>
        </article>




    </main>
    <?php 
    incluirTemplate("footer");
 ?>