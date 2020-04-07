<html>
    <head>
        <title>farmacia.pdf</title>
        <style>
            .header{background:#eee;color:#444;border-bottom:1px solid #ddd;padding:10px;}

            .client-detail{background:#ddd;padding:10px;}
            .client-detail th{text-align:left;}

            .items{border-spacing:0;}
            .items thead{background:#ddd;}
            .items tbody{background:#eee;}
            .items tfoot{background:#ddd;}
            .items th{padding:10px;}
            .items td{padding:10px;}

            h1 small{display:block;font-size:16px;color:#888;}

            table{width:100%;}
            .text-right{text-align:right;}
        </style>
    </head>
    <body>

    <div class="header">
        <h1>Factura de venta</h1>
    </div>
    <table class="client-detail">
        <tr>
            <th style="width:200px;">Fecha de Compra:</th>
            <td>{{ $factura->Fecha }}</td>
        </tr>
        <tr>
            <th style="width:200px;">Hora de Compra:</th>
            <td>{{ $factura->Hora }}</td>
        </tr>
        <tr>
            <th>Cliente:</th>
            <td>{{ $factura->cliente->Nombres }} {{ $factura->cliente->Apellidos }}</td>
        </tr>
    </table>

    <hr />

    <table class="items">
        <thead>
            <tr>
                <th class="text-left">Producto</th>
                <th class="text-right" style="width:100px;">Cantidad</th>
                <th class="text-right" style="width:100px;">P.U</th>
                <th class="text-right" style="width:100px;">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $factura->producto->Nombre }}</td>
                <td class="text-right">{{ $factura->Cantidad }}</td>
                <td class="text-right">$ {{ number_format($factura->Precio,2) }}</td>
                <td class="text-right">$ {{ number_format($factura->Cantidad*$factura->Precio,2) }}</td>
            </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3" class="text-right"><b></b></td>
            <td class="text-right"></td>
        </tr>
        <tr>
            <td colspan="3" class="text-right"><b></b></td>
            <td class="text-right"></td>
        </tr>
        <tr>
            <td colspan="3" class="text-right"><b>Subtotal</b></td>
            <td class="text-right">$ {{ number_format($factura->Cantidad*$factura->Precio,2) }}</td>
        </tr>
        <tr>
            <td colspan="3" class="text-right"><b>Iva</b></td>
            <td class="text-right">$ {{ number_format($factura->Cantidad*$factura->Precio,2) }}</td>
        </tr>
        <tr>
            <td colspan="3" class="text-right"><b>Total</b></td>
            <td class="text-right">$ {{ number_format($factura->Cantidad*$factura->Precio,2) }}</td>
        </tr>
        </tfoot>
    </table>
    </body>
</html>
