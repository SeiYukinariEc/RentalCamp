<?php

use Propel\Generator\Manager\MigrationManager;

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1465432116.
 * Generated on 2016-06-09 09:28:36 
 */
class PropelMigration_1465432116
{
    public $comment = '';

    public function preUp(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postUp(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    public function preDown(MigrationManager $manager)
    {
        // add the pre-migration code here
    }

    public function postDown(MigrationManager $manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

CREATE TABLE `sample`
(
    `id` BIGINT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `image` LONGBLOB,
    `image_meta` VARCHAR(32),
    `item_a` VARCHAR(255) NOT NULL,
    `item_b` VARCHAR(255) NOT NULL,
    `a_category_id` INTEGER NOT NULL,
    `sticky_flag` TINYINT(1) NOT NULL,
    `disable_flag` TINYINT(1) NOT NULL,
    `favorite_flag` TINYINT(1) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `sample_archive`
(
    `id` BIGINT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `image` LONGBLOB,
    `image_meta` VARCHAR(32),
    `item_a` VARCHAR(255) NOT NULL,
    `item_b` VARCHAR(255) NOT NULL,
    `a_category_id` INTEGER NOT NULL,
    `sticky_flag` TINYINT(1) NOT NULL,
    `disable_flag` TINYINT(1) NOT NULL,
    `favorite_flag` TINYINT(1) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `archived_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'default' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `sample`;

DROP TABLE IF EXISTS `sample_archive`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}