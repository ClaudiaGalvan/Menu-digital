<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Marquesitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffef00; 
            color: #333;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
            position: relative;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }
        
        h1 {
            text-align: center;
            font-family: 'Arial Black', sans-serif;
            color: #000;
            margin: 100px 0 20px 0; 
            position: relative;
            line-height: 1;
        }

        h1 .menu {
            font-size: 3.5rem;
            display: block;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 .marquesitas {
            font-size: 2.8rem;
            display: block;
            letter-spacing: 1px;
            margin-top: 5px;
            text-transform: uppercase;
        }

        .esquina-izquierda {
            position: absolute;
            top: 20px;
            left: 20px;
            font-family: 'Arial Black', sans-serif;
            font-size: 1rem;
            color: #fff;
            background-color: #000;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transform: rotate(-10deg);
        }

        .esquina-derecha {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .esquina-derecha img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h2 {
            font-size: 2.5rem;
            color: #333;
            margin-top: 30px;
            margin-bottom: 15px;
            text-align: left;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            text-align: left;
        }

        .price {
            background-color: #000;
            color: #fff;
            border: 4px solid #fff;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 2rem;
            margin-left: 10px;
        }

        .price-square {
            background-color: #000;
            color: #fff;
            border: 4px solid #fff;
            border-radius: 0;
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 2rem;
            margin-left: 10px;
        }

        .note {
            font-style: italic;
            color: #fb0202;
            margin-top: 20px;
            text-align: center;
            font-size: 1.5rem;
        }

        .ingredientes-principales {
            position: relative;
        }

        .precio-unico {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .logo {
            width: 40px;
            height: 40px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .order-button {
            background-color: #000;
            color: #fff;
            border: 4px solid #fff;
            padding: 12px 0;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 20px auto;
            cursor: pointer;
            width: 200px;
            text-align: center;
            display: block;
            border-radius: 0;
            transition: all 0.3s ease;
        }

        .order-button:hover {
            background-color: #333;
        }

        .footer-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }

        .ikpachuca-footer {
            color: #000;
            font-weight: bold;
            font-size: 1.5rem;
            font-style: italic;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            transition: transform 0.3s ease;
        }

        .social-icon:hover {
            transform: scale(1.1);
        }

        /* Estilos para el modal/formulario de pedido */
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 700px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        /* Estilos del formulario */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 1.2rem;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 2px solid #ddd;
            border-radius: 5px;
        }

        .checkbox-group, .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .checkbox-item, .radio-item {
            display: flex;
            align-items: center;
            background-color: #f8f8f8;
            padding: 8px 12px;
            border-radius: 5px;
            border: 1px solid #ddd;
            flex: 1 0 calc(33% - 10px);
            min-width: 150px;
        }

        .checkbox-item input, .radio-item input {
            margin-right: 8px;
        }

        .checkbox-item img, .radio-item img {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }

        .precio-total {
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
            color: #000;
        }

        .submit-button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #333;
        }

        /* Notificación de pedido enviado */
        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 1000;
            display: none;
            animation: fadeIn 0.5s, fadeOut 0.5s 2.5s;
        }

        @keyframes fadeIn {
            from {opacity: 0; top: 0;}
            to {opacity: 1; top: 20px;}
        }

        @keyframes fadeOut {
            from {opacity: 1; top: 20px;}
            to {opacity: 0; top: 0;}
        }

        @media (max-width: 768px) {
            h1 {
                margin: 80px 0 15px 0; 
                font-size: 2.5rem;
            }

            h1 .menu {
                font-size: 3rem;
            }

            h1 .marquesitas {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 2rem;
            }

            .container {
                padding: 15px;
            }

            ul li {
                font-size: 1.2rem;
            }

            .esquina-izquierda {
                width: 100px;
                height: 100px;
                font-size: 0.9rem;
                top: 10px;
                left: 10px;
            }

            .esquina-derecha {
                width: 100px;
                height: 100px;
                top: 10px;
                right: 10px;
            }

            .price, .price-square {
                width: 100px;
                height: 100px;
                font-size: 1.8rem;
            }

            .logo {
                width: 30px;
                height: 30px;
            }

            .order-button {
                width: 180px;
                font-size: 1.2rem;
            }

            .footer-container {
                gap: 15px;
            }
            
            .ikpachuca-footer {
                font-size: 1.3rem;
            }
            
            .social-icon {
                width: 28px;
                height: 28px;
            }

            .modal-content {
                width: 90%;
                margin: 10% auto;
            }

            .checkbox-item, .radio-item {
                flex: 1 0 calc(50% - 10px);
            }
        }

        @media (max-width: 480px) {
            h1 {
                margin: 60px 0 10px 0; 
                font-size: 2rem;
            }

            h1 .menu {
                font-size: 2.5rem;
            }

            h1 .marquesitas {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            ul li {
                flex-direction: column;
                align-items: flex-start;
            }

            .price, .price-square {
                margin-top: 5px;
                width: 80px;
                height: 80px;
                font-size: 1.5rem;
            }

            .esquina-izquierda {
                width: 80px;
                height: 80px;
                font-size: 0.8rem;
                top: 5px;
                left: 5px;
                padding: 8px;
            }

            .esquina-derecha {
                width: 80px;
                height: 80px;
                top: 5px;
                right: 5px;
            }

            .logo {
                width: 25px;
                height: 25px;
            }

            .order-button {
                width: 160px;
                font-size: 1rem;
            }

            .footer-container {
                flex-direction: column;
                gap: 10px;
            }
            
            .ikpachuca-footer {
                font-size: 1.2rem;
            }
            
            .social-icon {
                width: 25px;
                height: 25px;
            }

            .modal-content {
                width: 95%;
                margin: 15% auto;
                padding: 15px;
            }

            .checkbox-item, .radio-item {
                flex: 1 0 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="esquina-izquierda">
            Marquesitas<br>sin queso<br>bola no es<br>marquesita
        </div>

        <div class="esquina-derecha">
            <img src="{{ asset('images/logo-marquesitas.png') }}" alt="Logo Marquesitas">
        </div>

        <h1>
            <span class="menu">MENU</span>
            <span class="marquesitas">MARQUESITAS IK</span>
        </h1>

        <h2>Ingredientes Principales</h2>
        <div class="ingredientes-principales">
            <ul>
                <li>Queso de bola (edam) <img src="{{ asset('images/queso.png') }}" alt="Queso de bola" class="logo"></li>
                <li>Crema de Cacahuate <img src="{{ asset('images/cacahuate.png') }}" alt="Crema de Cacahuate" class="logo"></li>
                <li>Lechera Lechera <img src="{{ asset('images/lechera.png') }}" alt="Lechera Lechera" class="logo"></li>
                <li>Philadelphia Philadelphia <img src="{{ asset('images/fhiladelphia.png') }}" alt="Philadelphia" class="logo"></li>
                <li>Hershey's HERSHAYS <img src="{{ asset('images/hersheys.png') }}" alt="Hershey's" class="logo"></li>
                <li>Nutella nutella <img src="{{ asset('images/nutella.png') }}" alt="Nutella" class="logo"></li>
                <li>Mermelada de Fresa <img src="{{ asset('images/mermerlada.png') }}" alt="Mermelada de Fresa" class="logo"></li>
                <li>Mermelada de Zarzamora <img src="{{ asset('images/mermerlada.png') }}" alt="Mermelada de Zarzamora" class="logo"></li>
            </ul>
            <div class="precio-unico">
                <span class="price">$60</span>
            </div>
        </div>

        <h2>Opciones de Marquesitas</h2>
        <ul>
            <li>Nutella y plátano <img src="{{ asset('images/platano.png') }}" alt="Plátano" class="logo"> <span class="price-square">$60</span></li>
            <li>Durazno <img src="{{ asset('images/durazno.png') }}" alt="Durazno" class="logo"> <span class="price-square">$65</span></li>
            <li>Cajeta CONNADO <img src="{{ asset('images/cajeta.png') }}" alt="Cajeta" class="logo"> <span class="price-square">$65</span></li>
            <li>Lechera y durazno <img src="{{ asset('images/durazno.png') }}" alt="Durazno" class="logo"> <span class="price-square">$70</span></li>
            <li>Nuez <img src="{{ asset('images/nuez.png') }}" alt="Nuez" class="logo"> <span class="price-square">$70</span></li>
        </ul>

        <p class="note">EN TODAS NUESTRAS MARQUESITAS YA VA INCLUIDO EL QUESO BOLA</p>

        <h2>Ingredientes Extras</h2>
        <ul>
            <li>Todos excepto Queso bola, Cajeta, Nuez y Durazno <span class="price-square">$5</span></li>
            <li>Queso bola, Cajeta y Durazno <span class="price-square">$10</span></li>
            <li>Nuez <span class="price-square">$15</span></li>
        </ul>
        
        @auth
@if (auth()->user()->role == 'dueno')
    <button class="order-button" id="openEditModal">EDITAR</button>
@else
    <button class="order-button" id="openOrderModal">ORDENAR</button>
@endif
@endauth


        
        <div class="footer-container">
            <span class="ikpachuca-footer">IKPACHUCA</span>
            <div class="social-icons">
                <a href="https://www.facebook.com/IkPachuca?locale=es_LA" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" class="social-icon">
                </a>
                <a href="https://www.instagram.com/ikpachuca/" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram" class="social-icon">
                </a>
            </div>
        </div>
    </div>

    <!-- Modal/Formulario de pedido -->
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 style="text-align: center; color: #000;">Armar tu Marquesita</h2>
            
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Base (Obligatorio):</label>
                <div class="radio-group">
                    <label class="radio-item">
                        <input type="radio" name="base" value="Queso de bola" checked>
                        <img src="{{ asset('images/queso.png') }}" alt="Queso de bola"> Queso de bola (incluido)
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label>Ingredientes Principales (Elige 1):</label>
                <div class="radio-group">
                    <label class="radio-item">
                        <input type="radio" name="principal" value="Crema de Cacahuate" required>
                        <img src="{{ asset('images/cacahuate.png') }}" alt="Crema de Cacahuate"> Crema de Cacahuate
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="principal" value="Lechera">
                        <img src="{{ asset('images/lechera.png') }}" alt="Lechera"> Lechera
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="principal" value="Philadelphia">
                        <img src="{{ asset('images/fhiladelphia.png') }}" alt="Philadelphia"> Philadelphia
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="principal" value="Hershey's">
                        <img src="{{ asset('images/hersheys.png') }}" alt="Hershey's"> Hershey's
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="principal" value="Nutella">
                        <img src="{{ asset('images/nutella.png') }}" alt="Nutella"> Nutella
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="principal" value="Mermelada de Fresa">
                        <img src="{{ asset('images/mermerlada.png') }}" alt="Mermelada"> Mermelada de Fresa
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="principal" value="Mermelada de Zarzamora">
                        <img src="{{ asset('images/mermerlada.png') }}" alt="Mermelada"> Mermelada de Zarzamora
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label>Opciones Especiales:</label>
                <div class="radio-group">
                    <label class="radio-item">
                        <input type="radio" name="especial" value="Ninguna" checked> Ninguna
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="especial" value="Nutella y plátano">
                        <img src="{{ asset('images/platano.png') }}" alt="Plátano"> Nutella y plátano (+$0)
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="especial" value="Durazno">
                        <img src="{{ asset('images/durazno.png') }}" alt="Durazno"> Durazno (+$5)
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="especial" value="Cajeta">
                        <img src="{{ asset('images/cajeta.png') }}" alt="Cajeta"> Cajeta (+$5)
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="especial" value="Lechera y durazno">
                        <img src="{{ asset('images/durazno.png') }}" alt="Durazno"> Lechera y durazno (+$10)
                    </label>
                    <label class="radio-item">
                        <input type="radio" name="especial" value="Nuez">
                        <img src="{{ asset('images/nuez.png') }}" alt="Nuez"> Nuez (+$10)
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label>Ingredientes Extras (Opcionales):</label>
                <div class="checkbox-group">
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Queso bola">
                        <img src="{{ asset('images/queso.png') }}" alt="Queso"> Extra Queso bola (+$10)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Crema de Cacahuate">
                        <img src="{{ asset('images/cacahuate.png') }}" alt="Cacahuate"> Extra Crema de Cacahuate (+$5)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Lechera">
                        <img src="{{ asset('images/lechera.png') }}" alt="Lechera"> Extra Lechera (+$5)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Philadelphia">
                        <img src="{{ asset('images/fhiladelphia.png') }}" alt="Philadelphia"> Extra Philadelphia (+$5)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Hershey's">
                        <img src="{{ asset('images/hersheys.png') }}" alt="Hershey's"> Extra Hershey's (+$5)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Nutella">
                        <img src="{{ asset('images/nutella.png') }}" alt="Nutella"> Extra Nutella (+$5)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Mermelada">
                        <img src="{{ asset('images/mermerlada.png') }}" alt="Mermelada"> Extra Mermelada (+$5)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Cajeta">
                        <img src="{{ asset('images/cajeta.png') }}" alt="Cajeta"> Extra Cajeta (+$10)
                    </label>
                    <label class="checkbox-item">
                        <input type="checkbox" name="extras" value="Extra Nuez">
                        <img src="{{ asset('images/nuez.png') }}" alt="Nuez"> Extra Nuez (+$15)
                    </label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="notas">Notas adicionales:</label>
                <textarea id="notas" class="form-control" rows="3" placeholder="Ejemplo: Poca lechera, mucho queso, etc."></textarea>
            </div>
            
            <div class="precio-total">
                Precio Total: $<span id="total-price">60</span>
            </div>
            
            <button type="button" class="submit-button" id="submit-order">ENVIAR PEDIDO</button>
        </div>
    </div>

    <div id="editModal" class="modal">
        <div class="modal-content">
          <span class="close" id="closeEditModal">&times;</span>
          <h2 style="text-align: center; color: #000;">Editar Ingredientes</h2>
      
          <div id="ingredientes-lista" style="margin-bottom: 20px;">
            <!-- Aquí se van a agregar los ingredientes automáticamente -->
          </div>
      
          <div class="form-group">
            <label for="nombreIngrediente">Nombre del Ingrediente:</label>
            <input type="text" id="nombreIngrediente" class="form-control" placeholder="Ejemplo: Nutella">
          </div>
      
          <div class="form-group">
            <label for="precioIngrediente">Precio:</label>
            <input type="number" id="precioIngrediente" class="form-control" placeholder="Ejemplo: 60">
          </div>
      
          <div style="margin-top: 20px; display: flex; gap: 10px; justify-content: center;">
            <button type="button" class="submit-button" id="guardarIngrediente" style="background-color: #28a745;">Guardar</button>
            <button type="button" class="submit-button" id="eliminarIngrediente" style="background-color: #dc3545;">Eliminar</button>
            <button type="button" class="submit-button" id="agregarIngrediente" style="background-color: #007bff;">Agregar</button>
          </div>
        </div>
      </div>
      
      

   <!-- Modal/Formulario de edición de ingredientes -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeEditModal">&times;</span>
        <h2 style="text-align: center; color: #000;">Editar Ingrediente</h2>

        <form id="editIngredientForm" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="ingredientName">Nombre del Ingrediente:</label>
                <input type="text" id="ingredientName" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ingredientPrice">Precio:</label>
                <input type="number" id="ingredientPrice" name="price" class="form-control" step="0.01" required>
            </div>

            <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                <button type="submit" class="submit-button" style="background-color: green;">Guardar Cambios</button>
                <button type="button" id="deleteIngredient" class="submit-button" style="background-color: red;">Eliminar Ingrediente</button>
                <button type="button" id="addIngredient" class="submit-button" style="background-color: dodgerblue;">Agregar Ingrediente</button>
            </div>
        </form>
    </div>
</div>



    <!-- Notificación de pedido enviado -->
    <div id="notification" class="notification">
        ¡Pedido enviado con éxito! Pronto nos comunicaremos contigo.
    </div>

    <script>
        // Manejo del modal
        const modal = document.getElementById("orderModal");
        const btn = document.getElementById("openOrderModal");
        const span = document.getElementsByClassName("close")[0];
        const notification = document.getElementById("notification");

        const editModal = document.getElementById("editModal");
const editBtn = document.getElementById("openEditModal");
const closeEditModal = document.getElementById("closeEditModal");

// Botón EDITAR abre el nuevo modal
if (editBtn) {
    editBtn.onclick = function() {
        editModal.style.display = "block";
    };
}

// Botón cerrar modal de edición
if (closeEditModal) {
    closeEditModal.onclick = function() {
        editModal.style.display = "none";
    };
}

// Cerrar modal al hacer clic fuera
window.addEventListener('click', function(event) {
    if (event.target === editModal) {
        editModal.style.display = "none";
    }
});


        // Botón ORDENAR abre el modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Cerrar modal con la X
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Cerrar modal al hacer clic fuera
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Cálculo del precio total
        function calcularTotal() {
            let total = 60; // Precio base
            
            // Opciones especiales
            const especial = document.querySelector('input[name="especial"]:checked').value;
            if (especial === "Durazno" || especial === "Cajeta") total += 5;
            if (especial === "Lechera y durazno" || especial === "Nuez") total += 10;
            
            // Extras
            document.querySelectorAll('input[name="extras"]:checked').forEach(extra => {
                if (extra.value.includes("Queso bola") || extra.value.includes("Cajeta")) total += 10;
                else if (extra.value.includes("Nuez")) total += 15;
                else total += 5;
            });
            
            document.getElementById('total-price').textContent = total;
        }
        
        // Actualizar precio cuando cambian las opciones
        document.querySelectorAll('input[name="especial"], input[name="extras"]').forEach(input => {
            input.addEventListener('change', calcularTotal);
        });
        
        // Enviar pedido
        document.getElementById('submit-order').addEventListener('click', function() {
            const nombre = document.getElementById('nombre').value;
            const telefono = document.getElementById('telefono').value;
            const principal = document.querySelector('input[name="principal"]:checked').value;
            
            if (!nombre || !telefono || !principal) {
                alert('Por favor completa los campos obligatorios: Nombre, Teléfono y selecciona un ingrediente principal');
                return;
            }
            
            // Mostrar notificación
            notification.style.display = 'block';
            
            // Ocultar notificación después de 3 segundos
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
            
            // Cerrar el modal
            modal.style.display = "none";
            
            // Resetear el formulario (opcional)
            document.getElementById('nombre').value = '';
            document.getElementById('telefono').value = '';
            document.querySelector('input[name="principal"][value="Crema de Cacahuate"]').checked = true;
            document.querySelector('input[name="especial"][value="Ninguna"]').checked = true;
            document.querySelectorAll('input[name="extras"]:checked').forEach(checkbox => {
                checkbox.checked = false;
            });
            document.getElementById('notas').value = '';
            document.getElementById('total-price').textContent = '60';
            
        });
    </script>
    </script> <!-- ← Aquí termina el script de ordenar -->

    <!-- AHORA PEGA ABAJO EL NUEVO SCRIPT -->
    
    <script>
        // Script para abrir y cerrar el modal de Editar Ingredientes
        const editModal = document.getElementById('editModal');
        const openEditBtn = document.getElementById('openEditIngredientsModal');
        const closeEditBtn = document.getElementById('closeEditModal');
    
        if (openEditBtn) {
            openEditBtn.addEventListener('click', function() {
                editModal.style.display = 'block';
            });
        }
    
        if (closeEditBtn) {
            closeEditBtn.addEventListener('click', function() {
                editModal.style.display = 'none';
            });
        }
    
        window.addEventListener('click', function(event) {
            if (event.target == editModal) {
                editModal.style.display = 'none';
            }
        });
    </script>
    <script>
        // Ingredientes simulados (luego los conectamos a la base de datos)
        let ingredientes = [
            { nombre: "Nutella", precio: 60 },
            { nombre: "Philadelphia", precio: 65 },
            { nombre: "Cajeta", precio: 70 }
        ];
        
        // Para saber qué ingrediente estamos editando
        let selectedIndex = null;
        
        // Función para mostrar todos los ingredientes en el modal
        function mostrarIngredientes() {
            const lista = document.getElementById('ingredientes-lista');
            lista.innerHTML = '';
        
            ingredientes.forEach((ingrediente, index) => {
                const item = document.createElement('div');
                item.style.marginBottom = '8px';
                item.innerHTML = `
                    <strong>${ingrediente.nombre}</strong> - $${ingrediente.precio}
                    <button onclick="editarIngrediente(${index})" style="margin-left: 10px;">Editar</button>
                `;
                lista.appendChild(item);
            });
        }
        
        // Función para cargar un ingrediente en el formulario
        function editarIngrediente(index) {
            document.getElementById('nombreIngrediente').value = ingredientes[index].nombre;
            document.getElementById('precioIngrediente').value = ingredientes[index].precio;
            selectedIndex = index;
        }
        
        // Botón GUARDAR
        document.getElementById('guardarIngrediente').addEventListener('click', function() {
            const nombre = document.getElementById('nombreIngrediente').value;
            const precio = document.getElementById('precioIngrediente').value;
        
            if (selectedIndex !== null && nombre && precio) {
                ingredientes[selectedIndex] = { nombre, precio: parseFloat(precio) };
                mostrarIngredientes();
                alert('Ingrediente actualizado.');
            } else {
                alert('Selecciona un ingrediente para editar.');
            }
        });
        
        // Botón AGREGAR
        document.getElementById('agregarIngrediente').addEventListener('click', function() {
            const nombre = document.getElementById('nombreIngrediente').value;
            const precio = document.getElementById('precioIngrediente').value;
        
            if (nombre && precio) {
                ingredientes.push({ nombre, precio: parseFloat(precio) });
                mostrarIngredientes();
                alert('Ingrediente agregado.');
            } else {
                alert('Completa nombre y precio.');
            }
        });
        
        // Botón ELIMINAR
        document.getElementById('eliminarIngrediente').addEventListener('click', function() {
            if (selectedIndex !== null) {
                ingredientes.splice(selectedIndex, 1);
                mostrarIngredientes();
                alert('Ingrediente eliminado.');
                selectedIndex = null;
                document.getElementById('nombreIngrediente').value = '';
                document.getElementById('precioIngrediente').value = '';
            } else {
                alert('Selecciona un ingrediente para eliminar.');
            }
        });
        
        // Cuando abras el modal, muestra los ingredientes
        const editBtn = document.getElementById("openEditModal");
        const editModal = document.getElementById("editModal");
        
        if (editBtn) {
            editBtn.onclick = function() {
                editModal.style.display = "block";
                mostrarIngredientes();  // 👈 importante: mostrar ingredientes al abrir
            };
        }
        
        // Cerrar el modal cuando des clic en la X
        const closeEditModal = document.getElementById("closeEditModal");
        if (closeEditModal) {
            closeEditModal.onclick = function() {
                editModal.style.display = "none";
            };
        }
        
        // Cerrar modal si haces clic fuera
        window.addEventListener('click', function(event) {
            if (event.target === editModal) {
                editModal.style.display = "none";
            }
        });
        </script>
        
    
</body>
</html>