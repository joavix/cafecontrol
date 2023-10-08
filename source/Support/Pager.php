<?php

namespace Source\Support;

use CoffeeCode\Paginator\Paginator;

/**
 * Class Pager
 * @package Source\Support
 */
class Pager extends Paginator
{
    /**
     * Pager constructor
     * @param string|null $link
     * @param string|null $title
     * @param array|null $first
     * @param array|null $last
     */
    public function __construct(string $link = null, string $title = null, array $first = null, array $last = null)
    {
        parent::__construct($link, $title, $first, $last);
    }
}