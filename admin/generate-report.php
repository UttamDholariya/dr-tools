<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width" />
        <!-- *Note: You must have internet connection on your laptop or pc other wise below code is not working -->
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- bootstrap css and js -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <!-- JS for jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" align="center">
                    <br>
                    <h5 align="center">Most Product Sell Report</h5>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Quantity Sold</th>
                                <th>Product Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include "confing.php";
                                include_once('tcpdf_6_2_13/tcpdf/tcpdf.php');

                                $sql = "SELECT * FROM product";
                                $result = mysqli_query($conn, $sql);

                                if(mysqli_num_rows($result))
                                {
                                    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	                                $pdf->SetCreator(PDF_CREATOR);    
	                                $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	                                $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	                                $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	                                $pdf->SetDefaultMonospacedFont('helvetica');  
	                                $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	                                $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
	                                $pdf->setPrintHeader(false);  
	                                $pdf->setPrintFooter(false);  
	                                $pdf->SetAutoPageBreak(TRUE, 10);  
	                                $pdf->SetFont('helvetica', '', 12);  
	                                $pdf->AddPage();
                                    
                                    $content = '';
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                                    {
                                        $content .= '
                                            <tr>
                                                <td>'.$row['id'].'</td>
                                                <td>'.$row['pro_name'].'</td>
                                                <td>'.$row['quantity'].'</td>
                                                <td>'.$row['pro_price'].'</td>
                                                <td>'.$row['pro_price'].'</td>
                                            </tr>
                                            <tr>
                                                <td><b>Total</b></td>
                                                <td></td>
                                                    <td></td>
                                                <td></td>
                                                <td>400</td>
                                            </tr>';
                                    }
                                    $pdf->writeHTML($content);
                                    $file_name = "ProductReport.pdf";
                                    if($_GET['ACTION']=='DOWNLOAD')
                                    {
                                        $pdf->Output($file_name, 'D');
                                    }
                                }
                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
    </body>
</html> 