<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        .customfont {
            font-family: 'banglafont', sans-serif;
        }

        .invoice-box {
            width: 80%;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box my-5">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{ asset('/') }}upload/20200121_180522.jpg" style="width: 100px" />
                            </td>

                            <td>
                                Invoice #: 00{{ $order->id }}<br />
                                Order Date: {{ $order->order_date }}<br />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                <h4>Delivery Information</h4>
                                <span class="customfont">{{ $order->customer->name }}</span><br />
                                {{ $order->customer->mobile }}<br />
                                {{ $order->delivery_address }}
                            </td>

                            <td>
                                <h4>Company Information</h4>
                                Acme Corp.<br />
                                John Doe<br />
                                john@example.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr class="heading">
                <td>Item</td>
                <td style="text-align: center">Price</td>
                <td style="text-align: center">Quantity</td>
                <td style="text-align: right">Total</td>
            </tr>
            @php($sum = 0)
            @foreach ($order->orderDetails as $orderdetail)
                <tr class="item">
                    <td>{{ $orderdetail->product_name }}</td>
                    <td style="text-align: center">{{ $orderdetail->product_price }}</td>
                    <td style="text-align: center">{{ $orderdetail->product_qty }}</td>
                    <td style="text-align: right">{{ $orderdetail->product_price * $orderdetail->product_qty }}
                    </td>
                </tr>
                @php($sum += $orderdetail->product_price * $orderdetail->product_qty)
            @endforeach

            <tr class="sub-total">
                <td></td>

                <td colspan="3" style="text-align: right">Sub-Total:
                    {{ $sum }}</td>
            </tr>
            <tr class="tax-total">
                <td></td>

                <td colspan="3" style="text-align: right">Tax: {{ $order->tax_total }}</td>
            </tr>
            <tr class="sipping-total">
                <td style="padding-bottom: 40px"></td>

                <td colspan="3" style="text-align: right; padding-bottom: 40px">Shipping:
                    {{ $order->shipping_total }}</td>
            </tr>
            {{-- <tr class="total">
                        <td></td>

                        <td colspan="3" style="text-align: right">Total: {{ $order->order_total }}</td>
                    </tr> --}}


            <tr class="heading">
                <td>Payment Method</td>
                <td colspan="3">Total</td>
            </tr>

            <tr class="details">
                <td>{{ $order->payment_type == 1 ? 'Cash On Delivery' : 'Online' }}</td>
                <td colspan="3">{{ $order->order_total }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
