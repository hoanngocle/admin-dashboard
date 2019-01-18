<?php
/**
 * Created by PhpStorm.
 * User: hoanc
 * Date: 1/11/2019
 * Time: 2:47 PM
 */

namespace App\Repositories;

interface RepositoryInterface
{

    /**
     * get all
     *
     * @param array $columns
     * @return mixed
     */
    public function getAll();

    /**
     * get paging item will be show
     *
     * @param null  $limit
     * @param array $columns
     * @return mixed
     */
    public function paginate($paging, $sort,$limit = null, $columns = array('*'));

    /**
     * get one
     *
     * @param       $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*'));

    /**
     * get by 1 field
     *
     * @param       $field
     * @param       $value
     * @param array $columns
     * @return mixed
     */
    public function findByField($field, $value, $columns = array('*'));

    /**
     * get by condition
     *
     * @param array $where
     * @param array $columns
     * @return mixed
     */
    public function findWhere(array $where, $columns = array('*'));

    /**
     * get by condition in array
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     * @return mixed
     */
    public function findWhereIn($field, array $values, $columns = array('*'));

    /**
     * get by condition not in array
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     * @return mixed
     */
    public function findWhereNotIn($field, array $values, $columns = array('*'));

    /**
     * create item
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * update item
     *
     * @param array $attributes
     * @param       $id
     * @return mixed
     */
    public function update(array $attributes, $id);

    /**
     * delete item
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);

}
