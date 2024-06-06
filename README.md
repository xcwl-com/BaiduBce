# BaiduBce
BaiduBce.phar Composer版
官方地址：https://cloud.baidu.com/doc/Developer/index.html?sdk=php

# 版本说明
采用baidu-bce-php-sdk v0.9.22版本，根据官方实时更新
将Guzzle3.9升级至GuzzleHttp7.x

# 使用

## 安装

```
composer require xcwl/baidu-bce
```

## 调用
直接使用`use`引入，如：

```
use BaiduBce\Http\BceHttpClient
```

```
use BaiduBce\Auth\BceV1Signer
```

```
// sts临时凭证
use BaiduBce\Services\Sts\StsClient;
```

```
use BaiduBce\Services\Media\MediaClient;
```

```
use BaiduBce\Services\Bos\BosClient;
```
