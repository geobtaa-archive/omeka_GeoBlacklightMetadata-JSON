<?php
    $elementSetMetadata = array(
        'name'        => 'GeoBlacklight',
        'description' => "Additional metadata elements for completing GeoBlacklight records",
        'record_type' => 'Item',
    );

    $elements = array(

        array(
            'label' => 'uuid',
            'name'  => 'UUID',
            'description' => 'Unique string generated for item',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'LayerID',
            'name'  => 'Layer ID',
            'description' => 'The complete identifier.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'Slug',
            'name'  => 'Slug',
            'description' => 'Unique identifier visible to the user, used for Permalinks',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'GeomType',
            'name'  => 'Geometry Type',
            'description' => 'Geometry type for layer data.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'LayerModDT',
            'name'  => 'Layer Modified Date',
            'description' => 'Last modification date for the metadata record.',
            'data_type' => 'Tiny Text',
        ),

        array(
            'label' => 'GeoRSSBox',
            'name'  => 'GeoRSS Box',
            'description' => 'This field should be overwritten by the GeoBlacklight plugin installer, since it contains HTML. You should not be seeing this!',
            'comment' => 'This field should be overwritten by the GeoBlacklight plugin installer, since it contains HTML. You should not be seeing this!',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'GeoRSSPoly',
            'name'  => 'GeoRSS Polygon',
            'description' =>'This field should be overwritten by the GeoBlacklight plugin installer, since it contains HTML. You should not be seeing this!',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'GeoRSSPoint',
            'name'  => 'GeoRSS Point',
            'description' =>'Point representation for layer as y, x — i.e., centroid.',
            'comment' => 'If you are depositing a data set, leave this field blank.',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'SolrGeom',
            'name'  => 'Apache Solr Geometry',
            'description' => 'Geometry type for layer data.',
            'comment' => 'Select from the menu below.',
            'data_type'   => 'Tiny Text',
        ),

         array(
            'label' => 'SolrBbox',
            'name'  => 'Apache Solr Bounding Box',
            'description' =>'Bounding box for Solr.',
            'data_type'   => 'Tiny Text',
        ),

         array(
            'label' => 'SolrYear',
            'name'  => 'Apache Solr Year',
            'description' =>'Year for Solr.',
            'comment' => 'This is automatically set to the value entered in Temporal Coverage. If you entered a date range, this will be the first year in that range. If you prefer to use a different date, enter it below to override.',
            'data_type'   => 'Tiny Text',
        ),

/*New elements for links that will be added to References - KM*/

        array(
            'label' => 'Information',
            'name'  => 'Information Page',
            'description' =>'Link to a web page with information about the item',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'Thumbnail',
            'name'  => 'Thumbnail',
            'description' =>'Link to a Thumbnail URL',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label' => 'DownloadFile',
            'name'  => 'Download File',
            'description' =>'Link for a direct file download',
            'data_type'   => 'Tiny Text',
        ),

         array(
            'label' => 'EsriService',
            'name'  => 'Esri Rest Service',
            'description' =>'Link to any Esri Rest Service (Map Server, Image Server, Feature Server, etc.)',
            'data_type'   => 'Tiny Text',
        ),

         array(
            'label' => 'WebMapService',
            'name'  => 'Web Map Service',
            'description' =>'Link to an open source web map service (WMS)',
            'data_type'   => 'Tiny Text',
        ),


    );
