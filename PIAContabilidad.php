<style type="text/css">

     body{
     font-family: arial, helvetica;
     background: #ccffcc;
     }

     table {
          border-collapse: collapse;
          border-top-left-radius: 20px;
          background: #ffffff;
          width: 65%;
     }

     th, td{
          padding: 10px;

          
     }

     td:nth-child(even){
          background-color: #ddd;
     }
     
     tr:hover td{
          background: gray;
          color: #;
     }

     tr:last-child td:first-child{
          border-bottom-left-radius: 10px;
     }
     tr:last-child td:last-child{
          border-bottom-right-radius: 10px;
     }
     th:first-child{
          border-top-left-radius: 10px;
          background: #3366cc;
          color: #ffffff;
     }
     th:last-child{
          border-top-right-radius: 10px;
     }
</style>

<?php
//---Variables de la Tabla año pasado.---
$efec= $_POST['efec'];
$prov= $_POST['prov'];
$clien= $_POST['clien'];
$docpag= $_POST['docpag'];
$invdemat= $_POST['invdemat'];
$imprenpag= $_POST['imprenpag'];
$invdeartterm= $_POST['invdeartterm'];
$obligpag= $_POST['obligpag'];
$terre= $_POST['terre'];
$planyequi= $_POST['planyequi'];
$depracum= $_POST['depracum'];
$capiapor= $_POST['capiapor'];
$capigana= $_POST['capigana'];
$totcapicont= $_POST['totcapicont'];

//---Variables de la Tabla 1.---
$venplan1semp1= $_POST['venplan1semp1'];
$venplan1semp2= $_POST['venplan1semp2'];
$venplan1semp3= $_POST['venplan1semp3'];
$venplan2semp1= $_POST['venplan2semp1'];
$venplan2semp2= $_POST['venplan2semp2'];
$venplan2semp3= $_POST['venplan2semp3'];
$preven1semp1= $_POST['preven1semp1'];
$preven1semp2= $_POST['preven1semp2'];
$preven1semp3= $_POST['preven1semp3'];
$preven2semp1= $_POST['preven2semp1'];
$preven2semp2= $_POST['preven2semp2'];
$preven2semp3= $_POST['preven2semp3'];

//---Variables de la Tabla 2.---
$tasaimprenta= $_POST['tasaimprenta'];
$tasareputilidades= $_POST['tasareputilidades'];
$porcven2019= $_POST['porcven2019'];

//---Variables de la Tabla 3.---
$p1invin1sem= $_POST['p1invin1sem'];
$p1mAinvfin2sem= $_POST['p1mAinvfin2sem'];
$p2invin1sem= $_POST['p2invin1sem'];
$p2mAinvfin2sem= $_POST['p2mAinvfin2sem'];
$p3invin1sem= $_POST['p3invin1sem'];
$p3mAinvfin2sem= $_POST['p3mAinvfin2sem'];

//---Variables de la Tabla 4.---
$mAprod1= $_POST['mAprod1'];
$mBprod1= $_POST['mBprod1'];
$mCprod1= $_POST['mCprod1'];
$mAprod2= $_POST['mAprod2'];
$mBprod2= $_POST['mBprod2'];
$mCprod2= $_POST['mCprod2'];
$mAprod3= $_POST['mAprod3'];
$mBprod3= $_POST['mBprod3'];
$mCprod3= $_POST['mCprod3'];

//---Variables de la Tabla 5.---
$mAinvin1sem= $_POST['mAinvin1sem'];
$mAinvfin2sem= $_POST['mAinvfin2sem'];
$mAcost1sem= $_POST['mAcost1sem'];
$mAcost2sem= $_POST['mAcost2sem'];
$mBinvin1sem= $_POST['mBinvin1sem'];
$mBinvfin2sem= $_POST['mBinvfin2sem'];
$mBcost1sem= $_POST['mBcost1sem'];
$mBcost2sem= $_POST['mBcost2sem'];
$mCinvin1sem= $_POST['mCinvin1sem'];
$mCinvfin2sem= $_POST['mCinvfin2sem'];
$mCcost1sem= $_POST['mCcost1sem'];
$mCcost2sem= $_POST['mCcost2sem'];

//---Variables de la Tabla 5.---
$pormatcomp= $_POST['pormatcomp'];

//---Variables de la Tabla 7.---
$hprod1= $_POST['hprod1'];
$hprod2= $_POST['hprod2'];
$hprod3= $_POST['hprod3'];
$cuotaporh1s = 10;
$cuotaporh2s = 11;

//---Variables de la Tabla 8.---
$depregasind= $_POST['depregasind'];
$seguros= $_POST['seguros'];
$manteni1s= $_POST['manteni1s'];
$manteni2s= $_POST['manteni2s'];
$interporoblig1s= $_POST['interporoblig1s'];
$interporoblig2s= $_POST['interporoblig2s'];
$variosgasind= $_POST['variosgasind'];

//---Variables de la Tabla 9.---
$depreciacion= $_POST['depreciacion'];
$sueldysala= $_POST['sueldysala'];
$comisiones= $_POST['comisiones'];
$varios1s= $_POST['varios1s'];
$varios2s= $_POST['varios2s'];
$interporoblig= $_POST['interporoblig'];

//---Variables de la Tabla 3 del PRESUPUETO FINANCIERO.---
$maquinaria= $_POST['maquinaria'];

//---Operaciones de la Tabla año pasado.---
$sumim = $prov + $docpag + $imprenpag;
$totalcir = $efec + $clien + $invdemat + $invdeartterm;
$totpasivo = $sumim + $obligpag;
$totalnocir = ($terre + $planyequi) - $depracum;
$activotot = $totalnocir + $totalcir;
$totpasmascapcon = $totcapicont + $totpasivo;

//---Operaciones de la Tabla 1 PRESUPUESTO DE VENTAS.---
$imporven1semp1 = $venplan1semp1 * $preven1semp1;
$imporven2semp1 = $venplan2semp1 * $preven2semp1;
$totimporvenp1 = $imporven1semp1 + $imporven2semp1;
$imporven1semp2 = $venplan1semp2 * $preven1semp2;
$imporven2semp2 = $venplan2semp2 * $preven2semp2;
$totimporvenp2 = $imporven1semp2 + $imporven2semp2;
$imporven1semp3 = $venplan1semp3 * $preven1semp3;
$imporven2semp3 = $venplan2semp3 * $preven2semp3;
$totimporvenp3 = $imporven1semp3 + $imporven2semp3;
$totvenporsem1 = $imporven1semp1 + $imporven1semp2 + $imporven1semp3;
$totvenporsem2 = $imporven2semp1 + $imporven2semp2 + $imporven2semp3;
$totvenporsem = $totvenporsem1 + $totvenporsem2;

//---Operaciones de la Tabla 2 DETERMINACION SALDO CLIENTES.---
$totclien2018 = $clien + $totvenporsem;
$cobranza2019o = $totvenporsem * $porcven2019;
$cobranza2019 = $cobranza2019o / 100;
$sumcobranza = $clien + $cobranza2019;
$saldoclien = $totclien2018 - $sumcobranza;

//---Operaciones de la Tabla 3 PRESUPUESTO DE PRODUCCION.---
$total2019p1 = $venplan1semp1 + $venplan2semp1;
$totalunidades1s = $venplan1semp1 + $p1invin1sem;
$totalunidades2s = $venplan2semp1 + $p1mAinvfin2sem;
$totales2019 = $total2019p1 + $p1mAinvfin2sem;
$totalesprodu1s = $totalunidades1s - $venplan1semp1;
$totalesprodu2s = $totalunidades2s - $p1invin1sem;
$totalesprodut = $totales2019 - $venplan1semp1;
$total2019p2 = $venplan1semp2 + $venplan2semp2;
$totalunidades1sp2 = $venplan1semp2 + $p2invin1sem;
$totalunidades2sp2 = $venplan2semp2 + $p2mAinvfin2sem;
$totales2019p2 = $total2019p2 + $p2mAinvfin2sem;
$totalesprod21s = $totalunidades1sp2 - $p2invin1sem;
$totalesprod22s = $totalunidades2sp2 - $p2invin1sem;
$totalesprodu2t = $totales2019p2 - $p2invin1sem;
$total2019p3 = $venplan1semp3 + $venplan2semp3;
$totalunidades1sp3 = $venplan1semp3 + $p3invin1sem;
$totalunidades2sp3 = $venplan2semp3 + $p3mAinvfin2sem;
$totales2019p3 = $total2019p3 + $p3mAinvfin2sem;
$totalesprod31s = $totalunidades1sp3 - $p3invin1sem;
$totalesprod32s = $totalunidades2sp3 - $p3invin1sem;
$totalesprodu3t = $totales2019p3 - $p3invin1sem;

//---Operaciones de la Tabla 4 PRESUPUESTO DE REQUERIMIENTO DE MATERIAL.---
$totmAreq1s = $totalesprodu1s * $mAprod1;
$totmAreq2s = $totalesprodu2s * $mAprod1;
$totmAreqts = $totalesprodut * $mAprod1;
$totmBreq1s = $totalesprodu1s * $mBprod1;
$totmBreq2s = $totalesprodu2s * $mBprod1;
$totmBreqts = $totalesprodut * $mBprod1;
$totmCreq1s = $totalesprodu1s * $mCprod1;
$totmCreq2s = $totalesprodu2s * $mCprod1;
$totmCreqts = $totalesprodut * $mCprod1;
$totmAreq1sp2 = $totalesprod21s * $mAprod2;
$totmAreq2sp2 = $totalesprod22s * $mAprod2;
$totmAreqtsp2 = $totalesprodu2t * $mAprod2;
$totmBreq1sp2 = $totalesprod21s * $mBprod2;
$totmBreq2sp2 = $totalesprod22s * $mBprod2;
$totmBreqtsp2 = $totalesprodu2t * $mBprod2;
$totmCreq1sp2 = $totalesprod21s * $mCprod2;
$totmCreq2sp2 = $totalesprod22s * $mCprod2;
$totmCreqtsp2 = $totalesprodu2t * $mCprod2;
$totmAreq1sp3 = $totalesprod31s * $mAprod3;
$totmAreq2sp3 = $totalesprod32s * $mAprod3;
$totmAreqtsp3 = $totalesprodu3t * $mAprod3;
$totmBreq1sp3 = $totalesprod31s * $mBprod3;
$totmBreq2sp3 = $totalesprod32s * $mBprod3;
$totmBreqtsp3 = $totalesprodu3t * $mBprod3;
$totmCreq1sp3 = $totalesprod31s * $mCprod3;
$totmCreq2sp3 = $totalesprod32s * $mCprod3;
$totmCreqtsp3 = $totalesprodu3t * $mCprod3;
$totmAreqg1s = $totmAreq1s + $totmAreq1sp2 + $totmAreq1sp3;
$totmAreqg2s = $totmAreq2s + $totmAreq2sp2 + $totmAreq2sp3;
$totmAreqgts = $totmAreqts + $totmAreqtsp2 + $totmAreqtsp3;
$totmBreqg1s = $totmBreq1s + $totmBreq1sp2 + $totmBreq1sp3;
$totmBreqg2s = $totmBreq2s + $totmBreq2sp2 + $totmBreq2sp3;
$totmBreqgts = $totmBreqts + $totmBreqtsp2 + $totmBreqtsp3;
$totmCreqg1s = $totmCreq1s + $totmCreq1sp2 + $totmCreq1sp3;
$totmCreqg2s = $totmCreq2s + $totmCreq2sp2 + $totmCreq2sp3;
$totmCreqgts = $totmCreqts + $totmCreqtsp2 + $totmCreqtsp3;

//---Operaciones de la Tabla 5 PRESUPUESTO DE COMPRA DE MATERIAL.---
$totmAcom1s = $totmAreqg1s + $mAinvin1sem;
$totmAcom2s = $totmAreqg2s + $mAinvfin2sem;
$totmAcomts = $totmAreqgts + $mAinvfin2sem;
$totmAcomp1s = $totmAcom1s - $mAinvin1sem;
$totmAcomp2s = $totmAcom2s - $mAinvin1sem;
$totmAcomp3s = $totmAcomts - $mAinvin1sem;
$totmApesos1s = $totmAcomp1s * $mAcost1sem;
$totmApesos2s = $totmAcomp2s * $mAcost2sem;
$totmApesosts = $totmApesos1s + $totmApesos2s;
$totmBcom1s = $totmBreqg1s + $mBinvin1sem;
$totmBcom2s = $totmBreqg2s + $mBinvfin2sem;
$totmBcomts = $totmBreqgts + $mBinvfin2sem;
$totmBcomp1s = $totmBcom1s - $mBinvin1sem;
$totmBcomp2s = $totmBcom2s - $mBinvin1sem;
$totmBcomp3s = $totmBcomts - $mBinvin1sem;
$totmBpesos1s = $totmBcomp1s * $mBcost1sem;
$totmBpesos2s = $totmBcomp2s * $mBcost2sem;
$totmBpesosts = $totmBpesos1s + $totmBpesos2s;
$totmCcom1s = $totmCreqg1s + $mCinvin1sem;
$totmCcom2s = $totmCreqg2s + $mCinvfin2sem;
$totmCcomts = $totmCreqgts + $mCinvfin2sem;
$totmCcomp1s = $totmCcom1s - $mCinvin1sem;
$totmCcomp2s = $totmCcom2s - $mCinvin1sem;
$totmCcomp3s = $totmCcomts - $mCinvin1sem;
$totmCpesos1s = $totmCcomp1s * $mCcost1sem;
$totmCpesos2s = $totmCcomp2s * $mCcost2sem;
$totmCpesosts = $totmCpesos1s + $totmCpesos2s;
$comptotales1s = $totmApesos1s + $totmBpesos1s + $totmCpesos1s;
$comptotales2s = $totmApesos2s + $totmBpesos2s + $totmCpesos2s;
$comptotalests = $totmApesosts + $totmBpesosts + $totmCpesosts;

//---Operaciones de la Tabla 6 PRESUPUESTO .---
$totprov2019 = $clien + $comptotalests;
$porprov2019o = $comptotalests * $pormatcomp;
$porprov2019 = $porprov2019o / 100;
$totsalidas = $clien + $porprov2019;
$saldoprov2019 = $totprov2019 - $totsalidas;

//---Operaciones de la Tabla 7 PRESUPUESTO MANO DE OBRA DIRECTA.---
$tothreqp1s1 = $totalesprodu1s * $hprod1;
$tothreqp1s2 = $totalesprodu2s * $hprod1;
$tothreqp1st = $totalesprodut * $hprod1;
$tothreqp2s1 = $totalesprod21s * $hprod2;
$tothreqp2s2 = $totalesprod22s * $hprod2;
$tothreqp2st = $totalesprodu2t * $hprod2;
$tothreqp3s1 = $totalesprod31s * $hprod3;
$tothreqp3s2 = $totalesprod32s * $hprod3;
$tothreqp3st = $totalesprodu3t * $hprod3;
$impmod1s = $tothreqp1s1 * $cuotaporh1s;
$impmod2s = $tothreqp1s2 * $cuotaporh2s;
$sumimpmod = $impmod1s + $impmod2s;
$impmod1sp2 = $tothreqp2s1 * $cuotaporh1s;
$impmod2sp2 = $tothreqp2s2 * $cuotaporh2s;
$sumimpmodp2 = $impmod1sp2 + $impmod2sp2;
$impmod1sp3 = $tothreqp3s1 * $cuotaporh1s;
$impmod2sp3 = $tothreqp3s2 * $cuotaporh2s;
$sumimpmodp3 = $impmod1sp3 + $impmod2sp3;
$tothreqpor1s = $tothreqp1s1 + $tothreqp2s1 + $tothreqp3s1;
$tothreqpor2s = $tothreqp1s2 + $tothreqp2s2 + $tothreqp3s2;
$tothreqports = $tothreqp1st + $tothreqp2st + $tothreqp3st;
$totimpmodpor1s = $impmod1s + $impmod1sp2 + $impmod1sp3;
$totimpmodpor2s = $impmod2s + $impmod2sp2 + $impmod2sp3;
$totimpmodports = $sumimpmod + $sumimpmodp2 + $sumimpmodp3;

//---Operaciones de la Tabla 8 PRESUPUESTO DE GASTOS INDIRECTOS DE FABRICACION.---
$dep1s = $depregasind / 2;
$sumdep = $dep1s + $dep1s;
$seguro1s = $seguros / 2;
$sumseguro = $seguro1s + $seguro1s;
$summante = $manteni1s + $manteni2s;
$sumener = $interporoblig1s + $interporoblig2s;
$variosin1s = $variosgasind / 2;
$sumvarios = $variosin1s + $variosin1s;
$totgif1s = $dep1s + $seguro1s + $manteni1s + $interporoblig1s + $varios1s;
$totgif2s = $dep1s + $seguro1s + $manteni2s + $interporoblig2s + $varios1s;
$totgifts = $sumdep + $sumseguro + $summante + $sumener + $sumvarios;
$costohgifa = $totgifts / $tothreqports;

//---Operaciones de la Tabla 9 PRESUPUESTO DE GASTOS DE OPERACION.---
$depreciacion1s = $depreciacion / 2;
$sumdepreciacion = $depreciacion1s + $depreciacion1s;
$sueldoysal1s = $sueldysala / 2;
$sumsueldos = $sueldoysal1s + $sueldoysal1s;
$comisiones1smul = $totvenporsem1 * $comisiones;
$comisiones1s = $comisiones1smul / 100;
$comisiones2smul = $totvenporsem2 * $comisiones;
$comisiones2s = $comisiones2smul / 100;
$comisionessmul = $totvenporsem * $comisiones;
$comisioness = $comisionessmul / 100;
$totvarios = $varios1s + $varios2s;
$intporob1s = $interporoblig / 2;
$totintporob = $intporob1s + $intporob1s;
$totgasop1s = $depreciacion1s + $sueldoysal1s + $comisiones1s + $varios1s + $intporob1s;
$totgasop2s = $depreciacion1s + $sueldoysal1s + $comisiones2s + $varios2s + $intporob1s;
$totgasopts = $sumdepreciacion + $sumsueldos + $comisioness + $totvarios + $totintporob;

//---Operaciones de la Tabla 10 DETERMINACION DE COSTO UNITARIO DE PRODUCTOS TERMINADOS.---
$costounmAp1 = $mAcost2sem * $mAprod1;
$costounmBp1 = $mBcost2sem * $mBprod1;
$costounmCp1 = $mCcost2sem * $mCprod1;
$costounmanop1 = $cuotaporh2s * $hprod1;
$costoungastoind = $costohgifa * $hprod1;
$costounitario = $costounmAp1 + $costounmBp1 + $costounmCp1 + $costounmanop1 + $costoungastoind;
$costounmAp2 = $mAcost2sem * $mAprod2;
$costounmBp2 = $mBcost2sem * $mBprod2;
$costounmCp2 = $mCcost2sem * $mCprod2;
$costounmanop2 = $cuotaporh2s * $hprod2;
$costoungastoindp2 = $costohgifa * $hprod2;
$costounitariop2 = $costounmAp2 + $costounmBp2 + $costounmCp2 + $costounmanop2 + $costoungastoindp2;
$costounmAp3 = $mAcost2sem * $mAprod3;
$costounmBp3 = $mBcost2sem * $mBprod3;
$costounmCp3 = $mCcost2sem * $mCprod3;
$costounmanop3 = $cuotaporh2s * $hprod3;
$costoungastoindp3 = $costohgifa * $hprod3;
$costounitariop3 = $costounmAp3 + $costounmBp3 + $costounmCp3 + $costounmanop3 + $costoungastoindp3;

//---Operaciones de la Tabla 11 VALUACION DE INVENTARIOS FINALES.---
$costotmA = $mAinvfin2sem * $mAcost2sem;
$costotmB = $mBinvfin2sem * $mBcost2sem;
$costotmC = $mCinvfin2sem * $mCcost2sem;
$costotinvfin = $costotmA + $costotmB + $costotmC;
$costotp1 = $p1mAinvfin2sem * $costounitario;
$costotp2 = $p2mAinvfin2sem * $costounitariop2;
$costotp3 = $p3mAinvfin2sem * $costounitariop3;
$costotinvfinprodter = $costotp1 + $costotp2 + $costotp3;

//---Operaciones de la Tabla 1 del PRESUPUESTO FINANCIERO.---
$materialdis = $invdemat + $comptotalests;
$materialesuti = $materialdis - $costotinvfin;
$costodepro = $materialesuti + $totimpmodports + $totgifts;
$totproddisp = $costodepro + $invdeartterm;
$costodeven = $totproddisp - $costotinvfinprodter;

//---Operaciones de la Tabla 2 del PRESUPUESTO FINANCIERO.---
$utilidadbruta = $totvenporsem - $costodeven;
$utilidadopera = $utilidadbruta - $totgasopts;
$isrmul = $utilidadopera * $tasaimprenta;
$isrt = $isrmul / 100;
$ptumul = $utilidadopera * $tasareputilidades;
$ptut = $ptumul / 100;
$utilidadneta = $utilidadopera - $isrt - $ptut;

//---Operaciones de la Tabla 3 del PRESUPUESTO FINANCIERO.---
$totentradas = $cobranza2019 + $clien;
$efecdisp = $efec + $totentradas;
$pagogasindfab = $totgifts - $sumdep;
$pagogasdeope = $totgasopts - $sumdepreciacion;
$totalsalidas = $porprov2019 + $clien + $totimpmodports + $pagogasindfab + $pagogasdeope + $maquinaria + $imprenpag +$isrt;
$flujefecactual = $efecdisp - $totalsalidas;

//---Operaciones de la Tabla 4 del PRESUPUESTO FINANCIERO.---
$totactcir = $flujefecactual + $saldoclien + $costotinvfin + $costotinvfinprodter;
$planyequinocir = $planyequi + $maquinaria;
$depreciacionacuo = $depracum + $sumdepreciacion + $sumdep;
$depreciacionacu = $depreciacionacuo * -1;
$totactnocir = $terre + $planyequinocir + $depreciacionacu;
$activotot = $totactcir + $totactnocir;
$totpascortopl = $saldoprov2019 + $docpag + $ptut;
$pasivototal = $totpascortopl + $obligpag;
$totcapcontable = $capiapor + $capigana + $utilidadneta;
$sumpasycap = $pasivototal + $totcapcontable;

//-------------Agrego la tabla año pasado. Tabla  Año pasado---------------------------
echo '<h1>Presupuesto Maestro</h1>';
echo '<center>';
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">Estado de situacion financiera al 31 de Diciembre de 2018</th>';
echo'</tr>';

echo '<tr>';      
echo '<td>Activos:</td>';
echo '<td></td>';
echo '<td>Pasivos</td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';      
echo '<td>Circulante</td>';
echo '<td></td>';
echo "<td>A corto plazo</td>";
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Efectivo</td>';
echo "<td>$efec</td>";
echo '<td>Proveedores</td>';
echo "<td>$prov</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Clientes</td>';
echo "<td>$clien</td>";
echo '<td>Documentos por pagar</td>';
echo "<td>$docpag</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Inventario de materiales</td>';
echo "<td>$invdemat</td>";
echo '<td>Impuesto, sobre la renta por pagar</td>';
echo "<td>$imprenpag</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo "<td>$sumim</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Inventario de articulos terminados</td>';
echo "<td>$invdeartterm</td>";
echo '<td></td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Total circulante</td>';
echo "<td>$totalcir</td>";
echo '<td>A largo plazor</td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo '<td></td>';
echo '<td>Obligaciones por pagar</td>';
echo "<td>$obligpag</td>";
echo '</tr>';

echo '<tr>';
echo '<td>No circulante</td>';
echo '<td></td>';
echo '<td>Total pasivo</td>';
echo "<td>$totpasivo</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Terreno</td>';
echo "<td>$terre</td>";
echo '<td></td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Planta y equipo</td>';
echo "<td>$planyequi</td>";
echo '<td>Capital contable</td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Depreciacion acumulada</td>';
echo "<td>$depracum</td>";
echo '<td>Capital aportado</td>';
echo "<td>$capiapor</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total no circulante</td>';
echo "<td>$totalnocir</td>";
echo '<td>Capital ganado</td>';
echo "<td>$capigana</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Activo Total</td>';
echo "<td>$activotot</td>";
echo '<td>Total capital contable</td>';
echo "<td>$totcapicont</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo '<td></td>';
echo '<td>Total pasivo + capital contable</td>';
echo "<td>$totpasmascapcon</td>";
echo '</tr>';

echo '</table>';
echo '</center>';
//*********************Termino la Tabla Año pasado. Fin Tabla Año pasado********************/

//*********************Agrego la Tabla 1. Tabla 1 PRESUPUESTO DE VENTAS********************/
echo '<H1>l. Presupuesto de operacion</H1>';
echo '<center>';
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">1. Presupuesto de venta</th>';
echo'</tr>';

echo '<tr >';      
echo '<td></td>';  
echo '<td>1er. Semestre</td>';
echo '<td>2do. Semestre</td>';  
echo '<td>Total 2019</td>';  
echo '</tr>';

echo '<tr>';      
echo '<td>PRODUCTO 1</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a vender</td>';
echo "<td>$venplan1semp1</td>";
echo "<td>$venplan2semp1</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Precio de venta</td>';
echo "<td>$preven1semp1</td>";
echo "<td>$preven2semp1</td>";
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Importe de venta</td>';
echo "<td>$imporven1semp1</td>";
echo "<td>$imporven2semp1</td>";
echo "<td>$totimporvenp1</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';      
echo '<td>PRODUCTO 2</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a vender</td>';
echo "<td>$venplan1semp2</td>";
echo "<td>$venplan2semp2</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Precio de venta</td>';
echo "<td>$preven1semp2</td>";
echo "<td>$preven2semp2</td>";
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Importe de venta</td>';
echo "<td>$imporven1semp2</td>";
echo "<td>$imporven2semp2</td>";
echo "<td>$totimporvenp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';      
echo '<td>PRODUCTO 3</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a vender</td>';
echo "<td>$venplan1semp3</td>";
echo "<td>$venplan2semp3</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Precio de venta</td>';
echo "<td>$preven1semp3</td>";
echo "<td>$preven2semp3</td>";
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Importe de venta</td>';
echo "<td>$imporven1semp3</td>";
echo "<td>$imporven2semp3</td>";
echo "<td>$totimporvenp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de ventas por Semestre</td>';
echo "<td>$totvenporsem1</td>";
echo "<td>$totvenporsem2</td>";
echo "<td>$totvenporsem</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo '<br>';
//*********************Termino la Tabla 1. Fin Tabla 1********************/

//*********************Agrego la Tabla 2. Tabla 2 DETERMINACION DE SALDOS DE CLIENTES********************/
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">2. Determincion de saldo de Clientes y Flujo de Entradas</th>';
echo'</tr>';

echo '<tr>';      
echo '<td>Descripcion</td>';  
echo '<td>Importe</td>';
echo '<td>Total</td>';   
echo '</tr>';

echo '<tr>';
echo '<td>Saldo de clientes 31-Dic-2018</td>';
echo "<td></td>";
echo "<td>$clien</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Ventas 2019</td>';
echo "<td></td>";
echo "<td>$totvenporsem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de clientes 2018</td>';
echo "<td></td>";
echo "<td>$totclien2018</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Entradas de efectivo:</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Por cobranza del 2018</td>';
echo "<td>$clien</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Por cobranza del 2019</td>';
echo "<td>$cobranza2019</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de entradas 2019</td>';
echo "<td></td>";
echo "<td>$sumcobranza</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Saldo de clientes del 2019</td>';
echo "<td></td>";
echo "<td>$saldoclien</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo '<br>';
//*********************Termino la Tabla 2. Fin Tabla 2********************/

//*********************Agrego la Tabla 3. Tabla 3 PRESUPUESTO DE PRODUCCION********************/
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">3. Presupuesto de produccion</th>';
echo'</tr>';

echo '<tr>';      
echo '<td></td>';  
echo '<td>1er Semestre</td>';
echo '<td>2do Semestre</td>';  
echo '<td>Total 2019</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Producto 1</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a vender</td>';
echo "<td>$venplan1semp1</td>";
echo "<td>$venplan2semp1</td>";
echo "<td>$total2019p1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+) Inventario final</td>';
echo "<td>$p1invin1sem</td>";
echo "<td>$p1mAinvfin2sem</td>";
echo "<td>$p1mAinvfin2sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=) Total de unidades</td>';
echo "<td>$totalunidades1s</td>";
echo "<td>$totalunidades2s</td>";
echo "<td>$totales2019</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-) Inventario inicial</td>';
echo "<td>$venplan1semp1</td>";
echo "<td>$p1invin1sem</td>";
echo "<td>$venplan1semp1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=) Unidades a Producir</td>';
echo "<td>$totalesprodu1s</td>";
echo "<td>$totalesprodu2s</td>";
echo "<td>$totalesprodut</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Producto 2</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a vender</td>';
echo "<td>$venplan1semp2</td>";
echo "<td>$venplan2semp2</td>";
echo "<td>$total2019p2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+) Inventario final</td>';
echo "<td>$p2invin1sem</td>";
echo "<td>$p2mAinvfin2sem</td>";
echo "<td>$p2mAinvfin2sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=) Total de unidades</td>';
echo "<td>$totalunidades1sp2</td>";
echo "<td>$totalunidades2sp2</td>";
echo "<td>$totales2019p2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-) Inventario inicial</td>';
echo "<td>$p2invin1sem</td>";
echo "<td>$p2invin1sem</td>";
echo "<td>$p2invin1sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=) Unidades a Producir</td>';
echo "<td>$totalesprod21s</td>";
echo "<td>$totalesprod22s</td>";
echo "<td>$totalesprodu2t</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Producto 3</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a vender</td>';
echo "<td>$venplan1semp3</td>";
echo "<td>$venplan2semp3</td>";
echo "<td>$total2019p3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+) Inventario final</td>';
echo "<td>$p3invin1sem</td>";
echo "<td>$p3mAinvfin2sem</td>";
echo "<td>$p3mAinvfin2sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=) Total de unidades</td>';
echo "<td>$totalunidades1sp3</td>";
echo "<td>$totalunidades2sp3</td>";
echo "<td>$totales2019p3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-) Inventario inicial</td>';
echo "<td>$p3invin1sem</td>";
echo "<td>$p3invin1sem</td>";
echo "<td>$p3invin1sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=) Unidades a Producir</td>';
echo "<td>$totalesprod31s</td>";
echo "<td>$totalesprod32s</td>";
echo "<td>$totalesprodu3t</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo '<br>';
//*********************Termino la Tabla 3. Fin Tabla 3********************/

//*********************Agrego la Tabla 4. Tabla 4 PRESUPUESTO DE REQUERIMIENTO DE MATERIALES********************/
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">4. Presupuesto de Requerimientos de materiales</th>';
echo'</tr>';

echo '<tr>';      
echo '<td></td>';  
echo '<td>1er Semestre</td>';
echo '<td>2do Semestre</td>';  
echo '<td>Total 2019</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Producto 1</td>';
echo "<td>$totalesprodu1s</td>";
echo "<td>$totalesprodu2s</td>";
echo "<td>$totalesprodut</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mAprod1</td>";
echo "<td>$mAprod1</td>";
echo "<td>$mAprod1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material A requerido</td>';
echo "<td>$totmAreq1s</td>";
echo "<td>$totmAreq2s</td>";
echo "<td>$totmAreqts</td>";
echo '</tr>';


echo '<tr>';
echo '<td>Material B</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mBprod1</td>";
echo "<td>$mBprod1</td>";
echo "<td>$mBprod1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material B requerido</td>';
echo "<td>$totmBreq1s</td>";
echo "<td>$totmBreq2s</td>";
echo "<td>$totmBreqts</td>";
echo '</tr>';


echo '<tr>';
echo '<td>Material C</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mCprod1</td>";
echo "<td>$mCprod1</td>";
echo "<td>$mCprod1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material C requerido</td>';
echo "<td>$totmCreq1s</td>";
echo "<td>$totmCreq2s</td>";
echo "<td>$totmCreqts</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';


echo '<tr>';
echo '<td>Producto 2</td>';
echo "<td>$totalesprod21s</td>";
echo "<td>$totalesprod22s</td>";
echo "<td>$totalesprodu2t</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mAprod2</td>";
echo "<td>$mAprod2</td>";
echo "<td>$mAprod2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material A requerido</td>';
echo "<td>$totmAreq1sp2</td>";
echo "<td>$totmAreq2sp2</td>";
echo "<td>$totmAreqtsp2</td>";
echo '</tr>';


echo '<tr>';
echo '<td>Material B</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mBprod2</td>";
echo "<td>$mBprod2</td>";
echo "<td>$mBprod2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material B requerido</td>';
echo "<td>$totmBreq1sp2</td>";
echo "<td>$totmBreq2sp2</td>";
echo "<td>$totmBreqtsp2</td>";
echo '</tr>';


echo '<tr>';
echo '<td>Material C</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mCprod2</td>";
echo "<td>$mCprod2</td>";
echo "<td>$mCprod2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material C requerido</td>';
echo "<td>$totmCreq1sp2</td>";
echo "<td>$totmCreq2sp2</td>";
echo "<td>$totmCreqtsp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';


echo '<tr>';
echo '<td>Producto 3</td>';
echo "<td>$totalesprod31s</td>";
echo "<td>$totalesprod32s</td>";
echo "<td>$totalesprodu3t</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '<td></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mAprod3</td>";
echo "<td>$mAprod3</td>";
echo "<td>$mAprod3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material A requerido</td>';
echo "<td>$totmAreq1sp3</td>";
echo "<td>$totmAreq2sp3</td>";
echo "<td>$totmAreqtsp3</td>";
echo '</tr>';


echo '<tr>';
echo '<td>Material B</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mBprod3</td>";
echo "<td>$mBprod3</td>";
echo "<td>$mBprod3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material B requerido</td>';
echo "<td>$totmBreq1sp3</td>";
echo "<td>$totmBreq2sp3</td>";
echo "<td>$totmBreqtsp3</td>";
echo '</tr>';


echo '<tr>';
echo '<td>Material C</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimiento de material</td>';
echo "<td>$mCprod3</td>";
echo "<td>$mCprod3</td>";
echo "<td>$mCprod3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de material C requerido</td>';
echo "<td>$totmCreq1sp3</td>";
echo "<td>$totmCreq2sp3</td>";
echo "<td>$totmCreqtsp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Total de Requerimientos (gramos)</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td>$totmAreqg1s</td>";
echo "<td>$totmAreqg2s</td>";
echo "<td>$totmAreqgts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material B</td>';
echo "<td>$totmBreqg1s</td>";
echo "<td>$totmBreqg2s</td>";
echo "<td>$totmBreqgts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material C</td>';
echo "<td>$totmCreqg1s</td>";
echo "<td>$totmCreqg2s</td>";
echo "<td>$totmCreqgts</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
//*********************Termino la Tabla 4. Fin Tabla 4********************/

//*********************Agrego la Tabla 5. Tabla 5 PRESUPUESTO DE COMPRA DE MATERIALES********************/
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">5. Presupuesto de compra de materiales</th>';
echo'</tr>';

echo '<tr>';      
echo '<td></td>';  
echo '<td>1er Semestre</td>';
echo '<td>2do Semestre</td>';  
echo '<td>Total 2019</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimientos de materiales</td>';
echo "<td>$totmAreqg1s</td>";
echo "<td>$totmAreqg2s</td>";
echo "<td>$totmAreqgts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+) Inventario final</td>';
echo "<td>$mAinvin1sem</td>";
echo "<td>$mAinvfin2sem</td>";
echo "<td>$mAinvfin2sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Materiales</td>';
echo "<td>$totmAcom1s</td>";
echo "<td>$totmAcom2s</td>";
echo "<td>$totmAcomts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-) Inventario inicial</td>';
echo "<td>$mAinvin1sem</td>";
echo "<td>$mAinvin1sem</td>";
echo "<td>$mAinvin1sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material a comprar</td>';
echo "<td>$totmAcomp1s</td>";
echo "<td>$totmAcomp2s</td>";
echo "<td>$totmAcomp3s</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Precio de compra</td>';
echo "<td>$ $mAcost1sem</td>";
echo "<td>$ $mAcost2sem</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Material A en $</td>';
echo "<td>$ $totmApesos1s</td>";
echo "<td>$ $totmApesos2s</td>";
echo "<td>$ $totmApesosts</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';


echo '<tr>';
echo '<td>Material B</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimientos de materiales</td>';
echo "<td>$totmBreqg1s</td>";
echo "<td>$totmBreqg2s</td>";
echo "<td>$totmBreqgts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+) Inventario final</td>';
echo "<td>$mBinvin1sem</td>";
echo "<td>$mBinvfin2sem</td>";
echo "<td>$mBinvfin2sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Materiales</td>';
echo "<td>$totmBcom1s</td>";
echo "<td>$totmBcom2s</td>";
echo "<td>$totmBcomts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-) Inventario inicial</td>';
echo "<td>$mBinvin1sem</td>";
echo "<td>$mBinvin1sem</td>";
echo "<td>$mBinvin1sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material a comprar</td>';
echo "<td>$totmBcomp1s</td>";
echo "<td>$totmBcomp2s</td>";
echo "<td>$totmBcomp3s</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Precio de compra</td>';
echo "<td>$ $mBcost1sem</td>";
echo "<td>$ $mBcost2sem</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Material B en $</td>';
echo "<td>$ $totmBpesos1s</td>";
echo "<td>$ $totmBpesos2s</td>";
echo "<td>$ $totmBpesosts</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material C</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Requerimientos de materiales</td>';
echo "<td>$totmCreqg1s</td>";
echo "<td>$totmCreqg2s</td>";
echo "<td>$totmCreqgts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+) Inventario final</td>';
echo "<td>$mCinvin1sem</td>";
echo "<td>$mCinvfin2sem</td>";
echo "<td>$mCinvfin2sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Materiales</td>';
echo "<td>$totmCcom1s</td>";
echo "<td>$totmCcom2s</td>";
echo "<td>$totmCcomts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-) Inventario inicial</td>';
echo "<td>$mCinvin1sem</td>";
echo "<td>$mCinvin1sem</td>";
echo "<td>$mCinvin1sem</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material a comprar</td>';
echo "<td>$totmCcomp1s</td>";
echo "<td>$totmCcomp2s</td>";
echo "<td>$totmCcomp3s</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Precio de compra</td>';
echo "<td>$ $mCcost1sem</td>";
echo "<td>$ $mCcost2sem</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Material C en $</td>';
echo "<td>$ $totmCpesos1s</td>";
echo "<td>$ $totmCpesos2s</td>";
echo "<td>$ $totmCpesosts</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Compras totales:</td>';
echo "<td>$ $comptotales1s</td>";
echo "<td>$ $comptotales2s</td>";
echo "<td>$ $comptotalests</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo '<br>';
//*********************Termino la Tabla 5. Fin Tabla 5********************/

//*********************Agrego la Tabla 6. Tabla 6 DETERMINACION DEL SALDO DE PROVEEDORES Y FLUJO DE SALIDAS********************/

echo '<table>';
echo '<tr>';      
echo'<th colspan="4">6. Determincion del saldo de Proveedores y Flujo de Salidas</th>';
echo'</tr>';

echo '<tr>';      
echo '<td>Descripcion</td>';  
echo '<td>Importe</td>';
echo '<td>Total</td>';   
echo '</tr>';

echo '<tr>';
echo '<td>Saldo de proveedores 31-Dic-2018</td>';
echo "<td></td>";
echo "<td>$clien</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Compras 2019</td>';
echo "<td></td>";
echo "<td>$ $comptotalests</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de proveedores 2019</td>';
echo "<td></td>";
echo "<td>$ $totprov2019</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Salidas de efectivo:</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Por proveedores del 2018</td>';
echo "<td>$clien</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Por proveedor del 2019</td>';
echo "<td>$porprov2019</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de salidas 2019</td>';
echo "<td></td>";
echo "<td>$totsalidas</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Saldo de proveedores del 2019</td>';
echo "<td></td>";
echo "<td>$saldoprov2019</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo '<br>';
//*********************Termino la Tabla 6. Fin Tabla 6********************/

//*********************Agrego la Tabla 7. Tabla 7 PRESUPUESTO DE MANO DE OBRA DIRECTA********************/
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">7. Presupuesto de Mano de Obra Directa</th>';
echo'</tr>';

echo '<tr>';      
echo '<td></td>';  
echo '<td>1er Semestre</td>';
echo '<td>2do Semestre</td>';  
echo '<td>Total 2019</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Producto 1</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a producir</td>';
echo "<td>$totalesprodu1s</td>";
echo "<td>$totalesprodu2s</td>";
echo "<td>$totalesprodut</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Horas requeridas po unidad</td>';
echo "<td>$hprod1</td>";
echo "<td>$hprod1</td>";
echo "<td>$hprod1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de horas requeridas</td>';
echo "<td>$tothreqp1s1</td>";
echo "<td>$tothreqp1s2</td>";
echo "<td>$tothreqp1st</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cuota por hora</td>';
echo "<td>$cuotaporh1s</td>";
echo "<td>$cuotaporh2s</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Importe de M.O.D</td>';
echo "<td>$impmod1s</td>";
echo "<td>$impmod2s</td>";
echo "<td>$sumimpmod</td>";
echo '</tr>';


echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';


echo '<tr>';
echo '<td>Producto 2</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a producir</td>';
echo "<td>$totalesprod21s</td>";
echo "<td>$totalesprod22s</td>";
echo "<td>$totalesprodu2t</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Horas requeridas po unidad</td>';
echo "<td>$hprod2</td>";
echo "<td>$hprod2</td>";
echo "<td>$hprod2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de horas requeridas</td>';
echo "<td>$tothreqp2s1</td>";
echo "<td>$tothreqp2s2</td>";
echo "<td>$tothreqp2st</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cuota por hora</td>';
echo "<td>$cuotaporh1s</td>";
echo "<td>$cuotaporh2s</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Importe de M.O.D</td>';
echo "<td>$impmod1sp2</td>";
echo "<td>$impmod2sp2</td>";
echo "<td>$sumimpmodp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';


echo '<tr>';
echo '<td>Producto 3</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Unidades a producir</td>';
echo "<td>$totalesprod31s</td>";
echo "<td>$totalesprod32s</td>";
echo "<td>$totalesprodu3t</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Horas requeridas po unidad</td>';
echo "<td>$hprod3</td>";
echo "<td>$hprod3</td>";
echo "<td>$hprod3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de horas requeridas</td>';
echo "<td>$tothreqp3s1</td>";
echo "<td>$tothreqp3s2</td>";
echo "<td>$tothreqp3st</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cuota por hora</td>';
echo "<td>$cuotaporh1s</td>";
echo "<td>$cuotaporh2s</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Importe de M.O.D</td>';
echo "<td>$impmod1sp3</td>";
echo "<td>$impmod2sp3</td>";
echo "<td>$sumimpmodp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '<tr>';
echo '<td>Total de horas requeridas por semestre</td>';
echo "<td>$tothreqpor1s</td>";
echo "<td>$tothreqpor2s</td>";
echo "<td>$tothreqports</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de M.O.D por semestre</td>';
echo "<td>$totimpmodpor1s</td>";
echo "<td>$totimpmodpor2s</td>";
echo "<td>$totimpmodports</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo "<br>";
//*********************Termino la Tabla 7. Fin Tabla 7********************/

//*********************Agrego la Tabla 8. Tabla 8 PRESUPUESTO DE GASTOS INDIRECTOS DE FABRICACION********************/
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">8. Presupuesto de Gastos Indirectos de Fabricacion</th>';
echo'</tr>';

echo '<tr>';      
echo '<td></td>';  
echo '<td>1er Semestre</td>';
echo '<td>2do Semestre</td>';  
echo '<td>Total 2019</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Depreciacion</td>';
echo "<td>$dep1s</td>";
echo "<td>$dep1s</td>";
echo "<td>$sumdep</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Seguros</td>';
echo "<td>$seguro1s</td>";
echo "<td>$seguro1s</td>";
echo "<td>$sumseguro</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Mantenimiento</td>';
echo "<td>$manteni1s</td>";
echo "<td>$manteni2s</td>";
echo "<td>$summante</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Energeticos</td>';
echo "<td>$interporoblig1s</td>";
echo "<td>$interporoblig2s</td>";
echo "<td>$sumener</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Varios</td>';
echo "<td>$variosin1s</td>";
echo "<td>$variosin1s</td>";
echo "<td>$sumvarios</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total G.I.F por semestre</td>';
echo "<td>$totgif1s</td>";
echo "<td>$totgif2s</td>";
echo "<td>$totgifts</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '<tr>';
echo '<td colspan="4">Coeficiente para determinar el costo por hora de Gastos Indirectos de Fabricación</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Total de G.I.F</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$totgifts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(/)Total de horas M.O.D Anual</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$tothreqports</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=)Costo por hora de G.I.F</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$costohgifa</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo "<br>";
//*********************Termino la Tabla 8. Fin Tabla 8********************/

//*********************Agrego la Tabla 9. Tabla 9 PRESUPUESTO DE GASTOS DE OPERACION********************/

echo '<table>';
echo '<tr>';      
echo'<th colspan="4">9. Presupuesto de Gastos de Operacion</th>';
echo'</tr>';

echo '<tr>';      
echo '<td></td>';  
echo '<td>1er Semestre</td>';
echo '<td>2do Semestre</td>';  
echo '<td>Total 2019</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Depreciacion</td>';
echo "<td>$depreciacion1s</td>";
echo "<td>$depreciacion1s</td>";
echo "<td>$sumdepreciacion</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Sueldos y Salarios</td>';
echo "<td>$sueldoysal1s</td>";
echo "<td>$sueldoysal1s</td>";
echo "<td>$sumsueldos</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Comisiones</td>';
echo "<td>$comisiones1s</td>";
echo "<td>$comisiones2s</td>";
echo "<td>$comisioness</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Varios</td>';
echo "<td>$varios1s</td>";
echo "<td>$varios2s</td>";
echo "<td>$totvarios</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Intereses por obligaciones</td>';
echo "<td>$intporob1s</td>";
echo "<td>$intporob1s</td>";
echo "<td>$totintporob</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Gastos de Operacion</td>';
echo "<td>$totgasop1s</td>";
echo "<td>$totgasop2s</td>";
echo "<td>$totgasopts</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo "<br>";
//*********************Termino la Tabla 9. Fin Tabla 9********************/

//*********************Agrego la Tabla 10. Tabla 10 DETERMINACION DE COSTO UNITARIO DE PRODUCTOS TERMINADOS********************/

echo '<table>';
echo '<tr>';      
echo'<th colspan="4">10. Determinacion de costo unitario de productos terminados</th>';
echo'</tr>';

echo '<tr>';      
echo'<td></td>';
echo '<td colspan="3">PRODUCTO 1</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Descripcion</td>';
echo "<td>Costo</td>";
echo "<td>Cantidad</td>";
echo "<td>Costo Unitario</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td>$mAcost2sem</td>";
echo "<td>$mAprod1</td>";
echo "<td>$costounmAp1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material B</td>';
echo "<td>$mBcost2sem</td>";
echo "<td>$mBprod1</td>";
echo "<td>$costounmBp1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material C</td>';
echo "<td>$mCcost2sem</td>";
echo "<td>$mCprod1</td>";
echo "<td>$costounmCp1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Mano de obra</td>';
echo "<td>$cuotaporh2s</td>";
echo "<td>$hprod1</td>";
echo "<td>$costounmanop1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Gastos indirectos de fabricacion</td>';
echo "<td>$costohgifa</td>";
echo "<td>$hprod1</td>";
echo "<td>$costoungastoind</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cosot unitario</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$costounitario</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';


echo '<tr>';      
echo'<td></td>';
echo '<td colspan="3">PRODUCTO 2</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Descripcion</td>';
echo "<td>Costo</td>";
echo "<td>Cantidad</td>";
echo "<td>Costo Unitario</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td>$mAcost2sem</td>";
echo "<td>$mAprod2</td>";
echo "<td>$costounmAp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material B</td>';
echo "<td>$mBcost2sem</td>";
echo "<td>$mBprod2</td>";
echo "<td>$costounmBp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material C</td>';
echo "<td>$mCcost2sem</td>";
echo "<td>$mCprod2</td>";
echo "<td>$costounmCp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Mano de obra</td>';
echo "<td>$cuotaporh2s</td>";
echo "<td>$hprod2</td>";
echo "<td>$costounmanop2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Gastos indirectos de fabricacion</td>';
echo "<td>$costohgifa</td>";
echo "<td>$hprod2</td>";
echo "<td>$costoungastoindp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cosot unitario</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$costounitariop2</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo '</tr>';


echo '<tr>';      
echo'<td></td>';
echo '<td colspan="3">PRODUCTO 3</td>';  
echo '</tr>';

echo '<tr>';
echo '<td>Descripcion</td>';
echo "<td>Costo</td>";
echo "<td>Cantidad</td>";
echo "<td>Costo Unitario</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td>$mAcost2sem</td>";
echo "<td>$mAprod3</td>";
echo "<td>$costounmAp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material B</td>';
echo "<td>$mBcost2sem</td>";
echo "<td>$mBprod3</td>";
echo "<td>$costounmBp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material C</td>';
echo "<td>$mCcost2sem</td>";
echo "<td>$mCprod3</td>";
echo "<td>$costounmCp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Mano de obra</td>';
echo "<td>$cuotaporh2s</td>";
echo "<td>$hprod3</td>";
echo "<td>$costounmanop3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Gastos indirectos de fabricacion</td>';
echo "<td>$costohgifa</td>";
echo "<td>$hprod3</td>";
echo "<td>$costoungastoindp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cosot unitario</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$costounitariop3</td>";
echo '</tr>';

echo '<tr>';
echo '<td colspan="4"></td>';
echo '</tr>';

echo '</table>';
echo "<br>";
//*********************Termino la Tabla 10. Fin Tabla 10********************/

//*********************Agrego la Tabla 11. Tabla 11 VALUACION DE INVENTARIOS FINALES********************/
echo '<table>';
echo '<tr>';      
echo'<th colspan="4">11. Valuacion de Inventarios Finales</th>';
echo'</tr>';

echo '<tr>';   
echo'<td colspan="4", align="center">Inventarios Finales de Materiales</td>';
echo'</tr>';

echo '<tr>';
echo '<td>Descripcion</td>';
echo "<td>Unidades</td>";
echo "<td>Costo Unitario</td>";
echo "<td>Costo Total</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material A</td>';
echo "<td>$mAinvfin2sem</td>";
echo "<td>$mAcost2sem</td>";
echo "<td>$costotmA</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material B</td>';
echo "<td>$mBinvfin2sem</td>";
echo "<td>$mBcost2sem</td>";
echo "<td>$costotmB</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Material C</td>';
echo "<td>$mCinvfin2sem</td>";
echo "<td>$mCcost2sem</td>";
echo "<td>$costotmC</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Inventario Final de Materiales</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$costotinvfin</td>";
echo '</tr>';

echo '<tr>';   
echo'<td colspan="4", align="center">Inventario Final de Producto Terminado</td>';
echo'</tr>';

echo '<tr>';
echo '<td>Descripcion</td>';
echo "<td>Unidades</td>";
echo "<td>Costo Unitario</td>";
echo "<td>Costo Total</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Producto 1</td>';
echo "<td>$p1mAinvfin2sem</td>";
echo "<td>$costounitario</td>";
echo "<td>$costotp1</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Producto 2</td>';
echo "<td>$p2mAinvfin2sem</td>";
echo "<td>$costounitariop2</td>";
echo "<td>$costotp2</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Producto 3</td>';
echo "<td>$p3mAinvfin2sem</td>";
echo "<td>$costounitariop3</td>";
echo "<td>$costotp3</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Inventario Final de Producto Terminado</td>';
echo "<td></td>";
echo "<td></td>";
echo "<td>$costotinvfinprodter</td>";
echo '</tr>';

echo '<tr>';   
echo'<td colspan="4"></td>';
echo'</tr>';

echo '</table>';
echo "<br>";
echo '</center>';
//*********************Termino la Tabla 11. Fin Tabla 11********************/

//*********************Agrego la Tabla 1 del PRESUPUESTO FINANCIERO. Tabla 1********************/

echo '<H1>ll. Presupuesto Financiero</H1>';
echo '<center>';
echo '<table>';

echo '<tr>';      
echo'<th colspan="2">Estado de Costo de Produccion y Ventas</th>';
echo'</tr>';

echo '<tr>';      
echo'<th colspan="2">Presupuesto del 1 de Enero al 31 de Diciembrede del 2019</th>';
echo'</tr>';

echo '<tr>'; 
echo'<td colspan="2"></td>';
echo'</tr>';

echo '<tr>';
echo '<td>Saldo Inicial de Materiales</td>';
echo "<td>$invdemat</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+)Compras de Materiales</td>';
echo "<td>$comptotalests</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=)Material Disponible</td>';
echo "<td>$materialdis</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-)Inventario Final de materiales</td>';
echo "<td>$costotinvfin</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=)Materiales Utilizados</td>';
echo "<td>$materialesuti</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+)Mano de Obra Directa</td>';
echo "<td>$totimpmodports</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+)Gastos de Fabricacion Indirectos</td>';
echo "<td>$totgifts</td>";
echo '</tr>';

echo '<tr>';
echo '<td bgcolor= #ffff00>(=)Costo de Produccion</td>';
echo "<td>$costodepro</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(+)Inventario Inicial de Productos Terminados</td>';
echo "<td>$invdeartterm</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=)Total de Produccion Disponible</td>';
echo "<td>$totproddisp</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-)Inventario final de Productos Terminados</td>';
echo "<td>$costotinvfinprodter</td>";
echo '</tr>';

echo '<tr>';
echo '<td bgcolor= #ffff00>(=)Costo de Ventas</td>';
echo "<td>$costodeven</td>";
echo '</tr>';

echo '<tr>';      
echo'<td colspan="2"></td>';
echo'</tr>';

echo '<br>';
echo '</center>';

//*********************Termino la Tabla 1 del PRESUPUESTO FINANCIERO. Fin Tabla 1********************/

//*********************Agrego la Tabla 2 del PRESUUESTO FIANCIERO. Tabla 2********************/
echo '<table>';

echo '<tr>';      
echo'<th colspan="2">Estado de Resultados</th>';
echo'</tr>';

echo '<tr>';      
echo'<th colspan="2">Presupuesto del 1 de Enero al 31 de Diciembrede del 2019</th>';
echo'</tr>';

echo '<tr>'; 
echo'<td colspan="2"></td>';
echo'</tr>';

echo '<tr>';
echo '<td>Ventas</td>';
echo "<td>$totvenporsem</td>";
echo '</tr>';

echo '<tr>';
echo '<td bgcolor= #ffff00>(-)Costo de Ventas</td>';
echo "<td>$costodeven</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=)Utilidad Bruta</td>';
echo "<td>$utilidadbruta</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-)Gastos de Operacion</td>';
echo "<td>$totgasopts</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=)Utilidad de Operacion</td>';
echo "<td>$utilidadopera</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-)ISR</td>';
echo "<td>$isrt</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(-)PTU</td>';
echo "<td>$ptut</td>";
echo '</tr>';

echo '<tr>';
echo '<td>(=)Utilidad Neta</td>';
echo "<td>$utilidadneta</td>";
echo '</tr>';

echo '<tr>';      
echo'<td colspan="2"></td>';
echo'</tr>';

echo '<br>';
echo '</center>';
//*********************Termino la Tabla 2 del PRESUPUESTO FINANCIERO. Fin Tabla 2********************/

//*********************Agrego la Tabla 3 del PRESUUESTO FIANCIERO. Tabla 3********************/
echo '<table>';

echo '<tr>';      
echo'<th colspan="3">Estado de Flujo de Efectivo</th>';
echo'</tr>';

echo '<tr>';      
echo'<th colspan="3">Presupuesto del 1 de Enero al 31 de Diciembrede del 2019</th>';
echo'</tr>';

echo '<tr>'; 
echo'<td colspan="3"></td>';
echo'</tr>';

echo '<tr>';
echo '<td>Saldo inicial de efectivo</td>';
echo "<td></td>";
echo "<td>$efec</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Entradas:</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cobranza 2019</td>';
echo "<td>$cobranza2019</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Cobranza 2018</td>';
echo "<td>$clien</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Entradas</td>';
echo "<td></td>";
echo "<td>$totentradas</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Efectivo Disponible</td>';
echo "<td></td>";
echo "<td>$efecdisp</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Salidas:</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Proveedores 2019</td>';
echo "<td>$porprov2019</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Proveedores 2018</td>';
echo "<td>$clien</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Pago Mano de Obra Directa</td>';
echo "<td>$totimpmodports</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Pago Gastos Indirectos de Fabriccion</td>';
echo "<td>$pagogasindfab</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Pago de Gastos de Operacion</td>';
echo "<td>$pagogasdeope</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Pago ISR 2018</td>';
echo "<td>$imprenpag</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Compra de activo fijo (Maquinaria)</td>';
echo "<td>$maquinaria</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Pago ISR 2019</td>';
echo "<td>$isrt</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Salidas</td>';
echo "<td></td>";
echo "<td>$totalsalidas</td>";
echo '</tr>';

echo '<tr>';
echo '<td>Flujo de Efectivo Actual</td>';
echo "<td></td>";
echo "<td>$flujefecactual</td>";
echo '</tr>';

echo '<tr>'; 
echo'<td colspan="3"></td>';
echo'</tr>';

//*********************Termino la Tabla 3 del PRESUPUESTO FINANCIERO. Fin Tabla 3********************/

//*********************Agrego la Tabla 4 del PRESUUESTO FIANCIERO. Tabla 4********************/
echo '<table>';

echo '<tr>';      
echo'<th colspan="3">Balance General</th>';
echo'</tr>';

echo '<tr>';      
echo'<th colspan="3">Presupuesto al 31 de Diciembrede del 2019</th>';
echo'</tr>';

echo '<tr>';
echo '<td>ACTIVO</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Circulante</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Efectivo</td>';
echo "<td>$flujefecactual</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Clientes</td>';
echo "<td>$saldoclien</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Inventario de Materiales</td>';
echo "<td>$costotinvfin</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Inventario de Producto Terminado</td>';
echo "<td>$costotinvfinprodter</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Activos Circulantes</td>';
echo "<td></td>";
echo "<td>$totactcir</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>No Circulante</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Terreno</td>';
echo "<td>$terre</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Planta y Equipo</td>';
echo "<td>$planyequinocir</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Depreciacion Acumulada</td>';
echo "<td>$depreciacionacu</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total Activos No Circulantes</td>';
echo "<td></td>";
echo "<td>$totactnocir</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>ACTIVO TOTAL</td>';
echo "<td></td>";
echo "<td>$activotot</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>PASIVO</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Corto Plazo</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Proveedores</td>';
echo "<td>$saldoprov2019</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Documentos por Pagar</td>';
echo "<td>$docpag</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>ISR por Pagar</td>';
echo "<td>--</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>PTU por Pagar</td>';
echo "<td>$ptut</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Pasivos Corto Plazo</td>';
echo "<td></td>";
echo "<td>$totpascortopl</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Largo Plazo</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Obligaciones por Pagar</td>';
echo "<td>$obligpag</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Pasivo Largo Plazo</td>';
echo "<td></td>";
echo "<td>$obligpag</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>PASIVO TOTAL</td>';
echo "<td></td>";
echo "<td>$pasivototal</td>";
echo '</tr>';

echo '<tr>';
echo '<td></td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>CAPITAL CONTABLE</td>';
echo "<td></td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Capital Aportado</td>';
echo "<td>$capiapor</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Capital Ganado</td>';
echo "<td>$capigana</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Utilidd del Ejercicio</td>';
echo "<td>$utilidadneta</td>";
echo "<td></td>";
echo '</tr>';

echo '<tr>';
echo '<td>Total de Capital Contable</td>';
echo "<td></td>";
echo "<td>$totcapcontable</td>";
echo '</tr>';

echo '<tr>';
echo '<td>SUMA DE PASIVO Y CAPITAL</td>';
echo "<td></td>";
echo "<td>$sumpasycap</td>";
echo '</tr>';

echo '<tr>'; 
echo'<td colspan="3"></td>';
echo'</tr>';
?>
