<?php
			$optionsArray = array( 'totals' => array( 'asset_name' => array( 'totalsType' => '' ),
'asset_model' => array( 'totalsType' => '' ),
'asset_serial' => array( 'totalsType' => '' ),
'manufactured_date' => array( 'totalsType' => '' ),
'manufacturer' => array( 'totalsType' => '' ),
'category_id' => array( 'totalsType' => '' ),
'suplier_id' => array( 'totalsType' => '' ),
'status_id' => array( 'totalsType' => '' ),
'registration_date' => array( 'totalsType' => '' ),
'purchased_date' => array( 'totalsType' => '' ),
'image' => array( 'totalsType' => '' ),
'taken' => array( 'totalsType' => '' ),
'asset_id' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'asset_name',
'asset_model',
'asset_serial',
'manufactured_date',
'manufacturer',
'category_id',
'suplier_id',
'status_id',
'registration_date',
'purchased_date',
'image',
'taken',
'asset_id' ),
'exportFields' => array( 'asset_name',
'asset_model',
'asset_serial',
'manufactured_date',
'manufacturer',
'category_id',
'suplier_id',
'status_id',
'registration_date',
'purchased_date',
'image',
'taken',
'asset_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'asset_name' => array( 'export_field1' ),
'asset_model' => array( 'export_field2' ),
'asset_serial' => array( 'export_field3' ),
'manufactured_date' => array( 'export_field4' ),
'manufacturer' => array( 'export_field5' ),
'category_id' => array( 'export_field6' ),
'suplier_id' => array( 'export_field7' ),
'status_id' => array( 'export_field8' ),
'registration_date' => array( 'export_field9' ),
'purchased_date' => array( 'export_field10' ),
'image' => array( 'export_field11' ),
'taken' => array( 'export_field12' ),
'asset_id' => array( 'export_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
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
'export_field12' => 'grid',
'export_field' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field' ) ),
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
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field' ),
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
'export_field1' => array( 'field' => 'asset_name',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'asset_model',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'asset_serial',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'manufactured_date',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'manufacturer',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'category_id',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'suplier_id',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'status_id',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'registration_date',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'purchased_date',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'image',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'taken',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'asset_id',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>