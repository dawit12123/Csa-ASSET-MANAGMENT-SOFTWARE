<?php
			$optionsArray = array( 'totals' => array( 'eaempassets' => array( 'totalsType' => '' ),
'asset_id' => array( 'totalsType' => '' ),
'employee_id' => array( 'totalsType' => '' ),
'ea_id' => array( 'totalsType' => '' ),
'issued_date' => array( 'totalsType' => '' ),
'returned_date' => array( 'totalsType' => '' ),
'transfer_date' => array( 'totalsType' => '' ),
'transaction' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'employee_id',
'ea_id',
'issued_date',
'returned_date',
'transfer_date',
'asset_id',
'transaction' ),
'exportFields' => array( 'employee_id',
'ea_id',
'issued_date',
'returned_date',
'transfer_date',
'asset_id',
'transaction' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'employee_id' => array( 'export_field2' ),
'ea_id' => array( 'export_field3' ),
'issued_date' => array( 'export_field4' ),
'returned_date' => array( 'export_field5' ),
'transfer_date' => array( 'export_field6' ),
'asset_id' => array( 'export_field' ),
'transaction' => array( 'export_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field',
'export_field1' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field',
'export_field1' ) ),
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
'items' => array( 'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field',
'export_field1' ),
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
'export_field2' => array( 'field' => 'employee_id',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'ea_id',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'issued_date',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'returned_date',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'transfer_date',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'asset_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'transaction',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>