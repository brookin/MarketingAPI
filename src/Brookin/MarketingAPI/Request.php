<?php
/**
 * Created by PhpStorm.
 * Date: 11/26/17
 * Time: 7:42 PM
 */

namespace Brookin\MarketingAPI;


use Rafrsr\LibArray2Object\Object2ArrayBuilder;

class Request
{
    /**
     * @var string
     */
    protected $guzzleRequestEnctype;

    /**
     * @return string
     */
    public function getGuzzleRequestEnctype()
    {
        return $this->guzzleRequestEnctype;
    }

    /**
     * @param string $guzzleRequestEnctype
     */
    public function setGuzzleRequestEnctype($guzzleRequestEnctype)
    {
        $this->guzzleRequestEnctype = $guzzleRequestEnctype;
    }


    public function toQueryString()
    {
        $list = get_object_vars($this);

        $tmp = [];
        foreach ($list as $k => $v) {
            $tmp[$this->uncamelize($k)] = $v;
        }

        return http_build_query($tmp);
    }

    public function toArray() {
        if ($this->getGuzzleRequestEnctype() === 'multipart') {
            $array = $this->toFormDataArray();
        } else {
            $tool = Object2ArrayBuilder::create();
            $tool->setNamingStrategy((new ParamNameTransform()));
            $array = $tool->build()->createArray($this);
        }
        return $array;
    }

    public function toDefaultArray()
    {

    }

    public function toFormDataArray()
    {
        $list = get_object_vars($this);

        $array['multipart'] = [];
        foreach ($list as $k => $v) {
            $temp['name'] = $this->uncamelize($k);

            if (is_object($v) && $v instanceof UploadFileStruct) {
                $temp['contents'] = fopen($v->getFilePath(), 'r');
            } else {
                $temp['contents'] = $v;
            }
            $array['multipart'][] = $temp;
        }

        return $array;
    }

    public function getApiRequestMethod()
    {
        $classShortName = strtolower(self::uncamelize((new \ReflectionClass(static::class))->getShortName()));
        $package = explode('_', $classShortName);
        $methodIndex = count($package) - 2;
        if ($methodIndex < 0) {
            throw new \Exception('this request must offer an api method name', 1001);
        }
        return $package[$methodIndex];
    }

    /**
     * 下划线转驼峰
     * 思路:
     * step1.原字符串转小写,原字符串中的分隔符用空格替换,在字符串开头加上分隔符
     * step2.将字符串中每个单词的首字母转换为大写,再去空格,去字符串首部附加的分隔符.
     */
    public static function camelize($uncamelized_words,$separator='_')
    {
        $uncamelized_words = $separator. str_replace($separator, " ", strtolower($uncamelized_words));
        return ltrim(str_replace(" ", "", ucwords($uncamelized_words)), $separator );
    }

    /**
     * 驼峰命名转下划线命名
     * 思路:
     * 小写和大写紧挨一起的地方,加上分隔符,然后全部转小写
     */
    public static function uncamelize($camelCaps,$separator='_')
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', "$1" . $separator . "$2", $camelCaps));
    }

}