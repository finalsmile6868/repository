<?php namespace Finalsmile6868\Repository\Criteria;

use Finalsmile6868\Repository\Contracts\RepositoryInterface as Repository;

abstract class Criteria {

    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    public abstract function apply($model, Repository $repository);
}
