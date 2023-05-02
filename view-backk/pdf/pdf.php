<?php 
require_once __DIR__ . '/vendor/autoload.php';
include_once 'C:\xampp\htdocs\louled\Controller\SponsorC.php';
$SponsorC=new SponsorC();
$listeSponsor=$SponsorC->afficherSponsor(); 

$fname="hello";
$mpdf= new \Mpdf\Mpdf();
$data="";



$data .="<h3>all sponsors</h3>";
$data .="<table >" ;
$data .="<tr>" ;
$data .="<th>id_sponsor</th>" ;

$data .="<th>id_user</th>" ;
$data .="<th>type_spon</th>" ;
$data .=  "<th>subscribe_date</th>" ;
                			
$data .= "<th>endsub_date</th>" ;
$data .= "<th>subscribe_price</th>" ;
$data .= "<th>sponsor_describe</th>" ;
	


          
                
$data .="</tr>" ;
	
				foreach($listeSponsor as $Sponsor){
	
            $data .="<tr>" ;
            $data .="<td>"  .$Sponsor['id_sponsor']. "</td>" ;
            $data .="<td>" . $Sponsor['id_user']. "</td>" ;
            $data .="<td>"  .$Sponsor['type_sponsor']. "</td>" ;
			$data .="<td>" . $Sponsor['subscribe_date']. "</td>" ;
            $data .="<td>" . $Sponsor['endsub_date']. "</td>" ;
            $data .= "<td>" . $Sponsor['subscribe_price']." </td>" ;
            $data .= "<td>" . $Sponsor['sponsor_describe']. "</td>" ;
                }
 
			$data .="</tr>" ;
		
            $data .="</table>" ;


            
$mpdf->WriteHTML($data);
$mpdf->Output('mypdf.pdf','D' );
