<?php


class Logger
{
    /**
     * @var $data
     */
    private $data;
    /**
     * @var $code
     */
    private $code;
    /**
     * @var $status
     */
    private $status;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public static function json($data = null, $code=200, $status="OK"){
        echo json_encode([
            "code" => $code,
            "status" => $status,
            "body" => $data
        ]);
        exit;
    }


}