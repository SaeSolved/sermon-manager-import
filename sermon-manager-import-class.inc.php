<?php

class SermonManagerImport {
	/* 
	 * 	 */

	protected $query_string		= '';
	protected $sermon_tables	= array(
										'sm_sermons'		=> array('id', 'title', 'preacher_id', 'datetime', 'service_id', 'series_id', 'start', 'end', 'description', 'time', 'override', 'page_id',),
										'sm_preachers'		=> array('id', 'name', 'image', 'description',),
										'sm_services'		=> array('id', 'name',),
										'sm_series'			=> array('id', 'name', 'page_id',),
										);
	protected $stuff			= 	array(
										'sm_stuff'			=> array('id', 'type', 'name', 'sermon_id', 'count', 'duration',),
										);
	protected $books			= 	array(
										'sm_books'			=> array('id', 'name',),
										);
	protected $books_sermons	= array(
										'sm_books_sermons'	=> array('id', 'book_name', 'chapter', 'verse', 'order', 'type', 'sermon_id', ),
										);
	protected $tags				= array(
										'sm_tags'			=> array('id', 'name',),
										);
	protected $sermons_tags		= array(
										'sm_sermons_tags'	=> array('id', 'sermon_id', 'tag_id', ),
										);
	protected $import_tbl_cols	= array();
										
	
	public function __construct () {
/*		foreach ($this->sermon_tables as $tbl => $cols) {
			foreach ($cols as $col_name) {
				$this->import_tbl_cols[] = "$tbl.$col_name";
			}
		}*/
	}
	
	public function fred () {
		global $wpdb;
		$sql = "SELECT p.`ID`, p.`post_title`, m.`meta_value` FROM `wp_posts` p, `wp_postmeta` m WHERE `post_type` = 'ct_sermon' AND `post_status` = 'publish' AND m.`post_id` = p.`ID` AND m.`meta_key` = '_ct_sm_audio_file'";
		$sermons = $wpdb->get_results($sql);
/*echo '<pre>';
print_r($sermons);
echo '</pre>';
die();*/
	}

}

?>