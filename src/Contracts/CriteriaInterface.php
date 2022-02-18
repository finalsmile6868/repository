<?php

namespace Finalsmile6868\Repository\Contracts;

use Finalsmile6868\Repository\Criteria\Criteria;

/**
 * Interface CriteriaInterface
 * @package Finalsmile6868\Repository\Contracts
 */
interface CriteriaInterface {

    /**
     * @param bool $status
     * @return $this
     */
    public function skipCriteria($status = true);

    /**
     * @return mixed
     */
    public function getCriteria();

    /**
     * @param Criteria $criteria
     * @return $this
     */
    public function getByCriteria(Criteria $criteria);

    /**
     * @param Criteria $criteria
     * @return $this
     */
    public function pushCriteria(Criteria $criteria);

    /**
     * @return $this
     */
    public function  applyCriteria();
}
