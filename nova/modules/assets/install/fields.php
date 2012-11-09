<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Database Schema
 *
 * @package		Nova
 * @category	Install
 * @author		Anodyne Productions
 * @copyright	2012 Anodyne Productions
 */

$user_id_type				= 'INT';
$user_id_constraint			= 8;
$character_id_type			= 'INT';
$character_id_constraint	= 8;
$date_type					= 'BIGINT';
$date_constraint			= 20;

/**
 * Master array with name, primary key and name of the array
 * that's used to insert the data into the database
 */
$data = array(
	//'access_groups'				=> array('id' => 'group_id', 'fields' => 'fields_access_groups'),
	//'access_pages'				=> array('id' => 'page_id', 'fields' => 'fields_access_pages'),
	//'access_roles'				=> array('id' => 'role_id', 'fields' => 'fields_access_roles'),
	//'applications'				=> array('id' => 'app_id', 'fields' => 'fields_applications'),
	//'awards'					=> array('id' => 'award_id', 'fields' => 'fields_awards'),
	//'awards_queue'				=> array('id' => 'queue_id', 'fields' => 'fields_awards_queue'),
	//'awards_received'			=> array('id' => 'awardrec_id', 'fields' => 'fields_awards_received'),
	//'bans'						=> array('id' => 'ban_id', 'fields' => 'fields_bans'),
	//'catalogue_ranks'			=> array('id' => 'rankcat_id', 'fields' => 'fields_catalogue_ranks'),
	//'catalogue_skins'			=> array('id' => 'skin_id', 'fields' => 'fields_catalogue_skins'),
	//'catalogue_skinsecs'		=> array('id' => 'skinsec_id', 'fields' => 'fields_catalogue_skinsecs'),
	//'characters'				=> array('id' => 'charid', 'fields' => 'fields_characters'),
	//'characters_data'			=> array('id' => 'data_id', 'fields' => 'fields_characters_data'),
	//'characters_fields'			=> array('id' => 'field_id', 'fields' => 'fields_characters_fields'),
	//'characters_promotions'		=> array('id' => 'prom_id', 'fields' => 'fields_characters_promotions'),
	//'characters_sections'		=> array('id' => 'section_id', 'fields' => 'fields_characters_sections'),
	//'characters_tabs'			=> array('id' => 'tab_id', 'fields' => 'fields_characters_tabs'),
	//'characters_values'			=> array('id' => 'value_id', 'fields' => 'fields_characters_values'),
	//'coc'						=> array('id' => 'coc_id', 'fields' => 'fields_coc'),
	//'departments_'.	GENRE		=> array('id' => 'dept_id', 'fields' => 'fields_departments'),
	//'docking'					=> array('id' => 'docking_id', 'fields' => 'fields_docking'),
	//'docking_data'				=> array('id' => 'data_id', 'fields' => 'fields_docking_data'),
	//'docking_fields'			=> array('id' => 'field_id', 'fields' => 'fields_docking_fields'),
	//'docking_sections'			=> array('id' => 'section_id', 'fields' => 'fields_docking_sections'),
	//'docking_values'			=> array('id' => 'value_id', 'fields' => 'fields_docking_values'),
	//'login_attempts'			=> array('id' => 'login_id', 'fields' => 'fields_login_attempts'),
	//'manifests'					=> array('id' => 'manifest_id', 'fields' => 'fields_manifests'),
	//'menu_categories'			=> array('id' => 'menucat_id', 'fields' => 'fields_menu_categories'),
	//'menu_items'				=> array('id' => 'menu_id', 'fields' => 'fields_menu_items'),
	//'messages'					=> array('id' => 'message_id', 'fields' => 'fields_messages'),
	//'mission_groups'			=> array('id' => 'misgroup_id', 'fields' => 'fields_mission_groups'),
	//'missions'					=> array('id' => 'mission_id', 'fields' => 'fields_missions'),
	//'news'						=> array('id' => 'news_id', 'fields' => 'fields_news'),
	//'news_categories'			=> array('id' => 'newscat_id', 'fields' => 'fields_news_categories'),
	//'news_comments'				=> array('id' => 'ncomment_id', 'fields' => 'fields_news_comments'),
	//'personallogs'				=> array('id' => 'log_id', 'fields' => 'fields_personallogs'),
	//'personallogs_comments'		=> array('id' => 'lcomment_id', 'fields' => 'fields_personallogs_comments'),
	//'positions_'. GENRE			=> array('id' => 'pos_id', 'fields' => 'fields_positions'),
	//'posts'						=> array('id' => 'post_id', 'fields' => 'fields_posts'),
	//'posts_comments'			=> array('id' => 'pcomment_id', 'fields' => 'fields_posts_comments'),
	//'privmsgs'					=> array('id' => 'privmsgs_id', 'fields' => 'fields_privmsgs'),
	//'privmsgs_to'				=> array('id' => 'pmto_id', 'fields' => 'fields_privmsgs_to'),
	//'ranks_'. GENRE				=> array('id' => 'rank_id', 'fields' => 'fields_ranks'),
	//'security_questions'		=> array('id' => 'question_id', 'fields' => 'fields_security_questions'),	
	//'settings'					=> array('id' => 'setting_id', 'fields' => 'fields_settings'),
	//'sessions'					=> array('id' => 'session_id', 'fields' => 'fields_sessions'),
	//'sim_type'					=> array('id' => 'simtype_id', 'fields' => 'fields_sim_type'),
	//'specs'						=> array('id' => 'specs_id', 'fields' => 'fields_specs'),
	//'specs_data'				=> array('id' => 'data_id', 'fields' => 'fields_specs_data'),
	//'specs_fields'				=> array('id' => 'field_id', 'fields' => 'fields_specs_fields'),
	//'specs_sections'			=> array('id' => 'section_id', 'fields' => 'fields_specs_sections'),
	//'specs_values'				=> array('id' => 'value_id', 'fields' => 'fields_specs_values'),
	//'system_info'				=> array('id' => 'sys_id', 'fields' => 'fields_system_info'),
	//'tour'						=> array('id' => 'tour_id', 'fields' => 'fields_tour'),
	//'tour_data'					=> array('id' => 'data_id', 'fields' => 'fields_tour_data'),
	//'tour_fields'				=> array('id' => 'field_id', 'fields' => 'fields_tour_fields'),
	//'tour_values'				=> array('id' => 'value_id', 'fields' => 'fields_tour_values'),
	//'tour_decks'				=> array('id' => 'deck_id', 'fields' => 'fields_tour_decks'),
	//'uploads'					=> array('id' => 'upload_id', 'fields' => 'fields_uploads'),
	//'user_loa'					=> array('id' => 'loa_id', 'fields' => 'fields_user_loa'),
	//'user_prefs'				=> array('id' => 'pref_id', 'fields' => 'fields_user_prefs'),
	//'user_prefs_values'			=> array('id' => 'prefvalue_id', 'fields' => 'fields_user_prefs_values'),
	//'users'						=> array('id' => 'userid', 'fields' => 'fields_users'),
	//'wiki_categories'			=> array('id' => 'wikicat_id', 'fields' => 'fields_wiki_categories'),
	//'wiki_comments'				=> array('id' => 'wcomment_id', 'fields' => 'fields_wiki_comments'),
	//'wiki_drafts'				=> array('id' => 'draft_id', 'fields' => 'fields_wiki_drafts'),
	//'wiki_pages'				=> array('id' => 'page_id', 'fields' => 'fields_wiki_pages'),
	//'wiki_restrictions'			=> array('id' => 'restr_id', 'fields' => 'fields_wiki_restrictions'),
);