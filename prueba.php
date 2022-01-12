<body>
    <div class="app" id="japp">
        <style>
        body {
            font-family: sans-serif;
            font-size: 1rem;
            line-height: 1.2em;
            margin: 0;
            background: #e4e4e4;
        }
    
        * {
            box-sizing: border-box;
        }
    
        .page-container {
            /*border: 1px solid #75a5d0;*/
            padding: 30px;
            max-width: 900px;
            margin: 2rem auto;
            background: #fff;
            border: #ccc solid 1px;
            box-shadow: 0 0 15px rgba(0,0,0,.25);
        }
    
        .table-container {
            /*background-color: yellow;*/
            overflow-x: auto;
        }
    
        .table-certificado {
            border-spacing: 0;
            width: 100%;
        }
    
            .table-certificado thead th,
            .table-certificado tbody td {
                padding: 0.5rem;
                word-wrap: break-word;
            }
    
            .table-certificado thead th {
                border-bottom: 1px solid #75a5d0;
            }
    
            .table-certificado tbody td {
                border-bottom: 1px solid #75a5d0;
                border-right: 1px solid #75a5d0;
                height: 65px;
            }
    
        .logo {
            text-align: left;
        }
    
        .logo-minsa {
            width: 200px;
        }
    
        .titulo {
            color: #75a5d0;
        }
    
        .texto,
        .data {
            font-size: 0.8rem;
        }
    
        .subtitulo {
            font-weight: bold;
        }
    
        .virus {
            font-size: 1rem;
            font-weight: bold;
        }
    
        .codigo-qr {
            text-align: center;
        }
    
        .table-data {
            border: solid 1px #E5E7E9;
            border-spacing: 0;
            font-size: 0.75rem;
            text-align: center;
            width: 100%;
        }
    
            .table-data thead th {
                border: 1px solid #E5E7E9;
                height: 50px;
            }
    
            .table-data tbody td {
                border: 1px solid #E5E7E9;
                height: 50px;
            }
    
        .image-qr {
            width: 150px;
        }
    </style>
    <div class="page-container">
        <div class="table-container">
            <table class="table-certificado">
                <thead>
                    <tr>
                        <th colspan="5">
                            <div class="logo">
                                <img class="logo-minsa" src="https://gis.minsa.gob.pe/CarneVacunacion/1635280457195app/publico/certificado/img/logo_minsa.jpg" alt="Ministerio de Salud - MINSA | Gobierno del Perú">
                            </div>
                            <span class="titulo">
                                CERTIFICADO DE VACUNACIÓN / VACCINATION CERTIFICATE
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" style="width: 40%; vertical-align: top;">
                            <span class="texto subtitulo">
                                Nombre / Name
                            </span>
                            <br>
                            <label id="nombres-apellidos" class="data">EDWAR ANTHONY CASO ROJAS</label>
                        </td>
                        <td style="width: 20%; vertical-align: top;">
                            <span class="texto subtitulo">
                                Fecha de Nacimiento / Date of birth
                            </span><br>
                            <label id="fecha-nacimiento" class="data">02/06/1997</label>
                        </td>
                        <td style="width: 15%; vertical-align: top;">
                            <span class="texto subtitulo">Sexo / Sex </span><br>
                            <label id="sexo" class="data">M</label>
                        </td>
                        <td rowspan="3" class="codigo-qr" style="width: 25%; border-right: 0; vertical-align: top;">
                            <span class="texto subtitulo">Código QR de Validación / Validation QR Code</span><br>
                            <canvas id="cImage-qr" height="90" width="90"></canvas>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="vertical-align: top;">
                            <span class="texto subtitulo">Documento de Identidad / Identification document</span><br>
                            <label id="tipo-numero-documento" class="data">DNI: 70894501</label>
    
                        </td>
                        <td colspan="2" style="vertical-align: top;">
                            <span class="texto subtitulo">Nacionalidad / Nationality</span><br>
                            <label id="nacionalidad" class="data">PERU</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="width: 75%; vertical-align: top;">
                            <span class="texto">Vacunado / Vaccinated</span>
                            <span class="texto virus"> 2 de 2</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="width: 100%; border-right: 0;vertical-align: top;">
                            <table class="table-data">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">Fecha de Vacunación / Vaccination Date </th>
                                        <th style="width: 15%;">Vacuna / Vaccine</th>
                                        <th style="width: 10%;">Dosis / Dose</th>
                                        <th style="width: 30%;">Fabricante y Lote de Vacuna / Product Name and Manufacturer Lot Number</th>
                                        <th style="width: 30%;">Lugar de Vacunación / Vaccination Place</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>11/09/2021</td>
                                        <td>Vacuna contra Covid</td>
                                        <td>1ª dosis</td>
                                        <td>SINOPHARM (B2021082212)</td>
                                        <td>JUNIN - MISMO ESTABLECIMIENTO DE SALUD -   </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>02/10/2021</td>
                                        <td>Vacuna contra Covid</td>
                                        <td>2ª dosis</td>
                                        <td>SINOPHARM (B2021082365)</td>
                                        <td>JUNIN - MISMO ESTABLECIMIENTO DE SALUD -   </td>
                                    </tr>
                                    
                                </tbody>
                            </table><br>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; border-bottom: 0; vertical-align: top;">
                            <span class="texto subtitulo">Fecha de Emisión / Date of Issue</span><br>
                            <label id="fecha-emision" class="data">18/11/2021 18:51</label>
                        </td>
                        <td colspan="4" style="width: 75%; border-right: 0; border-bottom: 0;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        </div>
    <script type="module" src="1635280457195app/index.js"></script>
    <script nomodule="">document.location.href = 'error-compatibilidad.html';</script>

</body>