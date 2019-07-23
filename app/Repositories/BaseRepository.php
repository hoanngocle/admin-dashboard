<?php
/**
 * Created by PhpStorm.
 * User: hoanc
 * Date: 1/11/2019
 * Time: 2:54 PM
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;
use Exception;

/**
 * Class BaseRepository
 *
 * @package App\Repositories
 */
abstract class BaseRepository implements RepositoryInterface
{
    protected $app;

    /**
     * @var $model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Get model
     *
     * @return string
     */
    abstract public function model();

    /**
     * @return Model
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an "
                . "instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * get all
     *
     * @param array $columns
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->all();
        // TODO: Implement all() method.
    }

    /**
     * get paging item will be show
     *
     * @param null  $limit
     * @param array $columns
     * @return mixed
     */
    public function paginate($paging, $sort,$limit = null, $columns = array('*'))
    {
        return $this->model->orderBy($orderBy, $sort)->paginate($paging);
    }

    /**
     * get one
     *
     * @param       $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*'))
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }

    /**
     * get by 1 field
     *
     * @param       $field
     * @param       $value
     * @param array $columns
     * @return mixed
     */
    public function findByField($field, $value, $columns = array('*'))
    {
        // TODO: Implement findByField() method.
    }

    /**
     * get by condition
     *
     * @param array $where
     * @param array $columns
     * @return mixed
     */
    public function findWhere(array $where, $columns = array('*'))
    {
        // TODO: Implement findWhere() method.
    }

    /**
     * get by condition in array
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     * @return mixed
     */
    public function findWhereIn($field, array $values, $columns = array('*'))
    {
        // TODO: Implement findWhereIn() method.
    }

    /**
     * get by condition not in array
     *
     * @param       $field
     * @param array $values
     * @param array $columns
     * @return mixed
     */
    public function findWhereNotIn($field, array $values, $columns = array('*'))
    {
        // TODO: Implement findWhereNotIn() method.
    }

    /**
     * create item
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        try {
            DB::beginTransaction();

            $new = new $this->model;

            foreach ($attributes as $key => $value) {
                $new->$key = $attributes[$key];
            }

            $new->save();

            DB::commit();

            $result['status'] = true;
            $result['content'] = $new;

        } catch (Exception $e) {
            DB::rollBack();
            logger('【 ' . __METHOD__ . ' 】 - ' . $e->getMessage());

            $result['status'] = false;
            $result['content'] = $e->getMessage();
        }
        return $result;
    }

    /**
     * update item
     *
     * @param array $attributes
     * @param       $id
     * @return mixed
     */
    public function update(array $attributes, $id)
    {
        $update = $this->find($id);
        if ($update) {
            try {
                DB::beginTransaction();

                $update->update($attributes);

                DB::commit();

                $result['status'] = true;
                $result['content'] = $update;

            } catch (Exception $e) {
                DB::rollBack();
                logger('【 ' . __METHOD__ . ' 】 - ' . $e->getMessage());

                $result['status'] = false;
                $result['content'] = $e->getMessage();
            }

        } else {
            $result['status'] = false;
            $result['content'] = 'Not found data to update';
        }

        return $result;
    }

    /**
     * delete item
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();
            return true;
        }

        return false;
    }
}
