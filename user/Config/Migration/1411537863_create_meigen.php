<?php
class CreateMeigen extends CakeMigration {

  /**
   * Migration description
   *
   * @var string
   */
  public $description = '';

  /**
   * Actions to be performed
   *
   * @var array $migration
   */
  public $migration = array(
    'up' => array(
      'create_table' => array(
        'meigens' => array(
          'id' => array(
            'type'    =>'integer',
            'null'    => false,
            'default' => null,
            'key'     => 'primary'
          ),
          'text' => array(
            'type'    =>'string',
            'null'    => false,
            'default' => null
          ),
          'author' => array(
            'type'    =>'string',
            'null'    => false,
            'length'  => 100,
            'default' => null
          ),
          'author_id' => array(
            'type'    =>'integer',
            'null'    => false,
            'default' => null
          ),
          'user_id' => array(
            'type'    =>'integer',
            'null'    => false,
            'default' => null
          ),
          'created' => array(
            'type' => 'datetime'
          ),
          'modified' => array(
            'type' => 'datetime'
          ),
          'indexes' => array(
            'PRIMARY' => array(
              'column' => 'id',
              'unique' => 1
            )
          )
        )
      )
    ),
    'down' => array(
    ),
  );

  /**
   * Before migration callback
   *
   * @param string $direction, up or down direction of migration process
   * @return boolean Should process continue
   */
  public function before($direction) {
    return true;
  }

  /**
   * After migration callback
   *
   * @param string $direction, up or down direction of migration process
   * @return boolean Should process continue
   */
  public function after($direction) {
    return true;
  }
}
