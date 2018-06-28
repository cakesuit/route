<?php
namespace Cakesuit\Route\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Route helper
 */
class RouteHelper extends Helper
{

    public $helpers = ['Html', 'Url'];

    /**
     * @param $routename
     * @param $title
     * @param array $params
     * @param array $options
     * @return mixed
     */
    public function link($routename, $title, array $params = [], array $options = [])
    {
        return $this->Html->link($title, ['_name' => $routename] + $params, $options);
    }

    /**
     * @param $routename
     * @param array $params
     * @param bool $fullbase
     * @return mixed
     */
    public function url($routename, array $params = [], $fullbase = false)
    {
        if ($fullbase) {
            $params += ['_full' => true];
        }
        return $this->Url->build(['_name' => $routename] + $params);
    }

}
