<?php

namespace Webeau\Ovio;

class Bag extends Ovio
{
    protected $api_name = 'bag';

    /**
     * Search kvk database
     *
     * Example:
     * $ovio->search(['filter' => ['postcode' => '3083cz']]);
     *
     * @param array $params
     * @return mixed|null
     */
    public function search(array $params)
    {
        return $this->fetch('api', '?' . http_build_query($params));
    }

    /**
     * Simple search kvk database
     *
     * Example:
     * $ovio->searchBy('postcode', '3083cz');
     *
     * @param string $key
     * @param string $value
     * @return \stdClass|null
     */
    public function searchBy($key, $value)
    {
        return $this->search(['filter' => [$key => $value]]);
    }

}
