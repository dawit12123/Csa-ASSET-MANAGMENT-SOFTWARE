<?php
			$optionsArray = array( 'totals' => array( 'mfe_id' => array( 'totalsType' => '' ),
'asset_id' => array( 'totalsType' => '' ),
'model' => array( 'totalsType' => '' ),
'serial' => array( 'totalsType' => '' ),
'quantity' => array( 'totalsType' => '' ),
'unitprice' => array( 'totalsType' => '' ),
'totalprice' => array( 'totalsType' => '' ),
'issued_date' => array( 'totalsType' => '' ),
'ea_id' => array( 'totalsType' => '' ),
'receiver_id' => array( 'totalsType' => '' ),
'receipt_no' => array( 'totalsType' => '' ),
'request_id' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'mfe_id',
'asset_id',
'model',
'serial',
'quantity',
'unitprice',
'totalprice',
'issued_date',
'ea_id',
'receiver_id',
'request_id',
'receipt_no' ),
'exportFields' => array( 'mfe_id',
'asset_id',
'model',
'serial',
'quantity',
'unitprice',
'totalprice',
'issued_date',
'ea_id',
'receiver_id',
'request_id',
'receipt_no' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'mfe_id' => array( 'export_field' ),
'asset_id' => array( 'export_field1' ),
'model' => array( 'export_field2' ),
'serial' => array( 'export_field3' ),
'quantity' => array( 'export_field4' ),
'unitprice' => array( 'export_field5' ),
'totalprice' => array( 'export_field6' ),
'issued_date' => array( 'export_field7' ),
'ea_id' => array( 'export_field8' ),
'receiver_id' => array( 'export_field9' ),
'request_id' => array( 'export_field10' ),
'receipt_no' => array( 'export_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'mfe_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'asset_id',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'model',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'serial',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'quantity',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'unitprice',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'totalprice',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'issued_date',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'ea_id',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'receiver_id',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'request_id',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'receipt_no',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>