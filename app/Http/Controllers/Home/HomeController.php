<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('guest')->except('logout');
    }

    /**
     * ebay
     *
     * @return Response
     */
    public function ebay(){
        $data = array(
            'name' => 'ebay',
            'documention' => 'http://www.ebay.cn/developer/api/',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://www.ebay.cn/show.php?contentid=4264',
            'paypal' => 'https://developer.paypal.com/reference/'
        );
        return view('home.ebay',$data);
    }

    /**
     * home
     *
     * @return Response
     */
    public function home(){
        $data = array(
            'name' => config('database.connections.mysql.charset'),
            'app' => config('app.log')
        );
        return view('home.ebay',$data);
    }

    /**
     * amazon
     *
     * @return Response
     */
    public function amazon(){
        $data = array(
            'name' => 'amazon',
            'documention' => 'https://developer.amazonservices.com.cn/',
            'pdf' => 'https://images-cn.ssl-images-amazon.com/images/G/28/rainier/help/XML_Documentation_Intl._V158771171_.pdf',
            'git' => '',
            'manul' => 'https://mws.amazonservices.com/scratchpad/index.html'
        );
        return view('home.ebay',$data);
    }

    /**
     * wish
     *
     * @return Response
     */
    public function wish(){
        $data = array(
            'name' => 'wish',
            'documention' => 'https://merchant.wish.com/documentation/api',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://sandbox.merchant.wish.com/welcome?next=%2F'
        );
        return view('home.ebay',$data);
    }

    /**
     * aliexpress
     *
     * @return Response
     */
    public function aliexpress(){
        $data = array(
            'name' => 'aliexpress',
            'documention' => 'http://gw.api.alibaba.com/dev/doc/intl/sys_join.htm?ns=aliexpress.open',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://gw.api.alibaba.com/dev/doc/intl/sys_sdk.htm?ns=aliexpress.open'
        );
        return view('home.ebay',$data);
    }

    /**
     * lazada
     *
     * @return Response
     */
    public function lazada(){
        $data = array(
            'name' => 'lazada',
            'documention' => 'http://gw.api.alibaba.com/dev/doc/intl/sys_join.htm?ns=aliexpress.open',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://lazada-sellercenter.readme.io/docs?spm=0.0.0.0.DGOrVi'
        );
        return view('home.ebay',$data);
    }

    /**
     * joom
     *
     * @return Response
     */
    public function joom(){
        $data = array(
            'name' => 'joom',
            'documention' => 'https://www.joom.com/en/',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://merchant.joom.com/documentation/api/v2/#fulfill-an-order'
        );
        return view('home.ebay',$data);
    }

    /**
     * paytm
     *
     * @return Response
     */
    public function paytm(){
        $data = array(
            'name' => 'paytm',
            'documention' => 'https://www.programmableweb.com/api/paytm',
            'pdf' => '',
            'git' => '',
            'manul' => ''
        );
        return view('home.ebay',$data);
    }

    /**
     * shopee
     *
     * @return Response
     */
    public function shopee(){
        $data = array(
            'name' => 'shopee',
            'documention' => 'http://shopee.cn/',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://partner.shopeemobile.com/docs/'
        );
        return view('home.ebay',$data);
    }

    /**
     * yahoo
     *
     * @return Response
     */
    public function yahoo(){
        $data = array(
            'name' => 'yahoo',
            'documention' => 'https://developer.yahoo.co.jp/',
            'pdf' => '',
            'git' => '',
            'manul' => ''
        );
        return view('home.ebay',$data);
    }

    /**
     * yahoo
     *
     * @return Response
     */
    public function php(){
        $data = array(
            'name' => 'php',
            'documention' => 'http://php.net/manual/zh/',
            'pdf' => '',
            'git' => '',
            'manul' => ''
        );
        return view('home.ebay',$data);
    }

    /**
     * linux
     *
     * @return Response
     */
    public function linux(){
        $data = array(
            'name' => 'linux',
            'documention' => 'https://www.linux.org/forums/linux-beginner-tutorials.123/',
            'pdf' => '',
            'git' => '',
            'manul' => ''
        );
        return view('home.ebay',$data);
    }

    /**
     * apache
     *
     * @return Response
     */
    public function apache(){
        $data = array(
            'name' => 'apache',
            'documention' => 'https://www.apache.org/index.html#projects-list',
            'pdf' => '',
            'git' => '',
            'manul' => ''
        );
        return view('home.ebay',$data);
    }

    /**
     * nginx
     *
     * @return Response
     */
    public function nginx(){
        $data = array(
            'name' => 'nginx',
            'documention' => 'http://nginx.org/en/docs/',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://nginx.org/en/docs/beginners_guide.html'
        );
        return view('home.ebay',$data);
    }

    /**
     * mysql
     *
     * @return Response
     */
    public function mysql(){
        $data = array(
            'name' => 'mysql',
            'documention' => 'https://dev.mysql.com/doc/',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://php.net/manual/zh/ref.mysql.php'
        );
        return view('home.ebay',$data);
    }

    /**
     * redis
     *
     * @return Response
     */
    public function redis(){
        $data = array(
            'name' => 'redis',
            'documention' => 'https://redis.io/documentation',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://redis.io/modules'
        );
        return view('home.ebay',$data);
    }

    /**
     * mongo
     *
     * @return Response
     */
    public function mongo(){
        $data = array(
            'name' => 'mongo',
            'documention' => 'https://www.mongodb.com/',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://docs.mongodb.com/?_ga=2.218966045.56897730.1503485291-1452450860.1503485291'
        );
        return view('home.ebay',$data);
    }

    /**
     * memcache
     *
     * @return Response
     */
    public function memcache(){
        $data = array(
            'name' => 'memcache',
            'documention' => 'http://memcached.org/',
            'pdf' => '',
            'git' => 'https://github.com/memcached/memcached/issues',
            'manul' => 'https://github.com/memcached/perl-Cache-Memcached'
        );
        return view('home.ebay',$data);
    }

    /**
     * vagrant
     *
     * @return Response
     */
    public function vagrant(){
        $data = array(
            'name' => 'vagrant',
            'documention' => 'https://segmentfault.com/a/1190000000264347',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://www.vagrantup.com/docs/index.html'
        );
        return view('home.ebay',$data);
    }

    /**
     * C#
     *
     * @return Response
     */
    public function csharp(){
        $data = array(
            'name' => 'c#',
            'documention' => 'https://docs.microsoft.com/zh-cn/dotnet/csharp/index',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://docs.microsoft.com/zh-cn/dotnet/api/?view=azure-dotnet'
        );
        return view('home.ebay',$data);
    }

    /**
     * opencv
     *
     * @return Response
     */
    public function opencv(){
        $data = array(
            'name' => 'opencv',
            'documention' => 'http://opencv.org/',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://wiki.opencv.org.cn/index.php/%E9%A6%96%E9%A1%B5'
        );
        return view('home.ebay',$data);
    }

    /**
     * docker
     *
     * @return Response
     */
    public function docker(){
        $data = array(
            'name' => 'docker',
            'documention' => 'https://www.docker.com/',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://www.docker.org.cn/book/docker/what-is-docker-16.html'
        );
        return view('home.ebay',$data);
    }

    /**
     * sphinx
     *
     * @return Response
     */
    public function sphinx(){
        $data = array(
            'name' => 'sphinx',
            'documention' => 'http://www.sphinxsearch.org/',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://www.sphinxsearch.org/sphinx-realtime-api'
        );
        return view('home.ebay',$data);
    }

    /**
     * api store
     *
     * @return Response
     */
    public function apistore(){
        $data = array(
            'name' => 'apistore',
            'documention' => 'http://apistore.baidu.com/',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://apistore.baidu.com/astore/guide.html'
        );
        return view('home.ebay',$data);
    }

    /**
     * github
     *
     * @return Response
     */
    public function github(){
        $data = array(
            'name' => 'github',
            'documention' => 'https://github.com/WITHOUT7',
            'pdf' => '',
            'git' => '',
            'manul' => 'http://gw.api.alibaba.com/dev/doc/intl/sys_sdk.htm?ns=aliexpress.open'
        );
        return view('home.ebay',$data);
    }

    /**
     * laravel
     *
     * @return Response
     */
    public function laravel(){
        $data = array(
            'name' => 'laravel',
            'documention' => 'http://www.golaravel.com/',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://cs.laravel-china.org/'
        );
        return view('home.ebay',$data);
    }

    /**
     * yii
     *
     * @return Response
     */
    public function yii(){
        $data = array(
            'name' => 'yii',
            'documention' => 'http://www.yiichina.com/doc',
            'pdf' => '',
            'git' => '',
            'manul' => 'https://cs.laravel-china.org/'
        );
        return view('home.ebay',$data);
    }
}
