<?php

namespace Common\Model\Base;

use \Exception;
use \PDO;
use Common\Model\SampleArchive as ChildSampleArchive;
use Common\Model\SampleArchiveQuery as ChildSampleArchiveQuery;
use Common\Model\Map\SampleArchiveTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'sample_archive' table.
 *
 *
 *
 * @method     ChildSampleArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildSampleArchiveQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSampleArchiveQuery orderByImage($order = Criteria::ASC) Order by the image column
 * @method     ChildSampleArchiveQuery orderByImageMeta($order = Criteria::ASC) Order by the image_meta column
 * @method     ChildSampleArchiveQuery orderByItemA($order = Criteria::ASC) Order by the item_a column
 * @method     ChildSampleArchiveQuery orderByItemB($order = Criteria::ASC) Order by the item_b column
 * @method     ChildSampleArchiveQuery orderByACategoryId($order = Criteria::ASC) Order by the a_category_id column
 * @method     ChildSampleArchiveQuery orderByStickyFlag($order = Criteria::ASC) Order by the sticky_flag column
 * @method     ChildSampleArchiveQuery orderByDisableFlag($order = Criteria::ASC) Order by the disable_flag column
 * @method     ChildSampleArchiveQuery orderByFavoriteFlag($order = Criteria::ASC) Order by the favorite_flag column
 * @method     ChildSampleArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSampleArchiveQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     ChildSampleArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     ChildSampleArchiveQuery groupById() Group by the id column
 * @method     ChildSampleArchiveQuery groupByName() Group by the name column
 * @method     ChildSampleArchiveQuery groupByImage() Group by the image column
 * @method     ChildSampleArchiveQuery groupByImageMeta() Group by the image_meta column
 * @method     ChildSampleArchiveQuery groupByItemA() Group by the item_a column
 * @method     ChildSampleArchiveQuery groupByItemB() Group by the item_b column
 * @method     ChildSampleArchiveQuery groupByACategoryId() Group by the a_category_id column
 * @method     ChildSampleArchiveQuery groupByStickyFlag() Group by the sticky_flag column
 * @method     ChildSampleArchiveQuery groupByDisableFlag() Group by the disable_flag column
 * @method     ChildSampleArchiveQuery groupByFavoriteFlag() Group by the favorite_flag column
 * @method     ChildSampleArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSampleArchiveQuery groupByUpdatedAt() Group by the updated_at column
 * @method     ChildSampleArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     ChildSampleArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSampleArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSampleArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSampleArchiveQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSampleArchiveQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSampleArchiveQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSampleArchive findOne(ConnectionInterface $con = null) Return the first ChildSampleArchive matching the query
 * @method     ChildSampleArchive findOneOrCreate(ConnectionInterface $con = null) Return the first ChildSampleArchive matching the query, or a new ChildSampleArchive object populated from the query conditions when no match is found
 *
 * @method     ChildSampleArchive findOneById(string $id) Return the first ChildSampleArchive filtered by the id column
 * @method     ChildSampleArchive findOneByName(string $name) Return the first ChildSampleArchive filtered by the name column
 * @method     ChildSampleArchive findOneByImage(string $image) Return the first ChildSampleArchive filtered by the image column
 * @method     ChildSampleArchive findOneByImageMeta(string $image_meta) Return the first ChildSampleArchive filtered by the image_meta column
 * @method     ChildSampleArchive findOneByItemA(string $item_a) Return the first ChildSampleArchive filtered by the item_a column
 * @method     ChildSampleArchive findOneByItemB(string $item_b) Return the first ChildSampleArchive filtered by the item_b column
 * @method     ChildSampleArchive findOneByACategoryId(int $a_category_id) Return the first ChildSampleArchive filtered by the a_category_id column
 * @method     ChildSampleArchive findOneByStickyFlag(boolean $sticky_flag) Return the first ChildSampleArchive filtered by the sticky_flag column
 * @method     ChildSampleArchive findOneByDisableFlag(boolean $disable_flag) Return the first ChildSampleArchive filtered by the disable_flag column
 * @method     ChildSampleArchive findOneByFavoriteFlag(boolean $favorite_flag) Return the first ChildSampleArchive filtered by the favorite_flag column
 * @method     ChildSampleArchive findOneByCreatedAt(string $created_at) Return the first ChildSampleArchive filtered by the created_at column
 * @method     ChildSampleArchive findOneByUpdatedAt(string $updated_at) Return the first ChildSampleArchive filtered by the updated_at column
 * @method     ChildSampleArchive findOneByArchivedAt(string $archived_at) Return the first ChildSampleArchive filtered by the archived_at column *

 * @method     ChildSampleArchive requirePk($key, ConnectionInterface $con = null) Return the ChildSampleArchive by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOne(ConnectionInterface $con = null) Return the first ChildSampleArchive matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSampleArchive requireOneById(string $id) Return the first ChildSampleArchive filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByName(string $name) Return the first ChildSampleArchive filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByImage(string $image) Return the first ChildSampleArchive filtered by the image column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByImageMeta(string $image_meta) Return the first ChildSampleArchive filtered by the image_meta column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByItemA(string $item_a) Return the first ChildSampleArchive filtered by the item_a column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByItemB(string $item_b) Return the first ChildSampleArchive filtered by the item_b column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByACategoryId(int $a_category_id) Return the first ChildSampleArchive filtered by the a_category_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByStickyFlag(boolean $sticky_flag) Return the first ChildSampleArchive filtered by the sticky_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByDisableFlag(boolean $disable_flag) Return the first ChildSampleArchive filtered by the disable_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByFavoriteFlag(boolean $favorite_flag) Return the first ChildSampleArchive filtered by the favorite_flag column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByCreatedAt(string $created_at) Return the first ChildSampleArchive filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByUpdatedAt(string $updated_at) Return the first ChildSampleArchive filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSampleArchive requireOneByArchivedAt(string $archived_at) Return the first ChildSampleArchive filtered by the archived_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSampleArchive[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildSampleArchive objects based on current ModelCriteria
 * @method     ChildSampleArchive[]|ObjectCollection findById(string $id) Return ChildSampleArchive objects filtered by the id column
 * @method     ChildSampleArchive[]|ObjectCollection findByName(string $name) Return ChildSampleArchive objects filtered by the name column
 * @method     ChildSampleArchive[]|ObjectCollection findByImage(string $image) Return ChildSampleArchive objects filtered by the image column
 * @method     ChildSampleArchive[]|ObjectCollection findByImageMeta(string $image_meta) Return ChildSampleArchive objects filtered by the image_meta column
 * @method     ChildSampleArchive[]|ObjectCollection findByItemA(string $item_a) Return ChildSampleArchive objects filtered by the item_a column
 * @method     ChildSampleArchive[]|ObjectCollection findByItemB(string $item_b) Return ChildSampleArchive objects filtered by the item_b column
 * @method     ChildSampleArchive[]|ObjectCollection findByACategoryId(int $a_category_id) Return ChildSampleArchive objects filtered by the a_category_id column
 * @method     ChildSampleArchive[]|ObjectCollection findByStickyFlag(boolean $sticky_flag) Return ChildSampleArchive objects filtered by the sticky_flag column
 * @method     ChildSampleArchive[]|ObjectCollection findByDisableFlag(boolean $disable_flag) Return ChildSampleArchive objects filtered by the disable_flag column
 * @method     ChildSampleArchive[]|ObjectCollection findByFavoriteFlag(boolean $favorite_flag) Return ChildSampleArchive objects filtered by the favorite_flag column
 * @method     ChildSampleArchive[]|ObjectCollection findByCreatedAt(string $created_at) Return ChildSampleArchive objects filtered by the created_at column
 * @method     ChildSampleArchive[]|ObjectCollection findByUpdatedAt(string $updated_at) Return ChildSampleArchive objects filtered by the updated_at column
 * @method     ChildSampleArchive[]|ObjectCollection findByArchivedAt(string $archived_at) Return ChildSampleArchive objects filtered by the archived_at column
 * @method     ChildSampleArchive[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class SampleArchiveQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Common\Model\Base\SampleArchiveQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Common\\Model\\SampleArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSampleArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSampleArchiveQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildSampleArchiveQuery) {
            return $criteria;
        }
        $query = new ChildSampleArchiveQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSampleArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SampleArchiveTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SampleArchiveTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSampleArchive A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, name, image, image_meta, item_a, item_b, a_category_id, sticky_flag, disable_flag, favorite_flag, created_at, updated_at, archived_at FROM sample_archive WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSampleArchive $obj */
            $obj = new ChildSampleArchive();
            $obj->hydrate($row);
            SampleArchiveTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildSampleArchive|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SampleArchiveTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SampleArchiveTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the image column
     *
     * @param     mixed $image The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByImage($image = null, $comparison = null)
    {

        return $this->addUsingAlias(SampleArchiveTableMap::COL_IMAGE, $image, $comparison);
    }

    /**
     * Filter the query on the image_meta column
     *
     * Example usage:
     * <code>
     * $query->filterByImageMeta('fooValue');   // WHERE image_meta = 'fooValue'
     * $query->filterByImageMeta('%fooValue%'); // WHERE image_meta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $imageMeta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByImageMeta($imageMeta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($imageMeta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $imageMeta)) {
                $imageMeta = str_replace('*', '%', $imageMeta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_IMAGE_META, $imageMeta, $comparison);
    }

    /**
     * Filter the query on the item_a column
     *
     * Example usage:
     * <code>
     * $query->filterByItemA('fooValue');   // WHERE item_a = 'fooValue'
     * $query->filterByItemA('%fooValue%'); // WHERE item_a LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemA The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByItemA($itemA = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemA)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $itemA)) {
                $itemA = str_replace('*', '%', $itemA);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_ITEM_A, $itemA, $comparison);
    }

    /**
     * Filter the query on the item_b column
     *
     * Example usage:
     * <code>
     * $query->filterByItemB('fooValue');   // WHERE item_b = 'fooValue'
     * $query->filterByItemB('%fooValue%'); // WHERE item_b LIKE '%fooValue%'
     * </code>
     *
     * @param     string $itemB The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByItemB($itemB = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($itemB)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $itemB)) {
                $itemB = str_replace('*', '%', $itemB);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_ITEM_B, $itemB, $comparison);
    }

    /**
     * Filter the query on the a_category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByACategoryId(1234); // WHERE a_category_id = 1234
     * $query->filterByACategoryId(array(12, 34)); // WHERE a_category_id IN (12, 34)
     * $query->filterByACategoryId(array('min' => 12)); // WHERE a_category_id > 12
     * </code>
     *
     * @param     mixed $aCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByACategoryId($aCategoryId = null, $comparison = null)
    {
        if (is_array($aCategoryId)) {
            $useMinMax = false;
            if (isset($aCategoryId['min'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_A_CATEGORY_ID, $aCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aCategoryId['max'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_A_CATEGORY_ID, $aCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_A_CATEGORY_ID, $aCategoryId, $comparison);
    }

    /**
     * Filter the query on the sticky_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByStickyFlag(true); // WHERE sticky_flag = true
     * $query->filterByStickyFlag('yes'); // WHERE sticky_flag = true
     * </code>
     *
     * @param     boolean|string $stickyFlag The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByStickyFlag($stickyFlag = null, $comparison = null)
    {
        if (is_string($stickyFlag)) {
            $stickyFlag = in_array(strtolower($stickyFlag), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_STICKY_FLAG, $stickyFlag, $comparison);
    }

    /**
     * Filter the query on the disable_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByDisableFlag(true); // WHERE disable_flag = true
     * $query->filterByDisableFlag('yes'); // WHERE disable_flag = true
     * </code>
     *
     * @param     boolean|string $disableFlag The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByDisableFlag($disableFlag = null, $comparison = null)
    {
        if (is_string($disableFlag)) {
            $disableFlag = in_array(strtolower($disableFlag), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_DISABLE_FLAG, $disableFlag, $comparison);
    }

    /**
     * Filter the query on the favorite_flag column
     *
     * Example usage:
     * <code>
     * $query->filterByFavoriteFlag(true); // WHERE favorite_flag = true
     * $query->filterByFavoriteFlag('yes'); // WHERE favorite_flag = true
     * </code>
     *
     * @param     boolean|string $favoriteFlag The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByFavoriteFlag($favoriteFlag = null, $comparison = null)
    {
        if (is_string($favoriteFlag)) {
            $favoriteFlag = in_array(strtolower($favoriteFlag), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_FAVORITE_FLAG, $favoriteFlag, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the archived_at column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivedAt('2011-03-14'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt('now'); // WHERE archived_at = '2011-03-14'
     * $query->filterByArchivedAt(array('max' => 'yesterday')); // WHERE archived_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $archivedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(SampleArchiveTableMap::COL_ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SampleArchiveTableMap::COL_ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildSampleArchive $sampleArchive Object to remove from the list of results
     *
     * @return $this|ChildSampleArchiveQuery The current query, for fluid interface
     */
    public function prune($sampleArchive = null)
    {
        if ($sampleArchive) {
            $this->addUsingAlias(SampleArchiveTableMap::COL_ID, $sampleArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the sample_archive table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SampleArchiveTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SampleArchiveTableMap::clearInstancePool();
            SampleArchiveTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SampleArchiveTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SampleArchiveTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SampleArchiveTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SampleArchiveTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // SampleArchiveQuery
