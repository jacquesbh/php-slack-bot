<?php
namespace PhpSlackBot\Webhook;

use React\Http\Response;
use React\Http\Request;

abstract class BaseWebhook extends \PhpSlackBot\Base {

    /**
     * @var Response
     */
    private $response;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var string
     */
    private $body;

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

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param Request $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

}
