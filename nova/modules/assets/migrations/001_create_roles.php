<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_roles extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'group_id' => array(
				'type' => 'INT',
				'constraint' => 6,
				'auto_increment' => TRUE),
			'group_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'group_order' => array(
				'type' => 'INT',
				'constraint' => 4,
				'default' => '99')
		));
		$this->dbforge->add_key('group_id', true);
		$this->dbforge->create_table('access_groups');

		$data = array(
			array(
				'group_name' => 'General Admin',
				'group_order' => 0),
			array(
				'group_name' => 'Writing Features',
				'group_order' => 1),
			array(
				'group_name' => 'Site Management',
				'group_order' => 2),
			array(
				'group_name' => 'Data Management',
				'group_order' => 3),
			array(
				'group_name' => 'Reports',
				'group_order' => 4),
			array(
				'group_name' => 'Characters',
				'group_order' => 5),
			array(
				'group_name' => 'Users',
				'group_order' => 6),
			array(
				'group_name' => 'Wiki',
				'group_order' => 7),
		);

		foreach ($data as $d)
		{
			$this->db->insert('access_groups', $d);
		}

		$this->dbforge->add_field(array(
			'page_id' => array(
				'type' => 'INT',
				'constraint' => 6,
				'auto_increment' => TRUE),
			'page_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'page_url' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'page_level' => array(
				'type' => 'VARCHAR',
				'constraint' => 3,
				'default' => ''),
			'page_group' => array(
				'type' => 'INT',
				'constraint' => 6,
				'default' => '0'),
			'page_desc' => array(
				'type' => 'TEXT'),
		));
		$this->dbforge->add_key('page_id', true);
		$this->dbforge->create_table('access_pages');

		$data = array(
			array(
				'page_name' => "Admin Control Panel",
				'page_url' => 'admin/index',
				'page_group' => 1,
				'page_desc' => "Can access the admin control panel with recent posts, stats and other information"),
			array(
				'page_name' => "Upload Images",
				'page_url' => 'upload/index',
				'page_group' => 1,
				'page_desc' => "Can upload images to the server"),
			array(
				'page_name' => "Manage Uploads",
				'page_url' => 'upload/manage',
				'page_group' => 1,
				'page_desc' => "Can delete upload records"),
				
			array(
				'page_name' => "Private Messages",
				'page_url' => 'messages/index',
				'page_group' => 2,
				'page_desc' => "Can send and receive private messages"),
			array(
				'page_name' => "Writing Control Panel",
				'page_url' => 'write/index',
				'page_group' => 2,
				'page_desc' => "Can access the writing control panel with saved entries and recent posts"),
			array(
				'page_name' => "Write Mission Post",
				'page_url' => 'write/missionpost',
				'page_group' => 2,
				'page_desc' => "Can post a mission entry to the system"),
			array(
				'page_name' => "Write Personal Log",
				'page_url' => 'write/personallog',
				'page_group' => 2,
				'page_desc' => "Can post a personal log to the system"),
			array(
				'page_name' => "Write News Item",
				'page_url' => 'write/newsitem',
				'page_group' => 2,
				'page_desc' => "Can post a news items to the system"),
				
			array(
				'page_name' => "Site Settings",
				'page_url' => 'site/settings',
				'page_group' => 3,
				'page_desc' => "Can add, delete or edit any of the system settings"),
			array(
				'page_name' => "Site Messages",
				'page_url' => 'site/messages',
				'page_group' => 3,
				'page_desc' => "Can add, delete or edit any of the site messages for the system"),
			array(
				'page_name' => "Role Access",
				'page_url' => 'site/roles',
				'page_group' => 3,
				'page_desc' => "Can add, delete or edit access roles including access page sections and access pages"),
			array(
				'page_name' => "Bio/Join Form",
				'page_url' => 'site/bioform',
				'page_group' => 3,
				'page_desc' => "Can add to, edit or remove from the dynamic bio form including bio tabs and bio sections"),
			array(
				'page_name' => "Specs Form",
				'page_url' => 'site/specsform',
				'page_group' => 3,
				'page_desc' => "Can add to, edit or remove from the dynamic specifications form including specs sections"),
			array(
				'page_name' => "Tour Form",
				'page_url' => 'site/tourform',
				'page_group' => 3,
				'page_desc' => "Can add to, edit or remove from the dynamic tour form"),
			array(
				'page_name' => "Docking Form",
				'page_url' => 'site/dockingform',
				'page_group' => 3,
				'page_desc' => "Can add to, edit or remove from the dynamic docking form"),
			array(
				'page_name' => "Menus",
				'page_url' => 'site/menus',
				'page_group' => 3,
				'page_desc' => "Can add, delete and edit system menus"),
			array(
				'page_name' => "System Catalogue - Ranks",
				'page_url' => 'site/catalogueranks',
				'page_group' => 3,
				'page_desc' => "Can add, delete and edit system ranks"),
			array(
				'page_name' => "System Catalogue - Skins",
				'page_url' => 'site/catalogueskins',
				'page_group' => 3,
				'page_desc' => "Can add, delete and edit system skins"),
			array(
				'page_name' => "Manage Sim Types",
				'page_url' => 'site/simtypes',
				'page_group' => 3,
				'page_desc' => "Can add, delete and edit the different sim types"),
				
			array(
				'page_name' => "Specs",
				'page_url' => 'manage/specs',
				'page_group' => 4,
				'page_desc' => "Can update the specifications"),
			array(
				'page_name' => "Deck Listing",
				'page_url' => 'manage/decks',
				'page_group' => 4,
				'page_desc' => "Can add to, edit or remove from the deck listing"),
			array(
				'page_name' => "Manage Comments",
				'page_url' => 'manage/comments',
				'page_group' => 4,
				'page_desc' => "Can approve, delete and edit any comments"),
			array(
				'page_name' => "Manage Positions",
				'page_url' => 'manage/positions',
				'page_group' => 4,
				'page_desc' => "Can add, delete and edit positions"),
			array(
				'page_name' => "Manage Departments",
				'page_url' => 'manage/depts',
				'page_group' => 4,
				'page_desc' => "Can add, delete and edit departments"),
			array(
				'page_name' => "Manage Ranks",
				'page_url' => 'manage/ranks',
				'page_group' => 4,
				'page_desc' => "Can add, delete and edit ranks"),
			array(
				'page_name' => "Manage Awards",
				'page_url' => 'manage/awards',
				'page_group' => 4,
				'page_desc' => "Can add, delete and edit awards"),
			array(
				'page_name' => "Manage Tour Items",
				'page_url' => 'manage/tour',
				'page_group' => 4,
				'page_desc' => "Can add, delete and edit tour items"),
			array(
				'page_name' => "Manage Docked Items",
				'page_url' => 'manage/docked',
				'page_group' => 4,
				'page_desc' => "Can add, approve, delete, edit and reject docked items"),
			array(
				'page_name' => "Manage Missions",
				'page_url' => 'manage/missions',
				'page_group' => 4,
				'page_desc' => "Can add, delete and edit missions"),
			array(
				'page_name' => "Manage Mission Posts (Level 1)",
				'page_url' => 'manage/posts',
				'page_level' => 1,
				'page_group' => 4,
				'page_desc' => "Can delete and edit any of their own mission posts"),
			array(
				'page_name' => "Manage Mission Posts (Level 2)",
				'page_url' => 'manage/posts',
				'page_level' => 2,
				'page_group' => 4,
				'page_desc' => "Can delete and edit all mission posts in the system"),
			array(
				'page_name' => "Manage Personal Logs (Level 1)",
				'page_url' => 'manage/logs',
				'page_level' => 1,
				'page_group' => 4,
				'page_desc' => "Can delete and edit any of their own personal logs"),
			array(
				'page_name' => "Manage Personal Logs (Level 2)",
				'page_url' => 'manage/logs',
				'page_level' => 2,
				'page_group' => 4,
				'page_desc' => "Can delete and edit all personal logs in the system"),
			array(
				'page_name' => "Manage News Items (Level 1)",
				'page_url' => 'manage/news',
				'page_level' => 1,
				'page_group' => 4,
				'page_desc' => "Can delete and edit any of their own news items"),
			array(
				'page_name' => "Manage News Items (Level 2)",
				'page_url' => 'manage/news',
				'page_level' => 2,
				'page_group' => 4,
				'page_desc' => "Can delete and edit all news items in the system"),
			array(
				'page_name' => "Manage News Categories",
				'page_url' => 'manage/newscats',
				'page_group' => 4,
				'page_desc' => "Can manage all news categories available for news items"),
				
			array(
				'page_name' => "LOA Report",
				'page_url' => 'report/loa',
				'page_group' => 5,
				'page_desc' => "Can view a report on LOAs taken over the life of the system"),
			array(
				'page_name' => "System &amp; Versions",
				'page_url' => 'report/versions',
				'page_group' => 5,
				'page_desc' => "Can view a report on system information and all previous versions of the system"),
			array(
				'page_name' => "Crew Activity",
				'page_url' => 'report/activity',
				'page_group' => 5,
				'page_desc' => "Can view a report on active crew's activity levels"),
			array(
				'page_name' => "Posting Levels",
				'page_url' => 'report/posting',
				'page_group' => 5,
				'page_desc' => "Can view a report on posting levels for all playing characters"),
			array(
				'page_name' => "Moderation",
				'page_url' => 'report/moderation',
				'page_group' => 5,
				'page_desc' => "Can view a report on the moderation status of users"),
			array(
				'page_name' => "Milestones",
				'page_url' => 'report/milestones',
				'page_group' => 5,
				'page_desc' => "Can view a report on the milestones of users"),
			array(
				'page_name' => "Award Nominations",
				'page_url' => 'report/awardnominations',
				'page_group' => 5,
				'page_desc' => "Can view a report on all award nominations"),
			array(
				'page_name' => "Applications",
				'page_url' => 'report/applications',
				'page_group' => 5,
				'page_desc' => "Can view a report on all applications submitted through the system"),
			array(
				'page_name' => "Sim Statistics",
				'page_url' => 'report/stats',
				'page_group' => 5,
				'page_desc' => "Can view a report on sim statistics for the current and previous months"),
				
			array(
				'page_name' => "Character Management",
				'page_url' => 'characters/index',
				'page_group' => 6,
				'page_desc' => "Can manage all playing characters including accepting and rejecting applicants"),
			array(
				'page_name' => "NPC Management (Level 1)",
				'page_url' => 'characters/npcs',
				'page_level' => 1,
				'page_group' => 6,
				'page_desc' => "Can manage any non-playing characters in their primary department (first position only)"),
			array(
				'page_name' => "NPC Management (Level 2)",
				'page_url' => 'characters/npcs',
				'page_level' => 2,
				'page_group' => 6,
				'page_desc' => "Can manage any non-playing characters in any of their departments (first and second positions)"),
			array(
				'page_name' => "NPC Management (Level 3)",
				'page_url' => 'characters/npcs',
				'page_level' => 3,
				'page_group' => 6,
				'page_desc' => "Can manage all non-playing characters in the system"),
			array(
				'page_name' => "Chain of Command",
				'page_url' => 'characters/coc',
				'page_group' => 6,
				'page_desc' => "Can add, delete and edit the chain of command"),
			array(
				'page_name' => "Character Bio (Level 1)",
				'page_url' => 'characters/bio',
				'page_level' => 1,
				'page_group' => 6,
				'page_desc' => "Can edit the bio of any of their own characters"),
			array(
				'page_name' => "Character Bio (Level 2)",
				'page_url' => 'characters/bio',
				'page_level' => 2,
				'page_group' => 6,
				'page_desc' => "Can edit the bio of any of their characters as well as any NPC in the system"),
			array(
				'page_name' => "Character Bio (Level 3)",
				'page_url' => 'characters/bio',
				'page_level' => 3,
				'page_group' => 6,
				'page_desc' => "Can edit any character in the system, including rank and position"),
			array(
				'page_name' => "Create Character (Level 1)",
				'page_url' => 'characters/create',
				'page_level' => 1,
				'page_group' => 6,
				'page_desc' => "Can create playing and non-playing characters but playing characters require approval"),
			array(
				'page_name' => "Create Character (Level 2)",
				'page_url' => 'characters/create',
				'page_level' => 2,
				'page_group' => 6,
				'page_desc' => "Can create playing and non-playing characters without any approval"),
			array(
				'page_name' => "Give/Remove Award",
				'page_url' => 'characters/awards',
				'page_group' => 6,
				'page_desc' => "Can give/remove awards to/from any character in the system"),
			
			array(
				'page_name' => "User Account (Level 1)",
				'page_url' => 'user/account',
				'page_group' => 7,
				'page_level' => 1,
				'page_desc' => "Can update their own account settings"),
			array(
				'page_name' => "User Account (Level 2)",
				'page_url' => 'user/account',
				'page_group' => 7,
				'page_level' => 2,
				'page_desc' => "Can update any account in the system including moderation flags and admin items"),
			array(
				'page_name' => "Crew Award Nominations (Level 1)",
				'page_url' => 'user/nominate',
				'page_group' => 7,
				'page_level' => 1,
				'page_desc' => "Can nominate playing and non-playing characters for awards"),
			array(
				'page_name' => "Crew Award Nominations (Level 2)",
				'page_url' => 'user/nominate',
				'page_group' => 7,
				'page_level' => 2,
				'page_desc' => "Can nominate playing and non-playing characters for awards as well as approving/rejecting pending award nominations"),
				
			array(
				'page_name' => "Wiki Pages (Level 1)",
				'page_url' => 'wiki/page',
				'page_group' => 8,
				'page_level' => 1,
				'page_desc' => "Can create wiki pages and edit any pages they have created, including viewing history and reverting to previous drafts"),
			array(
				'page_name' => "Wiki Pages (Level 2)",
				'page_url' => 'wiki/page',
				'page_group' => 8,
				'page_level' => 2,
				'page_desc' => "Can create wiki pages and edit all pages, including viewing history and reverting to previous drafts"),
			array(
				'page_name' => "Wiki Pages (Level 3)",
				'page_url' => 'wiki/page',
				'page_group' => 8,
				'page_level' => 3,
				'page_desc' => "Can create, delete and edit all wiki pages (including system pages), including viewing history and reverting to previous drafts. Level 3 permissions can bypass all access restrictions on a wiki page."),
			array(
				'page_name' => "Wiki Categories",
				'page_url' => 'wiki/categories',
				'page_group' => 8,
				'page_desc' => "Can create, delete and edit wiki categories"),
				
			array(
				'page_name' => "Ban Controls",
				'page_url' => 'site/bans',
				'page_group' => 3,
				'page_desc' => "Can add or remove site bans"),
			array(
				'page_name' => "Site Manifests",
				'page_url' => 'site/manifests',
				'page_group' => 3,
				'page_desc' => "Can create, delete and edit site manifests"),
		);

		foreach ($data as $d)
		{
			$this->db->insert('access_pages', $d);
		}

		$this->dbforge->add_field(array(
			'role_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'auto_increment' => TRUE),
			'role_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'default' => ''),
			'role_access' => array(
				'type' => 'TEXT'),
			'role_desc' => array(
				'type' => 'TEXT'),
		));
		$this->dbforge->add_key('role_id', true);
		$this->dbforge->create_table('access_roles');

		$data = array(
			array(
				'role_name' => 'System Administrator',
				'role_access' => '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,31,33,35,36,37,38,39,40,41,42,43,44,45,46,49,50,53,55,56,58,60,63,64,65,66',
				'role_desc' => 'System administrators can take any action in the system. Only give this access level out to people you implicitly trust.'),
			array(
				'role_name' => 'Basic Administrator',
				'role_access' => '1,2,3,4,5,6,7,8,20,21,22,27,31,33,35,37,39,40,41,42,43,44,45,46,49,53,54,58,59,63,64',
				'role_desc' => 'Basic administrators have power to do some of the tasks system administrators do, but with more restrictions. This role is intended to be used for senior players on the RPG.'),
			array(
				'role_name' => 'Power User',
				'role_access' => '1,2,4,5,6,7,8,30,32,34,39,40,42,45,48,52,54,57,59,62',
				'role_desc' => 'Power users are users that can take more action than a standard user. This role is intended to be used for senior players on the RPG (department heads for example).'),
			array(
				'role_name' => 'Standard User',
				'role_access' => '1,2,4,5,6,7,8,30,32,34,39,40,42,45,51,54,57,59,61',
				'role_desc' => 'Standard users are generally the majority of players. This role gives them access to all the pieces they will need to play the game and use the system.'),
			array(
				'role_name' => 'Inactive User',
				'role_access' => '1,4,45,51,54,57',
				'role_desc' => 'Inactive players are players that have left the RPG. Instead of being completely locked out, the player can log in and take some very limited actions.')
		);

		foreach ($data as $d)
		{
			$this->db->insert('access_roles', $d);
		}
	}

	public function down()
	{
		$this->dbforge->drop_table('access_groups');
		$this->dbforge->drop_table('access_pages');
		$this->dbforge->drop_table('access_roles');
	}
}
