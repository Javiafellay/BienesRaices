<?php
    require 'includes/funciones.php';
   
    incluirTemplate('header');
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la Propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="rpecio">$3.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt=" icono_estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habotaciones">
                    <p>4</p>
                </li>
            </ul>
            
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, consequuntur vitae temporibus 
                dolore maxime deserunt dolorem nesciunt expedita aliquam atque, qui, perspiciatis labore ab
                porro ad perferendis quam? Architecto, id?
                dolore maxime deserunt dolorem nesciunt expedita aliquam atque, qui, perspiciatis labore ab
                Corrupti eveniet, dolor consequuntur deserunt fugit repellat quis veniam maiores quisquam nobis aut nulla
                quo iure doloribus est beatae similique nam culpa? Rerum eveniet nemo dolorum vero cum eligendi placeat.</p>

                <p>Dolore maxime deserunt dolorem nesciunt expedita aliquam atque, qui, perspiciatis labore ab
                    Corrupti eveniet, dolor consequuntur deserunt fugit repellat quis veniam maiores quisquam nobis aut nulla
                    quo iure doloribus est beatae similique nam culpa? Rerum eveniet nemo dolorum vero cum eligendi placeat.</p>
        </div>

    </main>

<?php
    incluirTemplate('footer');
?>
