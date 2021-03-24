<?php

namespace Trello\Api\Board;

use Trello\Api\AbstractApi;
use Trello\Api\Member;
use Trello\Exception\InvalidArgumentException;

/**
 * Trello Board Custom Fields API
 * @link https://trello.com/docs/api/board
 *
 * Fully implemented.
 */
class CustomFields extends AbstractApi
{
    /**
     * Base path of board members api
     * @var string
     */
    protected $path = 'boards/#id#/customFields';

    /**
     * Get a given board's custom fields
     * @link https://developer.atlassian.com/cloud/trello/rest/api-group-boards/#api-boards-id-customfields-get
     *
     * @param string $id the board's id
     * @param array $params optional parameters
     *
     * @return array
     */
    public function all($id, array $params = [])
    {
        return $this->get($this->getPath($id), $params);
    }


}
