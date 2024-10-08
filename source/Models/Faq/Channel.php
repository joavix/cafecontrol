<?php

namespace Source\Models\Faq;

use Source\Core\Model;

/**
 * Class Channel
 * @package Source\Models\Faq
 */
class Channel extends Model
{
    /**
     * Channel constructor
     */
    public function __construct()
    {
        parent::__construct("faq_channels", ["id"], ["channel", "description"]);
    }
}