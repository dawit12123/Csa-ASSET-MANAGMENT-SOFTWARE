<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'mfe_id',
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
'fieldItems' => array( 'mfe_id' => array( 'import_field' ),
'asset_id' => array( 'import_field1' ),
'model' => array( 'import_field2' ),
'serial' => array( 'import_field3' ),
'quantity' => array( 'import_field4' ),
'unitprice' => array( 'import_field5' ),
'totalprice' => array( 'import_field6' ),
'issued_date' => array( 'import_field7' ),
'ea_id' => array( 'import_field8' ),
'receiver_id' => array( 'import_field9' ),
'request_id' => array( 'import_field10' ),
'receipt_no' => array( 'import_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'mfe_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'asset_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'model',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'serial',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'quantity',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'unitprice',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'totalprice',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'issued_date',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'ea_id',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'receiver_id',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'request_id',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'receipt_no',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>