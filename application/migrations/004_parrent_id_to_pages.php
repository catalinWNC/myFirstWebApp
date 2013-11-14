<?php 
class Migration_Parrent_Id_To_Pages extends CI_Migration {

	public function up()
	{
		$fields = (array(
			'parent_id' => array(
					'type' => 'INT',
					'constraint' => 11,
					'unsigned' => TRUE,
					'default' => 0
				)
		));
		$this->dbforge->add_column('pages', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('pages', $fields);
	}
}