<?php
namespace PhpSlackBot\Webhook;

use React\Http\Response;

abstract class BaseWebhook extends \PhpSlackBot\Base {

    /**
     * @var Response
     */
    private $response;

    /**
     * @param $payload
     * @param $context
     *
     * @return mixed
     */
    public function executeWebhook($payload, $context) {
        return $this->execute($payload, $context);
    }

    /**
     * Set the response
     *
     * @param Response $response
     *
     * @return $this
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Retrieve response (if set)
     *
     * @return null|Response
     */
    public function getResponse()
    {
        return $this->response;
    }

}
