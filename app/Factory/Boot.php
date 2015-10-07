<?php
namespace Annatar\Factory;
use Annatar\Controllers\DetailInfoGet;
use Annatar\Controllers\UsersGet;
use Annatar\Curl\Analysis\CrawlerAnalysis;
use Annatar\Curl\Analysis\UserFollowersAnalysis;
use Annatar\Curl\AnalysisData;
use Annatar\Curl\Crawler;
use Annatar\Database\MySQLDatabase;
use Annatar\Store\StoreDetails;
use Annatar\Store\StoreUsers;

/**
 * Created by PhpStorm.
 * User: Annatar
 * Date: 2015/10/5
 * Time: 22:41
 */

class Boot
{
    /**
     *
     * 实例化curl爬虫
     * @param array $configs
     * @return Crawler
     */
    static public function curl(array $configs) {

        $url = $configs['url'];
        $cookies = $configs['cookies'];
        return new Crawler($url, $cookies);
    }

    /**
     * 实例化分析程序
     *
     * @return AnalysisData
     */
    static public function analysis() {
        return new AnalysisData();
    }

    /**
     * 实例化爬虫数据分析
     *
     * @return CrawlerAnalysis
     */
    static public function crawlerAnalysis() {
        return new CrawlerAnalysis();
    }

    /**
     * 实例化用户关注人分析
     *
     * @return UserFollowersAnalysis
     */
    static public function userFollowersAnalysis() {
        return new UserFollowersAnalysis();
    }

    /**
     * 单例模式
     * 生成数据库对象
     *
     * @return MySQLDatabase|\PDO
     */
    static public function DB() {
        return MySQLDatabase::getInstence();
    }

    /**
     * 单例模式
     * 生成用户存储数据实例
     *
     * @return \Annatar\Store\StoreUsers
     */
    static public function userStore() {
        return StoreUsers::getInstence();
    }

    /**
     * 生成详细信息存储实例
     *
     * @return \Annatar\Store\StoreDetails
     */
    static public function detailsStore() {
        return StoreDetails::getInstence();
    }

    /**
     * @var \Predis\Client
     */
    static protected $redis;

    /**
     * 单例模式获取Redis连接
     *
     * @return \Predis\Client
     */
    static public function redis() {
        if(empty(static::$redis)){
            static::$redis = new \Predis\Client();
        }
        return static::$redis;
    }

    /**
     * 获取用户的控制器
     *
     * @return UsersGet
     */
    static public function usersGetController() {
        return new UsersGet();
    }

    /**
     * 获取用户详细信息的控制器
     *
     * @return DetailInfoGet
     */
    static public function detailInfoGetController() {

        return new DetailInfoGet();
    }

}
