<?php
	
	require 'conexion.php';
	
	/* Nombre de La Tabla */
	$Tabla = "vistafecha";
	
	/* Array que contiene los nombres de las columnas de la tabla*/
	$analisisColumnas = array( 'IdAnalisisPastas', 'DATE_FORMAT('Fecha', "%d/%m/%Y")', 'Cuadrante', 'Sitio', 'Patron', 'Utme', 'Utmn', 'Latitud', 'Analizo', 'Bolsa', 'Tipo', 'Tratamiento', 'Modificacion', 'FormasTratamientos', 'Peso', 'TotalFragmentos', 'Observaciones' );
	//sssssssss
	/* columna indexada se toma el id de analisis*/
	$sIndexColumn = "IdAnalisisPastas";
	
	// Paginacion
	$sLimit = "";
	if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
	{
		$sLimit = "LIMIT ".$_GET['iDisplayStart'].", ".$_GET['iDisplayLength'];
	}
	
	
	//Ordenacion se puede ordenar por cualquier valor
	if ( isset( $_GET['iSortCol_0'] ) )
	{
		$sOrder = "ORDER BY  ";
		for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
		{
			if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
			{
				$sOrder .= $analisisColumnas[ intval( $_GET['iSortCol_'.$i] ) ]."
				".$_GET['sSortDir_'.$i] .", ";
			}
		}
		
		$sOrder = substr_replace( $sOrder, "", -2 );
		if ( $sOrder == "ORDER BY" )
		{
			$sOrder = "";
		}
	}
	
	//Filtracion, se puede filtrar por cualquiera
	$sWhere = "";
	if ( $_GET['sSearch'] != "" )
	{
		$sWhere = "WHERE (";
		for ( $i=0 ; $i<count($analisisColumnas) ; $i++ )
		{
			$sWhere .= $analisisColumnas[$i]." LIKE '%".$_GET['sSearch']."%' OR ";
		}
		$sWhere = substr_replace( $sWhere, "", -3 );
		$sWhere .= ')';
	}
	
	// Filtrado de columna individual 
	for ( $i=0 ; $i<count($analisisColumnas) ; $i++ )
	{
		if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
		{
			if ( $sWhere == "" )
			{
				$sWhere = "WHERE ";
			}
			else
			{
				$sWhere .= " AND ";
			}
			$sWhere .= $analisisColumnas[$i]." LIKE '%".$_GET['sSearch_'.$i]."%' ";
		}
	}
	
	
	//Obtener datos para mostrar SQL queries
	$sQuery = "
	SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $analisisColumnas))."
	FROM   $Tabla
	$sWhere
	$sOrder
	$sLimit
	";
	$rResult = $mysqli->query($sQuery);
	
	/* Data set length after filtering */
	$sQuery = "
	SELECT FOUND_ROWS()
	";
	$rResultFilterTotal = $mysqli->query($sQuery);
	$aResultFilterTotal = $rResultFilterTotal->fetch_array();
	$iFilteredTotal = $aResultFilterTotal[0];
	
	/* Total data set length */
	$sQuery = "
	SELECT COUNT(".$sIndexColumn.")
	FROM   $Tabla
	";
	$rResultTotal = $mysqli->query($sQuery);
	$aResultTotal = $rResultTotal->fetch_array();
	$iTotal = $aResultTotal[0];
	
	/*
		* Output
	*/
	$output = array(
	"sEcho" => intval($_GET['sEcho']),
	"iTotalRecords" => $iTotal,
	"iTotalDisplayRecords" => $iFilteredTotal,
	"aaData" => array()
	);
	//se imprimen todos los datos de la tabla de analisis de pastas
	while ( $aRow = $rResult->fetch_array())
	{
		$row = array();
		for ( $i=0 ; $i<count($analisisColumnas) ; $i++ )
		{
			if ( $analisisColumnas[$i] == "version" )
			{
				/* Special output formatting for 'version' column */
				$row[] = ($aRow[ $analisisColumnas[$i] ]=="0") ? '-' : $aRow[ $analisisColumnas[$i] ];
			}
			else if ( $analisisColumnas[$i] != ' ' )
			{
				/* General output */
				$row[] = $aRow[ $analisisColumnas[$i] ];
			}
		}
		//se ponen los botones
		$row[] = "<td><a href='.php?id=".$aRow['IdAnalisisPastas']."'><span class='glyphicon glyphicon-pencil'></span></a></td>";
		$row[] = "<td><a href='#' data-href='.php?id=".$aRow['IdAnalisisPastas']."' data-toggle='modal' data-target='#confirm-delete'><span class='glyphicon glyphicon-trash'></span></a></td>";
		
		$output['aaData'][] = $row;
	}
	
	echo json_encode( $output );
?>