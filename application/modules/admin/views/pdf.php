<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Invoice</title>

       <style type="text/css">
        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }
        
        page[size="A4"] {
            width: 21cm;
            /* height: 29.7cm; */
        }
        
        table td {
            vertical-align: top;
        }
        
        .itemInfo {
            border: 1px solid #e3ebf3;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .itemInfo th {
            color: #6b6f80;
            text-align: left;
        }
        
        .itemInfo th,
        .itemInfo td {
            border: 1px solid #e3ebf3;
            padding: 10px;
            color: #6b6f80;
            font-size: 14px;
        }
        
        .text-right {
            text-align: right !important;
        }
        
        .table-payment td,
        .table-payment th {
            padding: 10px;
            border-bottom: 1px solid #e3ebf3;
            color: #6b6f80;
            font-size: 14px;
        }
    </style>
</head>

<body style="font-family: 'Roboto', sans-serif; background: #f8f8f8; box-sizing: border-box;">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <page size="A4" style="background: #fff; margin: 0 auto; padding: 20px; box-sizing: border-box;">
        <table style="width: 100%;">
            <tr>
                <td>
                    <table style="width: 100%;">
                        <tr>
                            <td>
                                <img src="<?php echo base_url() ?>frontend_asset/reservision-email/index.png" alt="company logo" width="70">
                                <h2 style="margin-top: 0; font-size: 16px; color: #333;">Reservision Org.</h2>
                            </td>
                            <td style="text-align:right">
                                <h2 style="font-weight: 400; margin-top: 0; margin-bottom: 10px;">INVOICE</h2>
                                <p style="color: #868686;
                                        font-weight: 500;
                                        margin-top: 0;
                                        font-size: 15px;
                                        margin-bottom: 15px;"># INV-001001</p>
                                <p style="color: #868686;
                                        font-weight: 400;
                                        margin-top: 0;
                                        font-size: 15px;
                                        margin-bottom: 10px;"><?php echo date('j ,F Y',strtotime($crd)); ?></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="text-muted">Bill To,</p>
                    <h2 style="font-size: 18px;
                    margin-bottom: 0px;
                    color: #333;"><?php echo ucfirst($customer); ?></h2>
                 <!--    <p style="color: #868686;
                    margin-top: 10px;
                    font-size: 16px;">102 Park Avenue, New York, 25896.</p> -->
                </td>
            </tr>
            <tr>
                <td>
                    <h2 style="font-size:16px; color:#333; margin-bottom: 10px;">Trip Info</h2>
                    <hr style="display: block;height: 1px;border: 0;border-top: 1px solid #e3ebf3;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr>
                            <td>
                                <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Date & Time :</h2>
                                <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;"><?php echo date('j ,F Y',strtotime($pickupDate)); ?>, <?php echo $pickupTime; ?></p>
                                <div style="margin-top: 10px;">
                                    <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Source :</h2>
                                    <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;"><?php echo $pickupLocation;  ?></p>
                                </div>
                                <div style="margin-top: 10px;">
                                    <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Destination :</h2>
                                    <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;"><?php echo $destination;  ?></p>
                                </div>
                            </td>
                            <td style="text-align: right">
                                <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Passenger</h2>
                                <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px; margin-bottom: 3px;">Adult : 5</p>
                                <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;">Childreen : 2</p>
                            </td>
                        </tr>

                    </table>
                    <!-- <table style="width: 100%; border: 1px solid #e3ebf3; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 0 10px; border-left: 1px solid #e3ebf3;">
                                <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Date & Time</h2>
                                <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;">30-05-2019, 03:00 PM</p>
                            </td>
                            <td style="padding: 0 10px; border-left: 1px solid #e3ebf3;">
                                <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Source</h2>
                                <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;">551 Bradford Drive Camp Hill, PA 17011</p>
                            </td>
                            <td style="padding: 0 10px; border-left: 1px solid #e3ebf3;">
                                <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Destination</h2>
                                <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;">85 South Jockey Hollow Dr. Hummelstown, PA 17036</p>
                            </td>
                            <td style="padding: 0 10px; border-left: 1px solid #e3ebf3; text-align: center;">
                                <h2 style="font-size: 14px; color: #828282; margin-bottom: 8px;">Passenger</h2>
                                <p style="font-size: 15px; margin-top: 0; color: #6b6f80; line-height: 24px;">5</p>
                            </td>
                        </tr>
                    </table> -->
                </td>
            </tr>
            <tr>
                <td>
                    <div class="table-responsive">
                        <table class="itemInfo" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($invoiceData as $key => $value) {
                                  
                                 ?>
                                <tr>
                                    <th scope="row"><?php echo $key +1; ?></th>
                                    <td>
                                        <?php echo $value['item']; ?>
                                    </td>
                                    <td><?php echo $value['quantity']; ?></td>
                                    <td>$ <?php echo $value['price']; ?></td>
                                    <td class="text-right">$ <?php echo $value['total']; ?></td>
                                </tr>
                                <?php  } ?>
                               
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="width: 100%;">
                        <tr>
                            <td></td>
                            <td style="width: 50%;">
                                <p style="font-size: 18px;
                                margin-top: 8px; color: #6b6f80;">Total due</p>
                                <div class="table-payment">
                                    <table style="border-top: 1px solid #828282; width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td class="text-right">$ <?php echo $subTotal; ?></td>
                                            </tr>
                                            <tr>
                                                <td>TAX</td>
                                                <td class="text-right">$ 00.00</td>
                                            </tr>
                                            <tr>
                                                <td>Discount
                                                    <span style="font-size: 13px; display: inline-block; width: 100%; margin-top:3px;">(Ride Back Discount)</span>
                                                </td>
                                                <td class="pink text-right">(-) $ <?php echo $discount; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight: 600; font-size: 16px;">Total</td>
                                                <td class="text-right" style="font-weight: 600; font-size: 16px;"> $ <?php echo $allTotal; ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </page>

 
</body>

</html>