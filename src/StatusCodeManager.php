<?php


namespace HttpStatusCodes;


use ReflectionClass;

class StatusCodeManager
{
    protected $statusCodesClass;

    /** @var array */
    protected $statusWithConstantsName;

    /**
     * StatusCodeManager constructor.
     * @param $statusCodesClass
     * @throws \ReflectionException
     */
    public function __construct(string $statusCodesClass = null)
    {
        if ($statusCodesClass) {
            $this->statusCodesClass = $statusCodesClass;
        } else {
            $this->statusCodesClass = new RFCStatusCodes();
        }

        $rc = new ReflectionClass($this->statusCodesClass);
        $this->statusWithConstantsName = [];
        foreach ($rc->getConstants() as $constantName => $code) {
            if (is_int($code) && substr($constantName, 0, 5) === 'HTTP_') {
                $this->statusWithConstantsName[$code] = $constantName;
            }
        }
    }


    /**
     * @param string|int $code
     * @return StatusCode|null
     * @throws \ReflectionException
     */
    public function makeStatusCode($code): ?StatusCode
    {
        if (is_int($code)) {
            if (!isset($this->statusWithConstantsName[$code])) {
                return null;
            }
            $code = $this->statusWithConstantsName[$code];
        }

        $rc = new ReflectionClass($this->statusCodesClass);
        $constantInfo = $rc->getReflectionConstant($code);
        if(!$constantInfo) {
            return null;
        }
        preg_match_all('#@(.*?)( )(.*?)?\n#s', $constantInfo->getDocComment(), $annotations);
        $filteredAnnotation = array_combine($annotations[1], $annotations[3]);

        $filteredAnnotation['code'] = $constantInfo->getValue();

        if (!isset($filteredAnnotation['message'])) {
            $text = str_replace('HTTP_', '', $code);
            $text = strtolower($text);
            $text = str_replace('_', '_', $text);
            $filteredAnnotation['message'] = ucwords($text);
        }

        return new StatusCode($filteredAnnotation);
    }

}