<?php
			$optionsArray = array( 'master' => array( 'employee' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'asset_id',
'model',
'serial',
'quantity',
'unitprice',
'totalprice',
'received_date',
'donor_id',
'receiver_id',
'receipt_no',
'status' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'asset_id' => array( 'integrated_edit_field' ),
'model' => array( 'integrated_edit_field1' ),
'serial' => array( 'integrated_edit_field2' ),
'quantity' => array( 'integrated_edit_field3' ),
'unitprice' => array( 'integrated_edit_field4' ),
'totalprice' => array( 'integrated_edit_field5' ),
'received_date' => array( 'integrated_edit_field6' ),
'donor_id' => array( 'integrated_edit_field7' ),
'receiver_id' => array( 'integrated_edit_field8' ),
'receipt_no' => array( 'integrated_edit_field9' ),
'status' => array( 'integrated_edit_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'edit_header' ),
'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'prev',
'next',
'hamburger' ),
'grid' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field',
'integrated_edit_field9',
'integrated_edit_field10' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'prev' => 'below-grid',
'next' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field10' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10' ),
'next' => array( 'next' ),
'prev' => array( 'prev' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field',
'integrated_edit_field9',
'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'prev',
'next',
'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field',
'integrated_edit_field9',
'integrated_edit_field10' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field' => array( 'field' => 'asset_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'model',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'serial',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'quantity',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 'unitprice',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'totalprice',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'received_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 'donor_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'receiver_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'next' => array( 'type' => 'next' ),
'prev' => array( 'type' => 'prev' ),
'integrated_edit_field9' => array( 'field' => 'receipt_no',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'status',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>