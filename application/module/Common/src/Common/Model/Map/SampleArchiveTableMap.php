<?php

namespace Common\Model\Map;

use Common\Model\SampleArchive;
use Common\Model\SampleArchiveQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'sample_archive' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class SampleArchiveTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Common.Model.Map.SampleArchiveTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'sample_archive';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\Common\\Model\\SampleArchive';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'Common.Model.SampleArchive';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 13;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 13;

    /**
     * the column name for the id field
     */
    const COL_ID = 'sample_archive.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'sample_archive.name';

    /**
     * the column name for the image field
     */
    const COL_IMAGE = 'sample_archive.image';

    /**
     * the column name for the image_meta field
     */
    const COL_IMAGE_META = 'sample_archive.image_meta';

    /**
     * the column name for the item_a field
     */
    const COL_ITEM_A = 'sample_archive.item_a';

    /**
     * the column name for the item_b field
     */
    const COL_ITEM_B = 'sample_archive.item_b';

    /**
     * the column name for the a_category_id field
     */
    const COL_A_CATEGORY_ID = 'sample_archive.a_category_id';

    /**
     * the column name for the sticky_flag field
     */
    const COL_STICKY_FLAG = 'sample_archive.sticky_flag';

    /**
     * the column name for the disable_flag field
     */
    const COL_DISABLE_FLAG = 'sample_archive.disable_flag';

    /**
     * the column name for the favorite_flag field
     */
    const COL_FAVORITE_FLAG = 'sample_archive.favorite_flag';

    /**
     * the column name for the created_at field
     */
    const COL_CREATED_AT = 'sample_archive.created_at';

    /**
     * the column name for the updated_at field
     */
    const COL_UPDATED_AT = 'sample_archive.updated_at';

    /**
     * the column name for the archived_at field
     */
    const COL_ARCHIVED_AT = 'sample_archive.archived_at';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Name', 'Image', 'ImageMeta', 'ItemA', 'ItemB', 'ACategoryId', 'StickyFlag', 'DisableFlag', 'FavoriteFlag', 'CreatedAt', 'UpdatedAt', 'ArchivedAt', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'image', 'imageMeta', 'itemA', 'itemB', 'aCategoryId', 'stickyFlag', 'disableFlag', 'favoriteFlag', 'createdAt', 'updatedAt', 'archivedAt', ),
        self::TYPE_COLNAME       => array(SampleArchiveTableMap::COL_ID, SampleArchiveTableMap::COL_NAME, SampleArchiveTableMap::COL_IMAGE, SampleArchiveTableMap::COL_IMAGE_META, SampleArchiveTableMap::COL_ITEM_A, SampleArchiveTableMap::COL_ITEM_B, SampleArchiveTableMap::COL_A_CATEGORY_ID, SampleArchiveTableMap::COL_STICKY_FLAG, SampleArchiveTableMap::COL_DISABLE_FLAG, SampleArchiveTableMap::COL_FAVORITE_FLAG, SampleArchiveTableMap::COL_CREATED_AT, SampleArchiveTableMap::COL_UPDATED_AT, SampleArchiveTableMap::COL_ARCHIVED_AT, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'image', 'image_meta', 'item_a', 'item_b', 'a_category_id', 'sticky_flag', 'disable_flag', 'favorite_flag', 'created_at', 'updated_at', 'archived_at', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'Image' => 2, 'ImageMeta' => 3, 'ItemA' => 4, 'ItemB' => 5, 'ACategoryId' => 6, 'StickyFlag' => 7, 'DisableFlag' => 8, 'FavoriteFlag' => 9, 'CreatedAt' => 10, 'UpdatedAt' => 11, 'ArchivedAt' => 12, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'image' => 2, 'imageMeta' => 3, 'itemA' => 4, 'itemB' => 5, 'aCategoryId' => 6, 'stickyFlag' => 7, 'disableFlag' => 8, 'favoriteFlag' => 9, 'createdAt' => 10, 'updatedAt' => 11, 'archivedAt' => 12, ),
        self::TYPE_COLNAME       => array(SampleArchiveTableMap::COL_ID => 0, SampleArchiveTableMap::COL_NAME => 1, SampleArchiveTableMap::COL_IMAGE => 2, SampleArchiveTableMap::COL_IMAGE_META => 3, SampleArchiveTableMap::COL_ITEM_A => 4, SampleArchiveTableMap::COL_ITEM_B => 5, SampleArchiveTableMap::COL_A_CATEGORY_ID => 6, SampleArchiveTableMap::COL_STICKY_FLAG => 7, SampleArchiveTableMap::COL_DISABLE_FLAG => 8, SampleArchiveTableMap::COL_FAVORITE_FLAG => 9, SampleArchiveTableMap::COL_CREATED_AT => 10, SampleArchiveTableMap::COL_UPDATED_AT => 11, SampleArchiveTableMap::COL_ARCHIVED_AT => 12, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'image' => 2, 'image_meta' => 3, 'item_a' => 4, 'item_b' => 5, 'a_category_id' => 6, 'sticky_flag' => 7, 'disable_flag' => 8, 'favorite_flag' => 9, 'created_at' => 10, 'updated_at' => 11, 'archived_at' => 12, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('sample_archive');
        $this->setPhpName('SampleArchive');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Common\\Model\\SampleArchive');
        $this->setPackage('Common.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('image', 'Image', 'LONGVARBINARY', false, null, null);
        $this->addColumn('image_meta', 'ImageMeta', 'VARCHAR', false, 32, null);
        $this->addColumn('item_a', 'ItemA', 'VARCHAR', true, 255, null);
        $this->addColumn('item_b', 'ItemB', 'VARCHAR', true, 255, null);
        $this->addColumn('a_category_id', 'ACategoryId', 'INTEGER', true, null, null);
        $this->addColumn('sticky_flag', 'StickyFlag', 'BOOLEAN', true, 1, null);
        $this->addColumn('disable_flag', 'DisableFlag', 'BOOLEAN', true, 1, null);
        $this->addColumn('favorite_flag', 'FavoriteFlag', 'BOOLEAN', true, 1, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('archived_at', 'ArchivedAt', 'TIMESTAMP', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? SampleArchiveTableMap::CLASS_DEFAULT : SampleArchiveTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (SampleArchive object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = SampleArchiveTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SampleArchiveTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SampleArchiveTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SampleArchiveTableMap::OM_CLASS;
            /** @var SampleArchive $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SampleArchiveTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SampleArchiveTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SampleArchiveTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SampleArchive $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SampleArchiveTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_ID);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_NAME);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_IMAGE);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_IMAGE_META);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_ITEM_A);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_ITEM_B);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_A_CATEGORY_ID);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_STICKY_FLAG);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_DISABLE_FLAG);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_FAVORITE_FLAG);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_UPDATED_AT);
            $criteria->addSelectColumn(SampleArchiveTableMap::COL_ARCHIVED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.image');
            $criteria->addSelectColumn($alias . '.image_meta');
            $criteria->addSelectColumn($alias . '.item_a');
            $criteria->addSelectColumn($alias . '.item_b');
            $criteria->addSelectColumn($alias . '.a_category_id');
            $criteria->addSelectColumn($alias . '.sticky_flag');
            $criteria->addSelectColumn($alias . '.disable_flag');
            $criteria->addSelectColumn($alias . '.favorite_flag');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.archived_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(SampleArchiveTableMap::DATABASE_NAME)->getTable(SampleArchiveTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(SampleArchiveTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(SampleArchiveTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new SampleArchiveTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a SampleArchive or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or SampleArchive object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SampleArchiveTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Common\Model\SampleArchive) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SampleArchiveTableMap::DATABASE_NAME);
            $criteria->add(SampleArchiveTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = SampleArchiveQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SampleArchiveTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SampleArchiveTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the sample_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return SampleArchiveQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SampleArchive or Criteria object.
     *
     * @param mixed               $criteria Criteria or SampleArchive object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SampleArchiveTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SampleArchive object
        }


        // Set the correct dbName
        $query = SampleArchiveQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // SampleArchiveTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
SampleArchiveTableMap::buildTableMap();
