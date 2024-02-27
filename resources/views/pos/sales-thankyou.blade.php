<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih atas Pembelian Anda - POS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
        li:last-child {
            margin-bottom: 0;
        }
        .invoice-header {
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .invoice-header h2 {
            margin: 0;
            color: #333;
        }
        .invoice-details {
            font-size: 14px;
            color: #666;
        }
        .total-amount {
            font-size: 16px;
            font-weight: bold;
            color: #28a745; /* Green color for total amount */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="invoice-header">
            <h2>Nota Transaksi Kasir</h2>
            <p class="invoice-details">Tanggal: {{ date('Y-m-d H:i:s') }}</p> <!-- Added date -->
        </div>
        <ul>
            <li><strong>Produk:</strong> {{ $saleData['product'] }}</li>
            <li><strong>Jumlah:</strong> {{ $saleData['quantity'] }}</li> <!-- Added color to quantity -->
            <li><strong>Total Pembelian:</strong> {{ $saleData['total_amount'] }}</li> <!-- Added total amount class -->
        </ul>
        <hr>
        <p class="thankyou-message" style="text-align: center;">Terima kasih telah melakukan pembelian!</p> <!-- Moved thank you message down -->
    </div>
</body>
</html>
