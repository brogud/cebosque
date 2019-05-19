<body>
    <div style="background-color: #FFFEEE; border: 1px solid #bdbdbd; color:black;">
            <div class="message" style="margin-left: 10px;">
            <h2 style="text-align: center;">Informaci&oacute;n del solicitante</h2>
            <p><strong>Nombre: </strong>{{ $params->name }}</p>
            <p><strong>Tel&eacute;fono: </strong>{{ $params->phone }}</p>
            <p><strong>Correo electr&oacute;nico: </strong>{{ $params->email }}</p>
            <p><strong>Asunto: </strong>{{ $params->subject }}</p>
            <p><strong>Mensaje: </strong><br><br>{{ $params->message }}</p>
            <br>
            <p>Gracias por contactarnos, responderemos lo m&aacute;s pronto posible.</p>
        </div>
    </div>
</body>